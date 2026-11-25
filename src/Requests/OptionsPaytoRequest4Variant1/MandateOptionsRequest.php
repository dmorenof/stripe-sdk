<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPaytoRequest4Variant1;

/**
 * mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $amount;
    public \StripeSDK\Enums\OptionsPaytoRequest4Variant1\MandateOptions\OptionsPurposeEnum $purpose;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'purpose' => is_string($value) ? $this->purpose = \StripeSDK\Enums\OptionsPaytoRequest4Variant1\MandateOptions\OptionsPurposeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
