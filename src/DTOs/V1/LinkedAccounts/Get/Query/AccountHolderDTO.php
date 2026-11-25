<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\LinkedAccounts\Get\Query;

/**
 * accountholder_params
 */
final class AccountHolderDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
