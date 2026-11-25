<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionDisplayBankTransferInstructions
 */
final class IntentNextActionDisplayBankTransferInstructions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'hosted_instructions_url' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The remaining amount that needs to be transferred to complete the payment.
     */
    public ?int $amount_remaining;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public ?string $currency;
    /**
     * A list of financial addresses that can be used to fund the customer balance
     */
    public \StripeSDK\Collections\FundingInstructionsBankTransfer\FinancialAddressesCollection $financial_addresses;
    /**
     * A link to a hosted page that guides your customer through completing the transfer.
     */
    public ?string $hosted_instructions_url {
        set {
            $this->assigning('hosted_instructions_url', $value);
            $this->hosted_instructions_url = $value;
        }
    }
    /**
     * A string identifying this payment. Instruct your customer to include this code in the reference or memo field of their bank transfer.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Type of bank transfer
     */
    public \StripeSDK\Enums\Payment\IntentNextActionDisplayBankTransferInstructions\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_remaining' => $value === null || is_int($value) ? $this->amount_remaining = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'financial_addresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->financial_addresses = new \StripeSDK\Collections\FundingInstructionsBankTransfer\FinancialAddressesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\FundingInstructionsBankTransfer\FinancialAddress::class)) : parent::assignMember($name, $value),
            'hosted_instructions_url' => $value === null || is_string($value) ? $this->hosted_instructions_url = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\IntentNextActionDisplayBankTransferInstructions\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
