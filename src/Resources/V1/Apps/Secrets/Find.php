<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Apps\Secrets;

final class Find extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/apps/secrets/find',
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
                'type' => '\\StripeSDK\\DTOs\\Apps\\Secret',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
            'scope' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Find a Secret
     *
     * <p>Finds a secret in the secret store by name and scope.</p>
     */
    public function get(\StripeSDK\GetParams\V1\Apps\Secrets\Find $params): \StripeSDK\DTOs\Apps\Secret|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Apps\Secret|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
