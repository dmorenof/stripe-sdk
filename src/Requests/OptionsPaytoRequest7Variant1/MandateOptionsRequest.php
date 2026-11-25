<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPaytoRequest7Variant1;

/**
 * payment_intent_payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsPaytoRequest7Variant1\MandateOptions\OptionsAmountRequest $amount;
    public \StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions\AmountTypeEnum $amount_type;
    public \StripeSDK\Requests\OptionsPaytoRequest7Variant1\MandateOptions\EndDateRequest $end_date;
    public \StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions\PaymentScheduleEnum $payment_schedule;
    public \StripeSDK\Requests\OptionsPaytoRequest7Variant1\MandateOptions\PerPeriodRequest $payments_per_period;
    public \StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions\OptionsPurposeEnum $purpose;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'purpose' => is_string($value) ? $this->purpose = \StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions\OptionsPurposeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
