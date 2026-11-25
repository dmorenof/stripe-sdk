<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing;

final class PersonalizationDesigns extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/issuing/personalization_designs',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Issuing\\PersonalizationDesigns\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
            'lookup_keys' => 'nested',
            'preferences' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all personalization designs
     *
     * <p>Returns a list of personalization design objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Issuing\PersonalizationDesigns $params = null): \StripeSDK\Responses\V1\Issuing\PersonalizationDesigns\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Issuing\PersonalizationDesigns\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/issuing/personalization_designs',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\PersonalizationDesign',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'carrier_text' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
            'preferences' => 'nested',
        ],
    ];

    /**
     * Create a personalization design
     *
     * <p>Creates a personalization design object.</p>
     */
    public function post(\StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post $payload): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_PERSONALIZATION_DESIGN = [
        'method' => 'GET',
        'path' => '/v1/issuing/personalization_designs/{personalization_design}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\PersonalizationDesign',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'personalization_design' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a personalization design
     *
     * <p>Retrieves a personalization design object.</p>
     */
    public function getByPersonalizationDesign(string $personalization_design, ?\StripeSDK\GetParams\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign $params = null): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PERSONALIZATION_DESIGN), path: ['personalization_design' => $personalization_design], parameters: $params);
        return $result;
    }

    private const array POST_BY_PERSONALIZATION_DESIGN = [
        'method' => 'POST',
        'path' => '/v1/issuing/personalization_designs/{personalization_design}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\PersonalizationDesign',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'personalization_design' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'card_logo' => 'nested',
            'carrier_text' => 'nested',
            'expand' => 'nested',
            'lookup_key' => 'nested',
            'metadata' => 'deepObject',
            'name' => 'nested',
            'preferences' => 'nested',
        ],
    ];

    /**
     * Update a personalization design
     *
     * <p>Updates a card personalization object.</p>
     */
    public function postByPersonalizationDesign(string $personalization_design, ?\StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post $payload = null): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PERSONALIZATION_DESIGN), path: ['personalization_design' => $personalization_design], body: $payload);
        return $result;
    }
}
