<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * managed_payments_params
 *
 * Settings for Managed Payments for this Checkout Session and resulting [PaymentIntents](/api/payment_intents/object), [Invoices](/api/invoices/object), and [Subscriptions](/api/subscriptions/object).
 */
final class ManagedPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
