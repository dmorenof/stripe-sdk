<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing\Alerts\ById;

final class Archive extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/alerts/{id}/archive',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\Alert',
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
     * Archive a billing alert
     *
     * <p>Archives this alert, removing it from the list view and APIs. This is non-reversible.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\Billing\Alerts\ById\Archive\Post $payload = null): \StripeSDK\DTOs\Billing\Alert|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\Alert|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
