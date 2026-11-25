<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingParentsInvoiceQuoteParent
 */
final class BillResourceInvoicingParentsInvoiceQuoteParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'quote',
    ];

    protected const array VALIDATION = [
        'quote' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The quote that generated this invoice
     */
    public string $quote {
        set {
            $this->assigning('quote', $value);
            $this->quote = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'quote' => is_string($value) ? $this->quote = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
