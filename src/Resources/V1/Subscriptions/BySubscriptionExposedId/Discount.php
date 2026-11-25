<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Subscriptions\BySubscriptionExposedId;

final class Discount extends \StripeSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v1/subscriptions/{subscription_exposed_id}/discount',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Discount',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'subscription_exposed_id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a subscription discount
     *
     * <p>Removes the currently applied discount on a subscription.</p>
     */
    public function delete(string $subscription_exposed_id, ?\StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Discount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['subscription_exposed_id' => $subscription_exposed_id], body: $payload);
        return $result;
    }
}
