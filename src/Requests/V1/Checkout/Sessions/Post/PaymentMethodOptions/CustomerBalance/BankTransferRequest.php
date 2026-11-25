<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance;

/**
 * bank_transfer_param
 */
final class BankTransferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\BankTransfer\BankTransferRequest $eu_bank_transfer;
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\BankTransfer\AddressTypesCollection $requested_address_types;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\BankTransfer\TransferTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalance\BankTransfer\TransferTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
