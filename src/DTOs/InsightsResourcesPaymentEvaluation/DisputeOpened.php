<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Dispute Opened
 *
 * Dispute opened event details attached to this payment evaluation.
 */
final class DisputeOpened extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'reason',
    ];

    /**
     * Amount to dispute for this payment. A positive integer representing how much to charge in [the smallest currency unit](https://docs.stripe.com/currencies#zero-decimal) (for example, 100 cents to charge 1.00 USD or 100 to charge 100 Yen, a zero-decimal currency).
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Reason given by cardholder for dispute.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\DisputeOpened\ReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\DisputeOpened\ReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
