<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class PaymentLinks extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/payment_links',
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
                'type' => '\\StripeSDK\\Responses\\V1\\PaymentLinks\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all payment links
     *
     * <p>Returns a list of your payment links.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\PaymentLinks $params = null): \StripeSDK\Responses\V1\PaymentLinks\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\PaymentLinks\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_links',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Link',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'after_completion' => 'nested',
            'automatic_tax' => 'nested',
            'consent_collection' => 'nested',
            'custom_fields' => 'nested',
            'custom_text' => 'nested',
            'expand' => 'nested',
            'invoice_creation' => 'nested',
            'line_items' => 'nested',
            'managed_payments' => 'nested',
            'metadata' => 'deepObject',
            'name_collection' => 'nested',
            'optional_items' => 'nested',
            'payment_intent_data' => 'nested',
            'payment_method_options' => 'nested',
            'payment_method_types' => 'nested',
            'phone_number_collection' => 'nested',
            'restrictions' => 'nested',
            'shipping_address_collection' => 'nested',
            'shipping_options' => 'nested',
            'subscription_data' => 'nested',
            'tax_id_collection' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Create a payment link
     *
     * <p>Creates a payment link.</p>
     */
    public function post(\StripeSDK\Requests\V1\PaymentLinks\Post $payload): \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_PAYMENT_LINK = [
        'method' => 'GET',
        'path' => '/v1/payment_links/{payment_link}',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Link',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payment_link' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve payment link
     *
     * <p>Retrieve a payment link.</p>
     */
    public function getByPaymentLink(string $payment_link, ?\StripeSDK\GetParams\V1\PaymentLinks\ByPaymentLink $params = null): \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYMENT_LINK), path: ['payment_link' => $payment_link], parameters: $params);
        return $result;
    }

    private const array POST_BY_PAYMENT_LINK = [
        'method' => 'POST',
        'path' => '/v1/payment_links/{payment_link}',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Link',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payment_link' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'after_completion' => 'nested',
            'application_fee_amount' => 'nested',
            'application_fee_percent' => 'nested',
            'automatic_tax' => 'nested',
            'consent_collection' => 'nested',
            'custom_fields' => 'nested',
            'custom_text' => 'nested',
            'expand' => 'nested',
            'inactive_message' => 'nested',
            'invoice_creation' => 'nested',
            'line_items' => 'nested',
            'metadata' => 'deepObject',
            'name_collection' => 'nested',
            'on_behalf_of' => 'nested',
            'optional_items' => 'nested',
            'payment_intent_data' => 'nested',
            'payment_method_options' => 'nested',
            'payment_method_types' => 'nested',
            'phone_number_collection' => 'nested',
            'restrictions' => 'nested',
            'shipping_address_collection' => 'nested',
            'shipping_options' => 'nested',
            'subscription_data' => 'nested',
            'tax_id_collection' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Update a payment link
     *
     * <p>Updates a payment link.</p>
     */
    public function postByPaymentLink(string $payment_link, ?\StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post $payload = null): \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PAYMENT_LINK), path: ['payment_link' => $payment_link], body: $payload);
        return $result;
    }
}
