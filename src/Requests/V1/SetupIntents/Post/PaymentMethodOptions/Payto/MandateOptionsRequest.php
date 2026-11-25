<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Payto;

/**
 * setup_intent_payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\OptionsAmountRequest $amount;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\AmountTypeEnum $amount_type;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\EndDateRequest $end_date;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\PaymentScheduleEnum $payment_schedule;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\PerPeriodRequest $payments_per_period;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\OptionsPurposeEnum $purpose;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\StartDateRequest $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'purpose' => is_string($value) ? $this->purpose = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions\OptionsPurposeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
