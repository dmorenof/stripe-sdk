<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Settings\Post;

/**
 * defaults_param
 *
 * Default configuration to be used on Stripe Tax calculations.
 */
final class SettingsDefaultsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Tax\Settings\Post\Defaults\TaxBehaviorEnum $tax_behavior;
    public string $tax_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Tax\Settings\Post\Defaults\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
