<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\FundingInstructions\Post;

/**
 * bank_transfer_params
 *
 * Additional parameters for `bank_transfer` funding types
 */
final class BankTransferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Customers\ByCustomer\FundingInstructions\Post\BankTransfer\BankTransferRequest $eu_bank_transfer;
    public \StripeSDK\Collections\V1\Customers\ByCustomer\FundingInstructions\Post\BankTransfer\AddressTypesCollection $requested_address_types;
    public \StripeSDK\Enums\V1\Customers\ByCustomer\FundingInstructions\Post\BankTransfer\TransferTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Customers\ByCustomer\FundingInstructions\Post\BankTransfer\TransferTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
