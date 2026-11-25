<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsUpiRequest8Variant1;

/**
 * invoice_payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 20,
        ],
    ];

    public int $amount;
    public \StripeSDK\Enums\OptionsUpiRequest8Variant1\MandateOptions\AmountTypeEnum $amount_type;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Format: unix-time
     */
    public int $end_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\OptionsUpiRequest8Variant1\MandateOptions\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'end_date' => is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
