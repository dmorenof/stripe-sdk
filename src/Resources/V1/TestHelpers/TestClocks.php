<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers;

final class TestClocks extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/test_helpers/test_clocks',
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
                'type' => '\\StripeSDK\\Responses\\V1\\TestHelpers\\TestClocks\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all test clocks
     *
     * <p>Returns a list of your test clocks.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\TestHelpers\TestClocks $params = null): \StripeSDK\Responses\V1\TestHelpers\TestClocks\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\TestHelpers\TestClocks\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/test_clocks',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Create a test clock
     *
     * <p>Creates a new test clock that can be attached to new customers and quotes.</p>
     */
    public function post(\StripeSDK\Requests\V1\TestHelpers\TestClocks\Post $payload): \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_TEST_CLOCK = [
        'method' => 'DELETE',
        'path' => '/v1/test_helpers/test_clocks/{test_clock}',
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
                'type' => '\\StripeSDK\\DTOs\\DeletedTestHelpers\\TestClock',
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
    ];

    /**
     * Delete a test clock
     *
     * <p>Deletes a test clock.</p>
     */
    public function deleteByTestClock(string $test_clock, ?\StripeSDK\Requests\V1\TestHelpers\TestClocks\ByTestClock\Delete $payload = null): \StripeSDK\DTOs\DeletedTestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\DeletedTestHelpers\TestClock|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_TEST_CLOCK), path: ['test_clock' => $test_clock], body: $payload);
        return $result;
    }

    private const array GET_BY_TEST_CLOCK = [
        'method' => 'GET',
        'path' => '/v1/test_helpers/test_clocks/{test_clock}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a test clock
     *
     * <p>Retrieves a test clock.</p>
     */
    public function getByTestClock(string $test_clock, ?\StripeSDK\GetParams\V1\TestHelpers\TestClocks\ByTestClock $params = null): \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\TestHelpers\TestClock|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TEST_CLOCK), path: ['test_clock' => $test_clock], parameters: $params);
        return $result;
    }
}
