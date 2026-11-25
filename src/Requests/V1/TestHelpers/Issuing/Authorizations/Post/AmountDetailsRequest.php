<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post;

/**
 * amount_details_specs
 *
 * Detailed breakdown of amount components. These amounts are denominated in `currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
 */
final class AmountDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $atm_fee;
    public int $cashback_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'atm_fee' => is_int($value) ? $this->atm_fee = $value : parent::assignMember($name, $value),
            'cashback_amount' => is_int($value) ? $this->cashback_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
