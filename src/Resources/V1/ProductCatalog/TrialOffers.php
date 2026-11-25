<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\ProductCatalog;

final class TrialOffers extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/product_catalog/trial_offers',
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
                'type' => '\\StripeSDK\\Responses\\V1\\ProductCatalog\\TrialOffers\\GetStatus200',
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
            'prices' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List trial offers
     *
     * <p>Returns a list of trial offers.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\ProductCatalog\TrialOffers $params = null): \StripeSDK\Responses\V1\ProductCatalog\TrialOffers\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\ProductCatalog\TrialOffers\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/product_catalog/trial_offers',
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
                'type' => '\\StripeSDK\\DTOs\\ProductCatalog\\TrialOffer',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'duration' => 'nested',
            'end_behavior' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Create a trial offer
     *
     * <p>Creates a trial offer.</p>
     */
    public function post(\StripeSDK\Requests\V1\ProductCatalog\TrialOffers\Post $payload): \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/product_catalog/trial_offers/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\ProductCatalog\\TrialOffer',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a trial offer
     *
     * <p>Retrieves the trial offer with the given ID.</p>
     */
    public function getById(string $id, ?\StripeSDK\GetParams\V1\ProductCatalog\TrialOffers\ById $params = null): \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/product_catalog/trial_offers/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\ProductCatalog\\TrialOffer',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Update a trial offer
     *
     * <p>Updates the specified trial offer by setting the values of the parameters passed. Any parameters not provided are left unchanged.</p>
     */
    public function postById(string $id, ?\StripeSDK\Requests\V1\ProductCatalog\TrialOffers\ById\Post $payload = null): \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ProductCatalog\TrialOffer|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
