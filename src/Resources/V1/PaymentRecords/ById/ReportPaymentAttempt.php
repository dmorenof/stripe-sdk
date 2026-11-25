<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentRecords\ById;

final class ReportPaymentAttempt extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_records/{id}/report_payment_attempt',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Record',
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
            'canceled' => 'nested',
            'expand' => 'nested',
            'failed' => 'nested',
            'guaranteed' => 'nested',
            'metadata' => 'nested',
            'payment_method_details' => 'nested',
            'shipping_details' => 'nested',
        ],
    ];

    /**
     * Report a payment attempt
     *
     * <p>Report a new payment attempt on the specified Payment Record. A new payment
     *  attempt can only be specified if all other payment attempts are canceled or failed.</p>
     */
    public function post(string $id, \StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttempt\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
