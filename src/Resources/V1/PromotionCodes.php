<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class PromotionCodes extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/promotion_codes',
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
                'type' => '\\StripeSDK\\Responses\\V1\\PromotionCodes\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all promotion codes
     *
     * <p>Returns a list of your promotion codes.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\PromotionCodes $params = null): \StripeSDK\Responses\V1\PromotionCodes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\PromotionCodes\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/promotion_codes',
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
                'type' => '\\StripeSDK\\DTOs\\Promotion\\Code',
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
            'metadata' => 'deepObject',
            'promotion' => 'nested',
            'restrictions' => 'nested',
        ],
    ];

    /**
     * Create a promotion code
     *
     * <p>A promotion code points to an underlying promotion. You can optionally restrict the code to a specific customer, redemption limit, and expiration date.</p>
     */
    public function post(\StripeSDK\Requests\V1\PromotionCodes\Post $payload): \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_PROMOTION_CODE = [
        'method' => 'GET',
        'path' => '/v1/promotion_codes/{promotion_code}',
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
                'type' => '\\StripeSDK\\DTOs\\Promotion\\Code',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'promotion_code' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a promotion code
     *
     * <p>Retrieves the promotion code with the given ID. In order to retrieve a promotion code by the customer-facing <code>code</code> use <a href="/docs/api/promotion_codes/list">list</a> with the desired <code>code</code>.</p>
     */
    public function getByPromotionCode(string $promotion_code, ?\StripeSDK\GetParams\V1\PromotionCodes\ByPromotionCode $params = null): \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PROMOTION_CODE), path: ['promotion_code' => $promotion_code], parameters: $params);
        return $result;
    }

    private const array POST_BY_PROMOTION_CODE = [
        'method' => 'POST',
        'path' => '/v1/promotion_codes/{promotion_code}',
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
                'type' => '\\StripeSDK\\DTOs\\Promotion\\Code',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'promotion_code' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
            'restrictions' => 'nested',
        ],
    ];

    /**
     * Update a promotion code
     *
     * <p>Updates the specified promotion code by setting the values of the parameters passed. Most fields are, by design, not editable.</p>
     */
    public function postByPromotionCode(string $promotion_code, ?\StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode\Post $payload = null): \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PROMOTION_CODE), path: ['promotion_code' => $promotion_code], body: $payload);
        return $result;
    }
}
