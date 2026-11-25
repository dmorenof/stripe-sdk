<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionInvoiceCreation
 */
final class PagesCheckoutSessionInvoiceCreation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'invoice_data',
    ];

    /**
     * Indicates whether invoice creation is enabled for the Checkout Session.
     */
    public bool $enabled;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionInvoiceSettings $invoice_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'invoice_data' => $value instanceof \stdClass ? $this->invoice_data = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionInvoiceSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
