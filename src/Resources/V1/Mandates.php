<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Mandates extends \StripeSDK\Client
{
    private const array GET_BY_MANDATE = [
        'method' => 'GET',
        'path' => '/v1/mandates/{mandate}',
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
                'type' => '\\StripeSDK\\DTOs\\Mandate',
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
     * Retrieve a Mandate
     *
     * <p>Retrieves a Mandate object.</p>
     */
    public function getByMandate(string $mandate, ?\StripeSDK\GetParams\V1\Mandates\ByMandate $params = null): \StripeSDK\DTOs\Mandate|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Mandate|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_MANDATE), path: ['mandate' => $mandate], parameters: $params);
        return $result;
    }
}
