<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Funding Instruction
 *
 * Each customer has a [`balance`](https://docs.stripe.com/api/customers/object#customer_object-balance) that is
 * automatically applied to future invoices and payments using the `customer_balance` payment method.
 * Customers can fund this balance by initiating a bank transfer to any account in the
 * `financial_addresses` field.
 * Related guide: [Customer balance funding instructions](https://docs.stripe.com/payments/customer-balance/funding-instructions)
 */
final class FundingInstructions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bank_transfer',
        'currency',
        'funding_type',
        'livemode',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\FundingInstructionsBankTransfer $bank_transfer;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * The `funding_type` of the returned instructions
     */
    public \StripeSDK\Enums\FundingInstructions\FundingTypeEnum $funding_type;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\FundingInstructions\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_transfer' => $value instanceof \stdClass ? $this->bank_transfer = new \StripeSDK\DTOs\FundingInstructionsBankTransfer($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'funding_type' => is_string($value) ? $this->funding_type = \StripeSDK\Enums\FundingInstructions\FundingTypeEnum::from($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\FundingInstructions\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
