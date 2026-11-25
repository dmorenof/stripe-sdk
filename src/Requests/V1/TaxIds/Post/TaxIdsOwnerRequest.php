<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TaxIds\Post;

/**
 * owner_params
 *
 * The account or customer the tax ID belongs to. Defaults to `owner[type]=self`.
 */
final class TaxIdsOwnerRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account;
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
    public \StripeSDK\Enums\V1\TaxIds\Post\Owner\OwnerTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\TaxIds\Post\Owner\OwnerTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
