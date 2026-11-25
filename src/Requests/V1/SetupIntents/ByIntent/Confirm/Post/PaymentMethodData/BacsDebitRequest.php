<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodData;

/**
 * param
 */
final class BacsDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account_number' => [
            'maxLength' => 5000,
        ],
        'sort_code' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    public string $sort_code {
        set {
            $this->assigning('sort_code', $value);
            $this->sort_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_number' => is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'sort_code' => is_string($value) ? $this->sort_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
