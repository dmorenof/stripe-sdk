<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingBillResourceInvoiceItemParentsInvoiceItemSubscriptionParent
 */
final class BillResourceInvoiceItemParentsInvoiceItemSubscriptionParent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subscription',
    ];

    protected const array VALIDATION = [
        'subscription' => [
            'maxLength' => 5000,
        ],
        'subscription_item' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The subscription that generated this invoice item
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * The subscription item that generated this invoice item
     */
    public string $subscription_item {
        set {
            $this->assigning('subscription_item', $value);
            $this->subscription_item = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            'subscription_item' => is_string($value) ? $this->subscription_item = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
