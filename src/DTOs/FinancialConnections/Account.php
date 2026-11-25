<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FinancialConnections;

/**
 * Account
 *
 * A Financial Connections Account represents an account that exists outside of Stripe, to which you have been granted some degree of access.
 */
final class Account extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'category',
        'created',
        'id',
        'institution_name',
        'livemode',
        'object_',
        'status',
        'subcategory',
        'supported_payment_method_types',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'institution_name' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account holder that this account belongs to.
     */
    public ?\StripeSDK\DTOs\BankConnectionsResource\Accountholder $account_holder;
    /**
     * Details about the account numbers.
     */
    public ?\StripeSDK\Collections\FinancialConnections\Account\AccountNumbersCollection $account_numbers;
    /**
     * The most recent information about the account's balance.
     */
    public ?\StripeSDK\DTOs\BankConnectionsResource\Balance $balance;
    /**
     * The state of the most recent attempt to refresh the account balance.
     */
    public ?\StripeSDK\DTOs\BankConnectionsResource\BalanceRefresh $balance_refresh;
    /**
     * The type of the account. Account category is further divided in `subcategory`.
     */
    public \StripeSDK\Enums\FinancialConnections\Account\CategoryEnum $category;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * A human-readable name that has been assigned to this account, either by the account holder or by the institution.
     */
    public ?string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The name of the institution that holds this account.
     */
    public string $institution_name {
        set {
            $this->assigning('institution_name', $value);
            $this->institution_name = $value;
        }
    }
    /**
     * The last 4 digits of the account number. If present, this will be 4 numeric characters.
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\FinancialConnections\Account\ObjectEnum $object_;
    /**
     * The most recent information about the account's owners.
     */
    public ?\StripeSDK\DTOs\FinancialConnections\Account\OwnershipDTO $ownership;
    /**
     * The state of the most recent attempt to refresh the account owners.
     */
    public ?\StripeSDK\DTOs\BankConnectionsResource\OwnershipRefresh $ownership_refresh;
    /**
     * The list of permissions granted by this account.
     */
    public ?\StripeSDK\Collections\FinancialConnections\Account\PermissionsCollection $permissions;
    /**
     * The status of the link to the account.
     */
    public \StripeSDK\Enums\FinancialConnections\Account\StatusEnum $status;
    public \StripeSDK\DTOs\BankConnectionsResource\AccountStatusDetails $status_details;
    /**
     * If `category` is `cash`, one of:
     *
     *  - `checking`
     *  - `savings`
     *  - `other`
     *
     * If `category` is `credit`, one of:
     *
     *  - `mortgage`
     *  - `line_of_credit`
     *  - `credit_card`
     *  - `other`
     *
     * If `category` is `investment` or `other`, this will be `other`.
     */
    public \StripeSDK\Enums\FinancialConnections\Account\SubcategoryEnum $subcategory;
    /**
     * The list of data refresh subscriptions requested on this account.
     */
    public ?\StripeSDK\Collections\FinancialConnections\Account\SubscriptionsCollection $subscriptions;
    /**
     * The [PaymentMethod type](https://docs.stripe.com/api/payment_methods/object#payment_method_object-type)(s) that can be created from this account.
     */
    public \StripeSDK\Collections\FinancialConnections\Account\MethodTypesCollection $supported_payment_method_types;
    /**
     * The state of the most recent attempt to refresh the account transactions.
     */
    public ?\StripeSDK\DTOs\BankConnectionsResource\TransactionRefresh $transaction_refresh;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder' => $value === null || $value instanceof \stdClass ? $this->account_holder = $value === null ? null : new \StripeSDK\DTOs\BankConnectionsResource\Accountholder($value) : parent::assignMember($name, $value),
            'account_numbers' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->account_numbers = $value === null ? null : new \StripeSDK\Collections\FinancialConnections\Account\AccountNumbersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\BankConnectionsResource\AccountNumberDetails::class)) : parent::assignMember($name, $value),
            'balance' => $value === null || $value instanceof \stdClass ? $this->balance = $value === null ? null : new \StripeSDK\DTOs\BankConnectionsResource\Balance($value) : parent::assignMember($name, $value),
            'balance_refresh' => $value === null || $value instanceof \stdClass ? $this->balance_refresh = $value === null ? null : new \StripeSDK\DTOs\BankConnectionsResource\BalanceRefresh($value) : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \StripeSDK\Enums\FinancialConnections\Account\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'display_name' => $value === null || is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'institution_name' => is_string($value) ? $this->institution_name = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\FinancialConnections\Account\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'ownership_refresh' => $value === null || $value instanceof \stdClass ? $this->ownership_refresh = $value === null ? null : new \StripeSDK\DTOs\BankConnectionsResource\OwnershipRefresh($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\FinancialConnections\Account\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_details' => $value instanceof \stdClass ? $this->status_details = new \StripeSDK\DTOs\BankConnectionsResource\AccountStatusDetails($value) : parent::assignMember($name, $value),
            'subcategory' => is_string($value) ? $this->subcategory = \StripeSDK\Enums\FinancialConnections\Account\SubcategoryEnum::from($value) : parent::assignMember($name, $value),
            'transaction_refresh' => $value === null || $value instanceof \stdClass ? $this->transaction_refresh = $value === null ? null : new \StripeSDK\DTOs\BankConnectionsResource\TransactionRefresh($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
