<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FundingInstructionsBankTransfer;

/**
 * FundingInstructionsBankTransferFinancialAddress
 *
 * FinancialAddresses contain identifying information that resolves to a FinancialAccount.
 */
final class FinancialAddress extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\FundingInstructionsBankTransfer\AbaRecord $aba;
    public \StripeSDK\DTOs\FundingInstructionsBankTransfer\IbanRecord $iban;
    public \StripeSDK\DTOs\FundingInstructionsBankTransfer\SortCodeRecord $sort_code;
    public \StripeSDK\DTOs\FundingInstructionsBankTransfer\SpeiRecord $spei;
    /**
     * The payment networks supported by this FinancialAddress
     */
    public \StripeSDK\Collections\FundingInstructionsBankTransfer\FinancialAddress\SupportedNetworksCollection $supported_networks;
    public \StripeSDK\DTOs\FundingInstructionsBankTransfer\SwiftRecord $swift;
    /**
     * The type of financial address
     */
    public \StripeSDK\Enums\FundingInstructionsBankTransfer\FinancialAddress\TypeEnum $type;
    public \StripeSDK\DTOs\FundingInstructionsBankTransfer\ZenginRecord $zengin;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aba' => $value instanceof \stdClass ? $this->aba = new \StripeSDK\DTOs\FundingInstructionsBankTransfer\AbaRecord($value) : parent::assignMember($name, $value),
            'iban' => $value instanceof \stdClass ? $this->iban = new \StripeSDK\DTOs\FundingInstructionsBankTransfer\IbanRecord($value) : parent::assignMember($name, $value),
            'sort_code' => $value instanceof \stdClass ? $this->sort_code = new \StripeSDK\DTOs\FundingInstructionsBankTransfer\SortCodeRecord($value) : parent::assignMember($name, $value),
            'spei' => $value instanceof \stdClass ? $this->spei = new \StripeSDK\DTOs\FundingInstructionsBankTransfer\SpeiRecord($value) : parent::assignMember($name, $value),
            'swift' => $value instanceof \stdClass ? $this->swift = new \StripeSDK\DTOs\FundingInstructionsBankTransfer\SwiftRecord($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\FundingInstructionsBankTransfer\FinancialAddress\TypeEnum::from($value) : parent::assignMember($name, $value),
            'zengin' => $value instanceof \stdClass ? $this->zengin = new \StripeSDK\DTOs\FundingInstructionsBankTransfer\ZenginRecord($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
