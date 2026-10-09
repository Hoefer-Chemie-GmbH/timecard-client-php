<?php

declare(strict_types=1);

namespace TimecardClient\Tests;

use TimecardClient\ApiException;
use TimecardClient\ProblemDetails;
use PHPUnit\Framework\TestCase;

final class ProblemDetailsTest extends TestCase
{
    public function testReadsTheFacadeErrorBody(): void
    {
        $e = new ApiException('nf', 404, [], '{"type":"https://x/errors/not-found","title":"Not found","status":404,"detail":"gone","instance":"urn:request:abc"}');
        $p = ProblemDetails::fromException($e);
        self::assertNotNull($p);
        self::assertSame(404, $p->status);
        self::assertSame('gone', $p->detail);
        self::assertSame('abc', $p->requestId());
    }

    public function testReturnsNullForOtherBodies(): void
    {
        self::assertNull(ProblemDetails::fromException(new ApiException('bad gateway', 502, [], '<html>')));
    }
}
