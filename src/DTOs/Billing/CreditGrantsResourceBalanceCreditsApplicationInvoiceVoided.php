<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceBalanceCreditsApplicationInvoiceVoided
 */
final class CreditGrantsResourceBalanceCreditsApplicationInvoiceVoided extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'invoice',
        'invoice_line_item',
    ];

    protected const array VALIDATION = [
        'invoice_line_item' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The invoice to which the reinstated billing credits were originally applied.
     */
    public \StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceCreditsApplicationInvoiceVoided\InvoiceDTO $invoice;
    /**
     * The invoice line item to which the reinstated billing credits were originally applied.
     */
    public string $invoice_line_item {
        set {
            $this->assigning('invoice_line_item', $value);
            $this->invoice_line_item = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'invoice_line_item' => is_string($value) ? $this->invoice_line_item = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
