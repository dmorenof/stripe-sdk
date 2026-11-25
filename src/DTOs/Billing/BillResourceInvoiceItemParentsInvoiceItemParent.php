<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoiceItemParentsInvoiceItemParent
 */
final class BillResourceInvoiceItemParentsInvoiceItemParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Details about the subscription that generated this invoice item
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoiceItemParentsInvoiceItemSubscriptionParent $subscription_details;
    /**
     * The type of parent that generated this invoice item
     */
    public \StripeSDK\Enums\Billing\BillResourceInvoiceItemParentsInvoiceItemParent\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subscription_details' => $value === null || $value instanceof \stdClass ? $this->subscription_details = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoiceItemParentsInvoiceItemSubscriptionParent($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\BillResourceInvoiceItemParentsInvoiceItemParent\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
