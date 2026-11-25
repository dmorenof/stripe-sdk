<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceBalanceDebit
 */
final class CreditGrantsResourceBalanceDebit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'type',
    ];

    public \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount $amount;
    /**
     * Details of how the billing credits were applied to an invoice. Only present if `type` is `credits_applied`.
     */
    public ?\StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceCreditsApplied $credits_applied;
    /**
     * The type of debit transaction.
     */
    public \StripeSDK\Enums\Billing\CreditGrantsResourceBalanceDebit\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value instanceof \stdClass ? $this->amount = new \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount($value) : parent::assignMember($name, $value),
            'credits_applied' => $value === null || $value instanceof \stdClass ? $this->credits_applied = $value === null ? null : new \StripeSDK\DTOs\Billing\CreditGrantsResourceBalanceCreditsApplied($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\CreditGrantsResourceBalanceDebit\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
