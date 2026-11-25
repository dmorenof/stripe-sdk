<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'supported_currencies',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Encodes whether a FinancialAccount has access to a particular feature. Stripe or the platform can control features via the requested field.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\FinancialAccountsFeaturesRequest $features;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\MetadataMapRequest $metadata;
    /**
     * The nickname for the FinancialAccount.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\FinancialAccountsNicknameRequest $nickname;
    /**
     * The set of functionalities that the platform can restrict on the FinancialAccount.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post\PlatformRestrictionsRequest $platform_restrictions;
    /**
     * The currencies the FinancialAccount can hold a balance in.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $supported_currencies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'supported_currencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->supported_currencies = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
