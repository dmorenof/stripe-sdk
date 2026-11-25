<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\CreditGrants;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'applicability_config',
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * Amount of this credit grant.
     */
    public \StripeSDK\Requests\V1\Billing\CreditGrants\Post\CreditGrantsAmountRequest $amount;
    /**
     * Configuration specifying what this credit grant applies to. We currently only support `metered` prices that have a [Billing Meter](https://docs.stripe.com/api/billing/meter) attached to them.
     */
    public \StripeSDK\Requests\V1\Billing\CreditGrants\Post\ApplicabilityConfigRequest $applicability_config;
    /**
     * The category of this credit grant. It defaults to `paid` if not specified.
     */
    public \StripeSDK\Enums\V1\Billing\CreditGrants\Post\CreditGrantsCategoryEnum $category;
    /**
     * ID of the customer receiving the billing credits.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * ID of the account representing the customer receiving the billing credits.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The time when the billing credits become effective-when they're eligible for use. It defaults to the current timestamp if not specified.
     * Format: unix-time
     */
    public int $effective_at;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The time when the billing credits expire. If not specified, the billing credits don't expire.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * Set of key-value pairs that you can attach to an object. You can use this to store additional information about the object (for example, cost basis) in a structured format.
     */
    public \StripeSDK\Requests\V1\Billing\CreditGrants\Post\MetadataMapRequest $metadata;
    /**
     * A descriptive name shown in the Dashboard.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The desired priority for applying this credit grant. If not specified, it will be set to the default value of 50. The highest priority is 0 and the lowest is 100.
     */
    public int $priority;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = \StripeSDK\Enums\V1\Billing\CreditGrants\Post\CreditGrantsCategoryEnum::from($value) : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'effective_at' => is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'priority' => is_int($value) ? $this->priority = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
