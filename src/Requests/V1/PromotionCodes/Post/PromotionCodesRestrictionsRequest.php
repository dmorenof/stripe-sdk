<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PromotionCodes\Post;

/**
 * restrictions_params
 *
 * Settings that restrict the redemption of the promotion code.
 */
final class PromotionCodesRestrictionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PromotionCodes\Post\Restrictions\OptionsMapRequest $currency_options;
    public bool $first_time_transaction;
    public int $minimum_amount;
    /**
     * Format: currency
     */
    public string $minimum_amount_currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'first_time_transaction' => is_bool($value) ? $this->first_time_transaction = $value : parent::assignMember($name, $value),
            'minimum_amount' => is_int($value) ? $this->minimum_amount = $value : parent::assignMember($name, $value),
            'minimum_amount_currency' => is_string($value) ? $this->minimum_amount_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
