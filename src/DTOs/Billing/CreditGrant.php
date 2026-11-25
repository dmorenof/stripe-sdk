<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Credit Grant
 *
 * A credit grant is an API resource that documents the allocation of some billing credits to a customer.
 *
 * Related guide: [Billing credits](https://docs.stripe.com/billing/subscriptions/usage-based/billing-credits)
 */
final class CreditGrant extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'applicability_config',
        'category',
        'created',
        'customer',
        'id',
        'livemode',
        'metadata',
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
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount $amount;
    public \StripeSDK\DTOs\Billing\CreditGrantsResourceApplicabilityConfig $applicability_config;
    /**
     * The category of this credit grant. This is for tracking purposes and isn't displayed to the customer.
     */
    public \StripeSDK\Enums\Billing\CreditGrant\CategoryEnum $category;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * ID of the customer receiving the billing credits.
     */
    public \StripeSDK\DTOs\Billing\CreditGrant\CustomerDTO $customer;
    /**
     * ID of the account representing the customer receiving the billing credits
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The time when the billing credits become effective-when they're eligible for use.
     * Format: unix-time
     */
    public ?int $effective_at;
    /**
     * The time when the billing credits expire. If not present, the billing credits don't expire.
     * Format: unix-time
     */
    public ?int $expires_at;
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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Billing\CreditGrant\MetadataMap $metadata;
    /**
     * A descriptive name shown in dashboard.
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
    public \StripeSDK\Enums\Billing\CreditGrant\ObjectEnum $object_;
    /**
     * The priority for applying this credit grant. The highest priority is 0 and the lowest is 100.
     */
    public ?int $priority;
    /**
     * ID of the test clock this credit grant belongs to.
     */
    public ?\StripeSDK\DTOs\Billing\CreditGrant\TestClockDTO $test_clock;
    /**
     * Time at which the object was last updated. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $updated;
    /**
     * The time when this credit grant was voided. If not present, the credit grant hasn't been voided.
     * Format: unix-time
     */
    public ?int $voided_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value instanceof \stdClass ? $this->amount = new \StripeSDK\DTOs\Billing\CreditGrantsResourceAmount($value) : parent::assignMember($name, $value),
            'applicability_config' => $value instanceof \stdClass ? $this->applicability_config = new \StripeSDK\DTOs\Billing\CreditGrantsResourceApplicabilityConfig($value) : parent::assignMember($name, $value),
            'category' => is_string($value) ? $this->category = \StripeSDK\Enums\Billing\CreditGrant\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'effective_at' => $value === null || is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\CreditGrant\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'priority' => $value === null || is_int($value) ? $this->priority = $value : parent::assignMember($name, $value),
            'updated' => is_int($value) ? $this->updated = $value : parent::assignMember($name, $value),
            'voided_at' => $value === null || is_int($value) ? $this->voided_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
