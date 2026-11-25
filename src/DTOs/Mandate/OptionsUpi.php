<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Mandate;

/**
 * mandate_options_upi
 */
final class OptionsUpi extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 20,
        ],
    ];

    /**
     * Amount to be charged for future payments.
     */
    public ?int $amount;
    /**
     * One of `fixed` or `maximum`. If `fixed`, the `amount` param refers to the exact amount to be charged in future payments. If `maximum`, the amount charged can be up to the value passed for the `amount` param.
     */
    public ?\StripeSDK\Enums\Mandate\OptionsUpi\AmountTypeEnum $amount_type;
    /**
     * A description of the mandate or subscription that is meant to be displayed to the customer.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * End date of the mandate or subscription.
     * Format: unix-time
     */
    public ?int $end_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => $value === null || is_string($value) ? $this->amount_type = $value === null ? null : \StripeSDK\Enums\Mandate\OptionsUpi\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'end_date' => $value === null || is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
