<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Encodes whether a FinancialAccount has access to a particular feature, with a status enum and associated `status_details`. Stripe or the platform may control features via the requested field.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\ByFinancialAccountFeaturesRequest $features;
    /**
     * A different bank account where funds can be deposited/debited in order to get the closing FA's balance to $0
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\ForwardingSettingsRequest $forwarding_settings;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\MetadataMapRequest $metadata;
    /**
     * The nickname for the FinancialAccount.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\ByFinancialAccountNicknameRequest $nickname;
    /**
     * The set of functionalities that the platform can restrict on the FinancialAccount.
     */
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\PlatformRestrictionsRequest $platform_restrictions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
