<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentRecords\ById;

final class ReportPaymentAttemptInformational extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_records/{id}/report_payment_attempt_informational',
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
            'customer_details' => 'nested',
            'description' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
            'shipping_details' => 'nested',
        ],
    ];

    /**
     * Report payment attempt informational
     *
     * <p>Report informational updates on the specified Payment Record.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\PaymentRecords\ById\ReportPaymentAttemptInformational\Post $payload = null): \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Record|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
