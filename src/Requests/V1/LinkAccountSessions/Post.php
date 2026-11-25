<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\LinkAccountSessions;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder',
        'permissions',
    ];

    protected const array VALIDATION = [
        'return_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account holder to link accounts for.
     */
    public \StripeSDK\Requests\V1\LinkAccountSessions\Post\AccountHolderRequest $account_holder;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Filters to restrict the kinds of accounts to collect.
     */
    public \StripeSDK\Requests\V1\LinkAccountSessions\Post\LinkAccountSessionsFiltersRequest $filters;
    /**
     * Settings for configuring Session-specific limits.
     */
    public \StripeSDK\Requests\V1\LinkAccountSessions\Post\LinkAccountSessionsLimitsRequest $limits;
    /**
     * Customize manual entry behavior
     */
    public \StripeSDK\Requests\V1\LinkAccountSessions\Post\ManualEntryRequest $manual_entry;
    /**
     * List of data features that you would like to request access to.
     *
     * Possible values are `balances`, `transactions`, `ownership`, and `payment_method`.
     */
    public \StripeSDK\Collections\V1\LinkAccountSessions\Post\LinkAccountSessionsPermissionsCollection $permissions;
    /**
     * List of data features that you would like to retrieve upon account creation.
     */
    public \StripeSDK\Collections\V1\LinkAccountSessions\Post\LinkAccountSessionsPrefetchCollection $prefetch;
    /**
     * For webview integrations only. Upon completing OAuth login in the native browser, the user will be redirected to this URL to return to your app.
     */
    public string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
