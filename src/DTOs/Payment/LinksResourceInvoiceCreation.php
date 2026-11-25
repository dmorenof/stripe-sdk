<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceInvoiceCreation
 */
final class LinksResourceInvoiceCreation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Enable creating an invoice on successful payment.
     */
    public bool $enabled;
    /**
     * Configuration for the invoice. Default invoice values will be used if unspecified.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceInvoiceSettings $invoice_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'invoice_data' => $value === null || $value instanceof \stdClass ? $this->invoice_data = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceInvoiceSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
