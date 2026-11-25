<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * destination_specs
 */
final class DestinationVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
    ];

    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    public int $amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
