<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign;

final class Activate extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/issuing/personalization_designs/{personalization_design}/activate',
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
            'expand' => 'nested',
        ],
    ];

    /**
     * Activate a testmode personalization design
     *
     * <p>Updates the <code>status</code> of the specified testmode personalization design object to <code>active</code>.</p>
     */
    public function post(string $personalization_design, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Activate\Post $payload = null): \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\PersonalizationDesign|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['personalization_design' => $personalization_design], body: $payload);
        return $result;
    }
}
