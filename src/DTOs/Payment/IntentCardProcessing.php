<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentCardProcessing
 */
final class IntentCardProcessing extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\IntentProcessingCustomerNotification $customer_notification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_notification' => $value instanceof \stdClass ? $this->customer_notification = new \StripeSDK\DTOs\Payment\IntentProcessingCustomerNotification($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
