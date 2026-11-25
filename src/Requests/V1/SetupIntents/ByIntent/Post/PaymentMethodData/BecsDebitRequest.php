<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodData;

/**
 * param
 */
final class BecsDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_number',
        'bsb_number',
    ];

    protected const array VALIDATION = [
        'account_number' => [
            'maxLength' => 5000,
        ],
        'bsb_number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    public string $bsb_number {
        set {
            $this->assigning('bsb_number', $value);
            $this->bsb_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'bsb_number' => is_string($value) ? $this->bsb_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
