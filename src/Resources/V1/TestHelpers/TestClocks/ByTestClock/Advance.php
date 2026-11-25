<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\TestClocks\ByTestClock;

final class Advance extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/test_clocks/{test_clock}/advance',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\TestHelpers\\TestClock',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'test_clock' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Advance a test clock
     *
     * <p>Starts advancing a test clock to a specified time in the future. Advancement is done when status changes to <code>Ready</code>.</p>
     */
    public function post(string $test_clock, \StripeSDK\Requests\V1\TestHelpers\TestClocks\ByTestClock\Advance\Post $payload): \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['test_clock' => $test_clock], body: $payload);
        return $result;
    }
}
