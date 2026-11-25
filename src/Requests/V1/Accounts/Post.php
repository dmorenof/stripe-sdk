<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account_token' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'external_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An [account token](https://docs.stripe.com/api#create_account_token), used to securely provide details to the account.
     */
    public string $account_token {
        set {
            $this->assigning('account_token', $value);
            $this->account_token = $value;
        }
    }
    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/js), or a dictionary containing a user's bank account details.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\BankAccountRequest $bank_account;
    /**
     * Business information about the account.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\BusinessProfileRequest $business_profile;
    /**
     * The business type. Once you create an [Account Link](/api/account_links) or [Account Session](/api/account_sessions), this property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts.
     */
    public \StripeSDK\Enums\V1\Accounts\Post\BusinessTypeEnum $business_type;
    /**
     * Each key of the dictionary represents a capability, and each capability
     * maps to its settings (for example, whether it has been requested or not). Each
     * capability is inactive until you have provided its specific
     * requirements and Stripe has verified them. An account might have some
     * of its requested capabilities be active and some be inactive.
     *
     * Required when [account.controller.stripe_dashboard.type](/api/accounts/create#create_account-controller-dashboard-type)
     * is `none`, which includes Custom accounts.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsCapabilitiesRequest $capabilities;
    /**
     * Information about the company or business. This field is available for any `business_type`. Once you create an [Account Link](/api/account_links) or [Account Session](/api/account_sessions), this property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsCompanyRequest $company;
    /**
     * A hash of configuration describing the account controller's attributes.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsControllerRequest $controller;
    /**
     * The country in which the account holder resides, or in which the business is legally established. This should be an ISO 3166-1 alpha-2 country code. For example, if you are in the United States and the business for which you're creating an account is legally represented in Canada, you would use `CA` as the country for the account being created. Available countries include [Stripe's global markets](https://stripe.com/global) as well as countries where [cross-border payouts](https://stripe.com/docs/connect/cross-border-payouts) are supported.
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Three-letter ISO currency code representing the default currency for the account. This must be a currency that [Stripe supports in the account's country](https://docs.stripe.com/payouts).
     * Format: currency
     */
    public string $default_currency;
    /**
     * Documents that may be submitted to satisfy various informational requests.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsDocumentsRequest $documents;
    /**
     * The email address of the account holder. This is only to make the account easier to identify to you. If [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts, Stripe doesn't email the account without your consent.
     */
    public string $email;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A card or bank account to attach to the account for receiving [payouts](/connect/bank-debit-card-payouts) (you won’t be able to use it for top-ups). You can provide either a token, like the ones returned by [Stripe.js](/js), or a dictionary, as documented in the `external_account` parameter for [bank account](/api#account_create_bank_account) creation. <br><br>By default, providing an external account sets it as the new default external account for its currency, and deletes the old default if one exists. To add additional external accounts without replacing the existing default for the currency, use the [bank account](/api#account_create_bank_account) or [card creation](/api#account_create_card) APIs. After you create an [Account Link](/api/account_links) or [Account Session](/api/account_sessions), this property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts.
     */
    public string $external_account {
        set {
            $this->assigning('external_account', $value);
            $this->external_account = $value;
        }
    }
    /**
     * A hash of account group type to tokens. These are account groups this account should be added to.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsGroupsRequest $groups;
    /**
     * Information about the person represented by the account. This field is null unless `business_type` is set to `individual`. Once you create an [Account Link](/api/account_links) or [Account Session](/api/account_sessions), this property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsIndividualRequest $individual;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsMetadataRequest $metadata;
    /**
     * Options for customizing how the account functions within Stripe.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\AccountsSettingsRequest $settings;
    /**
     * Details on the account's acceptance of the [Stripe Services Agreement](/connect/updating-accounts#tos-acceptance). This property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts. This property defaults to a `full` service agreement when empty.
     */
    public \StripeSDK\Requests\V1\Accounts\Post\TosAcceptanceRequest $tos_acceptance;
    /**
     * The `type` parameter is deprecated. Use [`controller`](/api/accounts/create#create_account-controller) instead to configure dashboard access, fee payer, loss liability, and requirement collection.
     */
    public \StripeSDK\Enums\V1\Accounts\Post\AccountsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_token' => is_string($value) ? $this->account_token = $value : parent::assignMember($name, $value),
            'business_type' => is_string($value) ? $this->business_type = \StripeSDK\Enums\V1\Accounts\Post\BusinessTypeEnum::from($value) : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'default_currency' => is_string($value) ? $this->default_currency = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'external_account' => is_string($value) ? $this->external_account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Accounts\Post\AccountsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
