<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'external_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/js), or a dictionary containing a user's bank account details.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts\Post\BankAccountRequest $bank_account;
    /**
     * When set to true, or if this is the first external account added in this currency, this account becomes the default external account for its currency.
     */
    public bool $default_for_currency;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A token, like the ones returned by [Stripe.js](https://docs.stripe.com/js) or a dictionary containing a user's external account details (with the options shown below). Please refer to full [documentation](https://stripe.com/docs/api/external_accounts) instead.
     */
    public string $external_account {
        set {
            $this->assigning('external_account', $value);
            $this->external_account = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts\Post\MetadataMapRequest $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_for_currency' => is_bool($value) ? $this->default_for_currency = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'external_account' => is_string($value) ? $this->external_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
