<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Money Movement Card
 *
 * Money Movement card details attached to this payment.
 */
final class MoneyMovementCard extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Describes the presence of the customer during the payment.
     */
    public ?\StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MoneyMovementCard\CustomerPresenceEnum $customer_presence;
    /**
     * Describes the type of payment.
     */
    public ?\StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MoneyMovementCard\PaymentTypeEnum $payment_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_presence' => $value === null || is_string($value) ? $this->customer_presence = $value === null ? null : \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MoneyMovementCard\CustomerPresenceEnum::from($value) : parent::assignMember($name, $value),
            'payment_type' => $value === null || is_string($value) ? $this->payment_type = $value === null ? null : \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MoneyMovementCard\PaymentTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
