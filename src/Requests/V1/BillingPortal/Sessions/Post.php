<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Sessions;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'configuration' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of an existing [configuration](https://docs.stripe.com/api/customer_portal/configurations) to use for this session, describing its functionality and features. If not specified, the session uses the default configuration.
     */
    public string $configuration {
        set {
            $this->assigning('configuration', $value);
            $this->configuration = $value;
        }
    }
    /**
     * The ID of an existing customer.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The ID of an existing account.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Information about a specific flow for the customer to go through. See the [docs](https://docs.stripe.com/customer-management/portal-deep-links) to learn more about using customer portal deep links and flows.
     */
    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowDataRequest $flow_data;
    /**
     * The IETF language tag of the locale customer portal is displayed in. If blank or auto, the customer’s `preferred_locales` or browser’s locale is used.
     */
    public \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\SessionsLocaleEnum $locale;
    /**
     * The `on_behalf_of` account to use for this session. When specified, only subscriptions and invoices with this `on_behalf_of` account appear in the portal. For more information, see the [docs](https://docs.stripe.com/connect/separate-charges-and-transfers#settlement-merchant). Use the [Accounts API](https://docs.stripe.com/api/accounts/object#account_object-settings-branding) to modify the `on_behalf_of` account's branding settings, which the portal displays.
     */
    public string $on_behalf_of;
    /**
     * The default URL to redirect customers to when they click on the portal's link to return to your website.
     */
    public string $return_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configuration' => is_string($value) ? $this->configuration = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = \StripeSDK\Enums\V1\BillingPortal\Sessions\Post\SessionsLocaleEnum::from($value) : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
