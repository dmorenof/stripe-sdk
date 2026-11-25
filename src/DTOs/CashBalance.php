<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Cash balance
 *
 * A customer's `Cash balance` represents real funds. Customers can add funds to their cash balance by sending a bank transfer. These funds can be used for payment and can eventually be paid out to your bank account.
 */
final class CashBalance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'livemode',
        'object_',
        'settings',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A hash of all cash balances available to this customer. You cannot delete a customer with any cash balances, even if the balance is 0. Amounts are represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public ?\StripeSDK\DTOs\CashBalance\AvailableMap $available;
    /**
     * The ID of the customer whose cash balance this object represents.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The ID of an Account representing a customer whose cash balance this object represents.
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
    public \StripeSDK\Enums\CashBalance\ObjectEnum $object_;
    public \StripeSDK\DTOs\Customer\BalanceCustomerBalanceSettings $settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\CashBalance\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'settings' => $value instanceof \stdClass ? $this->settings = new \StripeSDK\DTOs\Customer\BalanceCustomerBalanceSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
