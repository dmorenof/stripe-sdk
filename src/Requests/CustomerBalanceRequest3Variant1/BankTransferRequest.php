<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomerBalanceRequest3Variant1;

/**
 * bank_transfer_param
 */
final class BankTransferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\CustomerBalanceRequest3Variant1\BankTransfer\BankTransferRequest $eu_bank_transfer;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
