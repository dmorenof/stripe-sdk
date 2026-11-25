<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentIntents\ByIntent;

final class IncrementAuthorization extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_intents/{intent}/increment_authorization',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'intent' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'amount_details' => 'nested',
            'expand' => 'nested',
            'hooks' => 'nested',
            'metadata' => 'deepObject',
            'payment_details' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Increment an authorization
     *
     * <p>Perform an incremental authorization on an eligible
     * <a href="/docs/api/payment_intents/object">PaymentIntent</a>. To be eligible, the
     * PaymentIntent’s status must be <code>requires_capture</code> and
     * <a href="/docs/api/charges/object#charge_object-payment_method_details-card_present-incremental_authorization_supported">incremental_authorization_supported</a>
     * must be <code>true</code>.</p>
     *
     * <p>Incremental authorizations attempt to increase the authorized amount on
     * your customer’s card to the new, higher <code>amount</code> provided. Similar to the
     * initial authorization, incremental authorizations can be declined. A
     * single PaymentIntent can call this endpoint multiple times to further
     * increase the authorized amount.</p>
     *
     * <p>If the incremental authorization succeeds, the PaymentIntent object
     * returns with the updated
     * <a href="/docs/api/payment_intents/object#payment_intent_object-amount">amount</a>.
     * If the incremental authorization fails, a
     * <a href="/docs/error-codes#card-declined">card_declined</a> error returns, and no other
     * fields on the PaymentIntent or Charge update. The PaymentIntent
     * object remains capturable for the previously authorized amount.</p>
     *
     * <p>Each PaymentIntent can have a maximum of 10 incremental authorization attempts, including declines.
     * After it’s captured, a PaymentIntent can no longer be incremented.</p>
     *
     * <p>Learn more about incremental authorizations with
     * <a href="/docs/terminal/features/incremental-authorizations">in-person payments</a> and
     * <a href="/docs/payments/incremental-authorization?platform=web&ui=elements">online payments</a>.</p>
     */
    public function post(string $intent, \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post $payload): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['intent' => $intent], body: $payload);
        return $result;
    }
}
