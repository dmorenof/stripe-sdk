<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoicingLinesCommonProrationDetails
 */
final class BillResourceInvoicingLinesCommonProrationDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * For a credit proration `line_item`, the original debit line_items to which the credit proration applies.
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingLinesCommonCreditedItems $credited_items;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'credited_items' => $value === null || $value instanceof \stdClass ? $this->credited_items = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingLinesCommonCreditedItems($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
