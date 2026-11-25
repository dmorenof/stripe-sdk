<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode\Post\Restrictions;

/**
 * currency_option
 */
final class OptionsValueRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $minimum_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'minimum_amount' => is_int($value) ? $this->minimum_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
