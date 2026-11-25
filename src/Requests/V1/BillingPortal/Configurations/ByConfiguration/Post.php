<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether the configuration is active and can be used to create portal sessions.
     */
    public bool $active;
    /**
     * The business information shown to customers in the portal.
     */
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\BusinessProfileRequest $business_profile;
    /**
     * The default URL to redirect customers to when they click on the portal's link to return to your website. This can be [overridden](https://docs.stripe.com/api/customer_portal/sessions/create#create_portal_session-return_url) when creating the session.
     */
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\ReturnUrlRequest $default_return_url;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Information about the features available in the portal.
     */
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\ByConfigurationFeaturesRequest $features;
    /**
     * The hosted login page for this configuration. Learn more about the portal login page in our [integration docs](https://stripe.com/docs/billing/subscriptions/integrating-customer-portal#share).
     */
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\LoginPageRequest $login_page;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\ByConfigurationMetadataRequest $metadata;
    /**
     * The name of the configuration.
     */
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\ByConfigurationNameRequest $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
