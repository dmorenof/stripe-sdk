<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Bank Account
 *
 * These bank accounts are payment methods on `Customer` objects.
 *
 * On the other hand [External Accounts](/api#external_accounts) are transfer
 * destinations on `Account` objects for connected accounts.
 * They can be bank accounts or debit cards as well, and are documented in the links above.
 *
 * Related guide: [Bank debits and transfers](/payments/bank-debits-transfers)
 */
final class BankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
        'currency',
        'id',
        'last4',
        'object_',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'account_holder_type' => [
            'maxLength' => 5000,
        ],
        'account_type' => [
            'maxLength' => 5000,
        ],
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account this bank account belongs to. Only applicable on Accounts (not customers or recipients) This property is only available when returned as an [External Account](/api/external_account_bank_accounts/object) where [controller.is_controller](/api/accounts/object#account_object-controller-is_controller) is `true`.
     */
    public ?\StripeSDK\DTOs\BankAccount\AccountDTO $account;
    /**
     * The name of the person or business that owns the bank account.
     */
    public ?string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    /**
     * The type of entity that holds the account. This can be either `individual` or `company`.
     */
    public ?string $account_holder_type {
        set {
            $this->assigning('account_holder_type', $value);
            $this->account_holder_type = $value;
        }
    }
    /**
     * The bank account type. This can only be `checking` or `savings` in most countries. In Japan, this can only be `futsu` or `toza`.
     */
    public ?string $account_type {
        set {
            $this->assigning('account_type', $value);
            $this->account_type = $value;
        }
    }
    /**
     * A set of available payout methods for this bank account. Only values from this set should be passed as the `method` when creating a payout.
     */
    public ?\StripeSDK\Collections\BankAccount\PayoutMethodsCollection $available_payout_methods;
    /**
     * Name of the bank associated with the routing number (e.g., `WELLS FARGO`).
     */
    public ?string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * Two-letter ISO code representing the country the bank account is located in.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/payouts) paid out to the bank account.
     * Format: currency
     */
    public string $currency;
    /**
     * The ID of the customer that the bank account is associated with.
     */
    public ?\StripeSDK\DTOs\BankAccount\CustomerDTO $customer;
    /**
     * Whether this bank account is the default external account for its currency.
     */
    public ?bool $default_for_currency;
    /**
     * Uniquely identifies this particular bank account. You can use this attribute to check whether two bank accounts are the same.
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * Information about the [upcoming new requirements for the bank account](https://docs.stripe.com/connect/custom-accounts/future-requirements), including what information needs to be collected, and by when.
     */
    public ?\StripeSDK\DTOs\ExternalAccountRequirements $future_requirements;
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
     * The last four digits of the bank account number.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\BankAccount\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\BankAccount\ObjectEnum $object_;
    /**
     * Information about the requirements for the bank account, including what information needs to be collected.
     */
    public ?\StripeSDK\DTOs\ExternalAccountRequirements $requirements;
    /**
     * The routing transit number for the bank account.
     */
    public ?string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }
    /**
     * For bank accounts, possible values are `new`, `validated`, `verified`, `verification_failed`, `tokenized_account_number_deactivated` or `errored`. A bank account that hasn't had any activity or validation performed is `new`. If Stripe can determine that the bank account exists, its status will be `validated`. Note that there often isn’t enough information to know (e.g., for smaller credit unions), and the validation is not always run. If customer bank account verification has succeeded, the bank account status will be `verified`. If the verification failed for any reason, such as microdeposit failure, the status will be `verification_failed`. If the status is `tokenized_account_number_deactivated`, the account utilizes a tokenized account number which has been deactivated due to expiration or revocation. This account will need to be reverified to continue using it for money movement. If a payout sent to this bank account fails, we'll set the status to `errored` and will not continue to send [scheduled payouts](https://stripe.com/docs/payouts#payout-schedule) until the bank details are updated.
     *
     * For external accounts, possible values are `new`, `errored`, `verification_failed`, and `tokenized_account_number_deactivated`. If a payout fails, the status is set to `errored` and scheduled payouts are stopped until account details are updated. In the US and India, if we can't [verify the owner of the bank account](https://support.stripe.com/questions/bank-account-ownership-verification), we'll set the status to `verification_failed`. Other validations aren't run against external accounts because they're only used for payouts. This means the other statuses don't apply.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => $value === null || is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_holder_type' => $value === null || is_string($value) ? $this->account_holder_type = $value : parent::assignMember($name, $value),
            'account_type' => $value === null || is_string($value) ? $this->account_type = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'default_for_currency' => $value === null || is_bool($value) ? $this->default_for_currency = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'future_requirements' => $value === null || $value instanceof \stdClass ? $this->future_requirements = $value === null ? null : new \StripeSDK\DTOs\ExternalAccountRequirements($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\BankAccount\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'requirements' => $value === null || $value instanceof \stdClass ? $this->requirements = $value === null ? null : new \StripeSDK\DTOs\ExternalAccountRequirements($value) : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
