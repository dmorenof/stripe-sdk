<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\TestClocks\ByTestClock;

final class Advance extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/test_clocks/{test_clock}/advance [operationId: PostTestHelpersTestClocksTestClockAdvance] */
    /**
     * Advance a test clock
     *
     * <p>Starts advancing a test clock to a specified time in the future. Advancement is done when status changes to <code>Ready</code>.</p>
     */
    public static function post(string $test_clock, \StripeSDK\Requests\V1\TestHelpers\TestClocks\ByTestClock\Advance\Post $payload): \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\TestClocks\ByTestClock\Advance::class)->post($test_clock, $payload);
    }
}
