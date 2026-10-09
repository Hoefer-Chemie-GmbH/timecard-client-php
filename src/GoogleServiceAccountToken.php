<?php

declare(strict_types=1);

namespace TimecardClient;

use Google\Auth\Credentials\ServiceAccountCredentials;

/**
 * Google ID tokens for a service account, as the facade expects them (audience = public URL of the facade).
 * Tokens are cached until shortly before expiry.
 */
final class GoogleServiceAccountToken
{
    private const RENEW_BEFORE_SECONDS = 60;

    private ServiceAccountCredentials $credentials;
    private ?string $token = null;
    private int $expiresAt = 0;

    /** @param array<string,mixed>|string $key decoded key file or path to the service account JSON */
    public function __construct(array|string $key, private readonly string $audience)
    {
        $json = is_array($key) ? $key : json_decode((string) file_get_contents($key), true, 512, JSON_THROW_ON_ERROR);
        $this->credentials = new ServiceAccountCredentials(null, $json, null, $this->audience);
    }

    public function token(): string
    {
        if ($this->token !== null && $this->expiresAt - self::RENEW_BEFORE_SECONDS > time()) {
            return $this->token;
        }
        $result = $this->credentials->fetchAuthToken();
        $idToken = $result['id_token'] ?? null;
        if (!is_string($idToken)) {
            throw new \RuntimeException('Google token endpoint returned no id_token for the service account');
        }
        $payload = json_decode(base64_decode(strtr(explode('.', $idToken)[1] ?? '', '-_', '+/')) ?: '{}', true);
        $this->token = $idToken;
        $this->expiresAt = (int) ($payload['exp'] ?? time() + 3600);
        return $idToken;
    }

    /** Configuration for the generated API classes; the access token is refreshed on each call of this method. */
    public function configuration(?Configuration $config = null): Configuration
    {
        $config ??= Configuration::getDefaultConfiguration();
        return $config->setHost($this->audience)->setAccessToken($this->token());
    }
}
