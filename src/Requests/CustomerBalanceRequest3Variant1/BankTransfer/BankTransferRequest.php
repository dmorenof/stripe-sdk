<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomerBalanceRequest3Variant1\BankTransfer;

/**
 * eu_bank_transfer_param
 */
final class BankTransferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
