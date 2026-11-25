<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers;

final class TestClocks extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/test_helpers/test_clocks [operationId: GetTestHelpersTestClocks] */
    /**
     * List all test clocks
     *
     * <p>Returns a list of your test clocks.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\TestHelpers\TestClocks $params = null): \StripeSDK\Responses\V1\TestHelpers\TestClocks\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\TestClocks::class)->get($params);
    }

    /** POST /v1/test_helpers/test_clocks [operationId: PostTestHelpersTestClocks] */
    /**
     * Create a test clock
     *
     * <p>Creates a new test clock that can be attached to new customers and quotes.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TestHelpers\TestClocks\Post $payload): \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\TestClocks::class)->post($payload);
    }

    /** DELETE /v1/test_helpers/test_clocks/{test_clock} [operationId: DeleteTestHelpersTestClocksTestClock] */
    /**
     * Delete a test clock
     *
     * <p>Deletes a test clock.</p>
     */
    public static function deleteByTestClock(string $test_clock, ?\StripeSDK\Requests\V1\TestHelpers\TestClocks\ByTestClock\Delete $payload = null): \StripeSDK\DTOs\DeletedTestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\TestClocks::class)->deleteByTestClock($test_clock, $payload);
    }

    /** GET /v1/test_helpers/test_clocks/{test_clock} [operationId: GetTestHelpersTestClocksTestClock] */
    /**
     * Retrieve a test clock
     *
     * <p>Retrieves a test clock.</p>
     */
    public static function getByTestClock(string $test_clock, ?\StripeSDK\GetParams\V1\TestHelpers\TestClocks\ByTestClock $params = null): \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\TestClocks::class)->getByTestClock($test_clock, $params);
    }
}
