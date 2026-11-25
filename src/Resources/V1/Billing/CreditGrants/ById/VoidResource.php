<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing\CreditGrants\ById;

final class VoidResource extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/credit_grants/{id}/void',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\CreditGrant',
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
     * Void a credit grant
     *
     * <p>Voids a credit grant.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\Billing\CreditGrants\ById\VoidResource\Post $payload = null): \StripeSDK\DTOs\Billing\CreditGrant|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\CreditGrant|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
