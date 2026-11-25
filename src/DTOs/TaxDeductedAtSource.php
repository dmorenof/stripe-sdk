<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TaxDeductedAtSource
 */
final class TaxDeductedAtSource extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'object_',
        'period_end',
        'period_start',
        'tax_deduction_account_number',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'tax_deduction_account_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\TaxDeductedAtSource\ObjectEnum $object_;
    /**
     * The end of the invoicing period. This TDS applies to Stripe fees collected during this invoicing period.
     * Format: unix-time
     */
    public int $period_end;
    /**
     * The start of the invoicing period. This TDS applies to Stripe fees collected during this invoicing period.
     * Format: unix-time
     */
    public int $period_start;
    /**
     * The TAN that was supplied to Stripe when TDS was assessed
     */
    public string $tax_deduction_account_number {
        set {
            $this->assigning('tax_deduction_account_number', $value);
            $this->tax_deduction_account_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\TaxDeductedAtSource\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'period_end' => is_int($value) ? $this->period_end = $value : parent::assignMember($name, $value),
            'period_start' => is_int($value) ? $this->period_start = $value : parent::assignMember($name, $value),
            'tax_deduction_account_number' => is_string($value) ? $this->tax_deduction_account_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
