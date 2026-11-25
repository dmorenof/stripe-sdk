<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BillingPortal;

/**
 * Customer portal configuration
 *
 * A portal configuration describes the functionality and behavior you embed in a portal session. Related guide: [Configure the customer portal](/customer-management/configure-portal).
 */
final class Configuration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'business_profile',
        'created',
        'features',
        'id',
        'is_default',
        'livemode',
        'login_page',
        'object_',
        'updated',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'default_return_url' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the configuration is active and can be used to create portal sessions.
     */
    public bool $active;
    /**
     * ID of the Connect Application that created the configuration.
     */
    public ?\StripeSDK\DTOs\BillingPortal\Configuration\ApplicationDTO $application;
    public \StripeSDK\DTOs\Portal\BusinessProfile $business_profile;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The default URL to redirect customers to when they click on the portal's link to return to your website. This can be [overridden](https://docs.stripe.com/api/customer_portal/sessions/create#create_portal_session-return_url) when creating the session.
     */
    public ?string $default_return_url {
        set {
            $this->assigning('default_return_url', $value);
            $this->default_return_url = $value;
        }
    }
    public \StripeSDK\DTOs\Portal\Features $features;
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
     * Whether the configuration is the default. If `true`, this configuration can be managed in the Dashboard and portal sessions will use this configuration unless it is overriden when creating the session.
     */
    public bool $is_default;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    public \StripeSDK\DTOs\Portal\LoginPage $login_page;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\BillingPortal\Configuration\MetadataMap $metadata;
    /**
     * The name of the configuration.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\BillingPortal\Configuration\ObjectEnum $object_;
    /**
     * Time at which the object was last updated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $updated;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'business_profile' => $value instanceof \stdClass ? $this->business_profile = new \StripeSDK\DTOs\Portal\BusinessProfile($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'default_return_url' => $value === null || is_string($value) ? $this->default_return_url = $value : parent::assignMember($name, $value),
            'features' => $value instanceof \stdClass ? $this->features = new \StripeSDK\DTOs\Portal\Features($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'login_page' => $value instanceof \stdClass ? $this->login_page = new \StripeSDK\DTOs\Portal\LoginPage($value) : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\BillingPortal\Configuration\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'updated' => is_int($value) ? $this->updated = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
