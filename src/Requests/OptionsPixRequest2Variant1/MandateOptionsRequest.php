<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPixRequest2Variant1;

/**
 * subscription_payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'end_date' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public \StripeSDK\Enums\OptionsPixRequest2Variant1\MandateOptions\IncludesIofEnum $amount_includes_iof;
    public string $end_date {
        set {
            $this->assigning('end_date', $value);
            $this->end_date = $value;
        }
    }
    public \StripeSDK\Enums\OptionsPixRequest2Variant1\MandateOptions\PaymentScheduleEnum $payment_schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_includes_iof' => is_string($value) ? $this->amount_includes_iof = \StripeSDK\Enums\OptionsPixRequest2Variant1\MandateOptions\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\OptionsPixRequest2Variant1\MandateOptions\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
