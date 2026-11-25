<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Radar;

final class PaymentEvaluations extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/radar/payment_evaluations',
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
                'type' => '\\StripeSDK\\DTOs\\Radar\\PaymentEvaluation',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'client_device_metadata_details' => 'nested',
            'customer_details' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
            'payment_details' => 'nested',
        ],
    ];

    /**
     * Create a Payment Evaluation
     *
     * <p>Request a Radar API fraud risk score from Stripe for a payment before sending it for external processor authorization.</p>
     */
    public function post(\StripeSDK\Requests\V1\Radar\PaymentEvaluations\Post $payload): \StripeSDK\DTOs\Radar\PaymentEvaluation|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Radar\PaymentEvaluation|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
