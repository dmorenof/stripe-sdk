<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BillingPortal;

/**
 * Customer Portal Session
 *
 * The Billing customer portal is a Stripe-hosted UI for subscription and
 * billing management.
 *
 * A portal configuration describes the functionality and features that you
 * want to provide to your customers through the portal.
 *
 * A portal session describes the instantiation of the customer portal for
 * a particular customer. By visiting the session's URL, the customer
 * can manage their subscriptions and billing details. For security reasons,
 * sessions are short-lived and will expire if the customer does not visit the URL.
 * Create sessions on-demand when customers intend to manage their subscriptions
 * and billing details.
 *
 * Related guide: [Customer management](/customer-management)
 */
final class Session extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'configuration',
        'created',
        'customer',
        'id',
        'livemode',
        'object_',
        'url',
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
        'id' => [
            'maxLength' => 5000,
        ],
        'on_behalf_of' => [
            'maxLength' => 5000,
        ],
        'return_url' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The configuration used by this session, describing the features available.
     */
    public \StripeSDK\DTOs\BillingPortal\Session\ConfigurationDTO $configuration;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The ID of the customer for this session.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The ID of the account for this session.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Information about a specific flow for the customer to go through. See the [docs](https://docs.stripe.com/customer-management/portal-deep-links) to learn more about using customer portal deep links and flows.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsFlow $flow;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * The IETF language tag of the locale Customer Portal is displayed in. If blank or auto, the customer’s `preferred_locales` or browser’s locale is used.
     */
    public ?\StripeSDK\Enums\BillingPortal\Session\LocaleEnum $locale;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\BillingPortal\Session\ObjectEnum $object_;
    /**
     * The account for which the session was created on behalf of. When specified, only subscriptions and invoices with this `on_behalf_of` account appear in the portal. For more information, see the [docs](https://docs.stripe.com/connect/separate-charges-and-transfers#settlement-merchant). Use the [Accounts API](https://docs.stripe.com/api/accounts/object#account_object-settings-branding) to modify the `on_behalf_of` account's branding settings, which the portal displays.
     */
    public ?string $on_behalf_of {
        set {
            $this->assigning('on_behalf_of', $value);
            $this->on_behalf_of = $value;
        }
    }
    /**
     * The URL to redirect customers to when they click on the portal's link to return to your website.
     */
    public ?string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }
    /**
     * The short-lived URL of the session that gives customers access to the customer portal.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'flow' => $value === null || $value instanceof \stdClass ? $this->flow = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsFlow($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'locale' => $value === null || is_string($value) ? $this->locale = $value === null ? null : \StripeSDK\Enums\BillingPortal\Session\LocaleEnum::from($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\BillingPortal\Session\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'on_behalf_of' => $value === null || is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'return_url' => $value === null || is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
