<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Subscriptions\BySubscription;

final class Resume extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscriptions/{subscription}/resume',
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
                'type' => '\\StripeSDK\\DTOs\\Subscription',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'subscription' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'billing_cycle_anchor' => 'nested',
            'expand' => 'nested',
        ],
    ];

    /**
     * Resume a subscription
     *
     * <p>Initiates resumption of a paused subscription, optionally resetting the billing cycle anchor and creating prorations. Resume is only available for subscriptions that use <code>charge_automatically</code> collection. If Stripe doesn’t generate a resumption invoice, the subscription becomes <code>active</code> immediately. When a resumption invoice is generated, Stripe finalizes it immediately. If the invoice is paid or marked uncollectible, the subscription becomes <code>active</code>. If the invoice is manually voided, the subscription stays <code>paused</code>. If there is no payment attempt within 23 hours, Stripe voids the invoice and the subscription stays <code>paused</code>. Learn more about <a href="/docs/billing/subscriptions/pause#resume-subscriptions">resuming subscriptions</a>.</p>
     */
    public function post(string $subscription, ?\StripeSDK\Requests\V1\Subscriptions\BySubscription\Resume\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['subscription' => $subscription], body: $payload);
        return $result;
    }
}
