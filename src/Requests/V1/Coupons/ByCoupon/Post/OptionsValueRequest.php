<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Coupons\ByCoupon\Post;

/**
 * currency_option
 */
final class OptionsValueRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_off',
    ];

    public int $amount_off;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_off' => is_int($value) ? $this->amount_off = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
