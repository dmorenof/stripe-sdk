<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * FundingInstructionsBankTransfer
 */
final class FundingInstructionsBankTransfer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
        'financial_addresses',
        'type',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The country of the bank account to fund
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * A list of financial addresses that can be used to fund a particular balance
     */
    public \StripeSDK\Collections\FundingInstructionsBankTransfer\FinancialAddressesCollection $financial_addresses;
    /**
     * The bank_transfer type
     */
    public \StripeSDK\Enums\FundingInstructionsBankTransfer\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'financial_addresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->financial_addresses = new \StripeSDK\Collections\FundingInstructionsBankTransfer\FinancialAddressesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\FundingInstructionsBankTransfer\FinancialAddress::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\FundingInstructionsBankTransfer\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
