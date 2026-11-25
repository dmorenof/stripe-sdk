<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentRecords;

final class ReportPayment extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_records/report_payment',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'amount_requested' => 'nested',
            'canceled' => 'nested',
            'customer_details' => 'nested',
            'expand' => 'nested',
            'failed' => 'nested',
            'guaranteed' => 'nested',
            'metadata' => 'nested',
            'payment_method_details' => 'nested',
            'processor_details' => 'nested',
            'shipping_details' => 'nested',
        ],
    ];

    /**
     * Report a payment
     *
     * <p>Report a new Payment Record. You may report a Payment Record as it is
     *  initialized and later report updates through the other report_* methods, or report Payment
     *  Records in a terminal state directly, through this method.</p>
     */
    public function post(\StripeSDK\Requests\V1\PaymentRecords\ReportPayment\Post $payload): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
