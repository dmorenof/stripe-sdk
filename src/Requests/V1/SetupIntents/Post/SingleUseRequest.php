<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post;

/**
 * setup_intent_single_use_params
 *
 * If you populate this hash, this SetupIntent generates a `single_use` mandate after successful completion.
 *
 * Single-use mandates are only valid for the following payment methods: `acss_debit`, `alipay`, `au_becs_debit`, `bacs_debit`, `bancontact`, `boleto`, `ideal`, `link`, `sepa_debit`, and `us_bank_account`.
 */
final class SingleUseRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    public int $amount;
    /**
     * Format: currency
     */
    public string $currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
