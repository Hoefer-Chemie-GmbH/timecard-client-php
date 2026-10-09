<?php

declare(strict_types=1);

namespace TimecardClient;

/** RFC 9457 Problem Details as the facade returns them for every error; built from an ApiException. */
final class ProblemDetails
{
    /** @param array<int,array{path:string,message:string}> $errors @param array<string,mixed> $extra */
    public function __construct(
        public readonly string $type,
        public readonly string $title,
        public readonly int $status,
        public readonly string $instance,
        public readonly ?string $detail = null,
        public readonly array $errors = [],
        public readonly array $extra = [],
    ) {
    }

    public static function fromException(ApiException $e): ?self
    {
        $body = json_decode((string) $e->getResponseBody(), true);
        if (!is_array($body) || !isset($body['status'], $body['title'])) {
            return null;
        }
        $known = ['type', 'title', 'status', 'instance', 'detail', 'errors'];
        return new self(
            (string) ($body['type'] ?? 'about:blank'),
            (string) $body['title'],
            (int) $body['status'],
            (string) ($body['instance'] ?? ''),
            isset($body['detail']) ? (string) $body['detail'] : null,
            is_array($body['errors'] ?? null) ? $body['errors'] : [],
            array_diff_key($body, array_flip($known)),
        );
    }

    /** Request id of the facade, equals the `x-request-id` response header */
    public function requestId(): string
    {
        return str_starts_with($this->instance, 'urn:request:') ? substr($this->instance, 12) : $this->instance;
    }
}
