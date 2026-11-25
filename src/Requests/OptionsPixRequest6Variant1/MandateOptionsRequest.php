<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsPixRequest6Variant1;

/**
 * payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'end_date' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 35,
        ],
        'start_date' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public \StripeSDK\Enums\OptionsPixRequest6Variant1\MandateOptions\IncludesIofEnum $amount_includes_iof;
    public \StripeSDK\Enums\OptionsPixRequest6Variant1\MandateOptions\AmountTypeEnum $amount_type;
    /**
     * Format: currency
     */
    public string $currency;
    public string $end_date {
        set {
            $this->assigning('end_date', $value);
            $this->end_date = $value;
        }
    }
    public \StripeSDK\Enums\OptionsPixRequest6Variant1\MandateOptions\PaymentScheduleEnum $payment_schedule;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    public string $start_date {
        set {
            $this->assigning('start_date', $value);
            $this->start_date = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_includes_iof' => is_string($value) ? $this->amount_includes_iof = \StripeSDK\Enums\OptionsPixRequest6Variant1\MandateOptions\IncludesIofEnum::from($value) : parent::assignMember($name, $value),
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\OptionsPixRequest6Variant1\MandateOptions\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\OptionsPixRequest6Variant1\MandateOptions\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
