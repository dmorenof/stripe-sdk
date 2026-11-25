<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationTreasury
 */
final class AuthorizationTreasury extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'received_credits',
        'received_debits',
    ];

    protected const array VALIDATION = [
        'transaction' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The array of [ReceivedCredits](https://docs.stripe.com/api/treasury/received_credits) associated with this authorization
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $received_credits;
    /**
     * The array of [ReceivedDebits](https://docs.stripe.com/api/treasury/received_debits) associated with this authorization
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $received_debits;
    /**
     * The Treasury [Transaction](https://docs.stripe.com/api/treasury/transactions) associated with this authorization
     */
    public ?string $transaction {
        set {
            $this->assigning('transaction', $value);
            $this->transaction = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'received_credits' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->received_credits = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'received_debits' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->received_debits = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'transaction' => $value === null || is_string($value) ? $this->transaction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
