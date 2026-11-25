<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_mandate_options_card
 */
final class MandateOptionsCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 200,
        ],
    ];

    /**
     * Amount to be charged for future payments, specified in the presentment currency.
     */
    public ?int $amount;
    /**
     * One of `fixed` or `maximum`. If `fixed`, the `amount` param refers to the exact amount to be charged in future payments. If `maximum`, the amount charged can be up to the value passed for the `amount` param.
     */
    public ?\StripeSDK\Enums\Invoice\MandateOptionsCard\AmountTypeEnum $amount_type;
    /**
     * A description of the mandate or subscription that is meant to be displayed to the customer.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => $value === null || is_string($value) ? $this->amount_type = $value === null ? null : \StripeSDK\Enums\Invoice\MandateOptionsCard\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
