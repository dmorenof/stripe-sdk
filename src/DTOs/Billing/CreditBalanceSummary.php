<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Credit Balance Summary
 *
 * Indicates the billing credit balance for billing credits granted to a customer.
 */
final class CreditBalanceSummary extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'balances',
        'customer',
        'livemode',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The billing credit balances. One entry per credit grant currency. If a customer only has credit grants in a single currency, then this will have a single balance entry.
     */
    public \StripeSDK\Collections\Billing\CreditBalanceSummary\BalancesCollection $balances;
    /**
     * The customer the balance is for.
     */
    public \StripeSDK\DTOs\Billing\CreditBalanceSummary\CustomerDTO $customer;
    /**
     * The account the balance is for.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Billing\CreditBalanceSummary\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balances' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->balances = new \StripeSDK\Collections\Billing\CreditBalanceSummary\BalancesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Credit\Balance::class)) : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\CreditBalanceSummary\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
