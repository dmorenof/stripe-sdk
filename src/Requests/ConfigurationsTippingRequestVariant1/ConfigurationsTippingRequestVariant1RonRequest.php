<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ConfigurationsTippingRequestVariant1;

/**
 * currency_specific_config
 */
final class ConfigurationsTippingRequestVariant1RonRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\IntegerCollection $fixed_amounts;
    public \StripeSDK\Collections\IntegerCollection $percentages;
    public int $smart_tip_threshold;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fixed_amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->fixed_amounts = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'percentages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->percentages = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'smart_tip_threshold' => is_int($value) ? $this->smart_tip_threshold = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
