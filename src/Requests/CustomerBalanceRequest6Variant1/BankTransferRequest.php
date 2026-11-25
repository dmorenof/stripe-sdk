<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomerBalanceRequest6Variant1;

/**
 * bank_transfer_param
 */
final class BankTransferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\CustomerBalanceRequest6Variant1\BankTransfer\BankTransferRequest $eu_bank_transfer;
    public \StripeSDK\Collections\CustomerBalanceRequest6Variant1\BankTransfer\AddressTypesCollection $requested_address_types;
    public \StripeSDK\Enums\CustomerBalanceRequest6Variant1\BankTransfer\TransferTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\CustomerBalanceRequest6Variant1\BankTransfer\TransferTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
