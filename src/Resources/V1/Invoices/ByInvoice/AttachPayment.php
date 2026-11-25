<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Invoices\ByInvoice;

final class AttachPayment extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/invoices/{invoice}/attach_payment',
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
                'type' => '\\StripeSDK\\DTOs\\Invoice',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'invoice' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Attach a payment to an Invoice
     *
     * <p>Attaches a PaymentIntent or an Out of Band Payment to the invoice, adding it to the list of <code>payments</code>.</p>
     *
     * <p>For the PaymentIntent, when the PaymentIntent’s status changes to <code>succeeded</code>, the payment is credited
     * to the invoice, increasing its <code>amount_paid</code>. When the invoice is fully paid, the
     * invoice’s status becomes <code>paid</code>.</p>
     *
     * <p>If the PaymentIntent’s status is already <code>succeeded</code> when it’s attached, it’s
     * credited to the invoice immediately.</p>
     *
     * <p>See: <a href="/docs/invoicing/partial-payments">Partial payments</a> to learn more.</p>
     */
    public function post(string $invoice, ?\StripeSDK\Requests\V1\Invoices\ByInvoice\AttachPayment\Post $payload = null): \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Invoice|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['invoice' => $invoice], body: $payload);
        return $result;
    }
}
