<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFeatures
 */
final class Features extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_update',
        'invoice_history',
        'payment_method_update',
        'subscription_cancel',
        'subscription_update',
    ];

    public \StripeSDK\DTOs\Portal\CustomerUpdate $customer_update;
    public \StripeSDK\DTOs\Portal\InvoiceList $invoice_history;
    public \StripeSDK\DTOs\Portal\PaymentMethodUpdate $payment_method_update;
    public \StripeSDK\DTOs\Portal\SubscriptionCancel $subscription_cancel;
    public \StripeSDK\DTOs\Portal\SubscriptionUpdate $subscription_update;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_update' => $value instanceof \stdClass ? $this->customer_update = new \StripeSDK\DTOs\Portal\CustomerUpdate($value) : parent::assignMember($name, $value),
            'invoice_history' => $value instanceof \stdClass ? $this->invoice_history = new \StripeSDK\DTOs\Portal\InvoiceList($value) : parent::assignMember($name, $value),
            'payment_method_update' => $value instanceof \stdClass ? $this->payment_method_update = new \StripeSDK\DTOs\Portal\PaymentMethodUpdate($value) : parent::assignMember($name, $value),
            'subscription_cancel' => $value instanceof \stdClass ? $this->subscription_cancel = new \StripeSDK\DTOs\Portal\SubscriptionCancel($value) : parent::assignMember($name, $value),
            'subscription_update' => $value instanceof \stdClass ? $this->subscription_update = new \StripeSDK\DTOs\Portal\SubscriptionUpdate($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
