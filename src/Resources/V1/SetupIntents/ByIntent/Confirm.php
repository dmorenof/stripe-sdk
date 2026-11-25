<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\SetupIntents\ByIntent;

final class Confirm extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/setup_intents/{intent}/confirm',
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
                'type' => '\\StripeSDK\\DTOs\\Setup\\Intent',
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
            'allowed_payment_method_types' => 'nested',
            'expand' => 'nested',
            'mandate_data' => 'nested',
            'payment_method_data' => 'nested',
            'payment_method_options' => 'nested',
        ],
    ];

    /**
     * Confirm a SetupIntent
     *
     * <p>Confirm that your customer intends to set up the current or
     * provided payment method. For example, you would confirm a SetupIntent
     * when a customer hits the “Save” button on a payment method management
     * page on your website.</p>
     *
     * <p>If the selected payment method does not require any additional
     * steps from the customer, the SetupIntent will transition to the
     * <code>succeeded</code> status.</p>
     *
     * <p>Otherwise, it will transition to the <code>requires_action</code> status and
     * suggest additional actions via <code>next_action</code>. If setup fails,
     * the SetupIntent will transition to the
     * <code>requires_payment_method</code> status or the <code>canceled</code> status if the
     * confirmation limit is reached.</p>
     */
    public function post(string $intent, ?\StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['intent' => $intent], body: $payload);
        return $result;
    }
}
