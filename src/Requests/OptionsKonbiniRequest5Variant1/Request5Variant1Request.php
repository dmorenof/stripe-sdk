<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsKonbiniRequest5Variant1;

/**
 * payment_method_options_param
 */
final class Request5Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsKonbiniRequest5Variant1\ConfirmationNumberRequest $confirmation_number;
    public \StripeSDK\Requests\OptionsKonbiniRequest5Variant1\AfterDaysRequest $expires_after_days;
    public \StripeSDK\Requests\OptionsKonbiniRequest5Variant1\ExpiresAtRequest $expires_at;
    public \StripeSDK\Requests\OptionsKonbiniRequest5Variant1\ProductDescriptionRequest $product_description;
    public \StripeSDK\Enums\OptionsKonbiniRequest5Variant1\FutureUsageEnum $setup_future_usage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\OptionsKonbiniRequest5Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
