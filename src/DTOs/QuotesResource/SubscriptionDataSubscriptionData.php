<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\QuotesResource;

/**
 * QuotesResourceSubscriptionDataSubscriptionData
 */
final class SubscriptionDataSubscriptionData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_mode',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\QuotesResource\SubscriptionDataBillingMode $billing_mode;
    /**
     * The subscription's description, meant to be displayable to the customer. Use this field to optionally store an explanation of the subscription for rendering in Stripe surfaces and certain local payment methods UIs.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * When creating a new subscription, the date of which the subscription schedule will start after the quote is accepted. This date is ignored if it is in the past when the quote is accepted. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $effective_date;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that will set metadata on the subscription or subscription schedule when the quote is accepted. If a recurring price is included in `line_items`, this field will be passed to the resulting subscription's `metadata` field. If `subscription_data.effective_date` is used, this field will be passed to the resulting subscription schedule's `phases.metadata` field. Unlike object-level metadata, this field is declarative. Updates will clear prior values.
     */
    public ?\StripeSDK\DTOs\QuotesResource\SubscriptionDataSubscriptionData\MetadataMap $metadata;
    /**
     * Integer representing the number of trial period days before the customer is charged for the first time.
     */
    public ?int $trial_period_days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_mode' => $value instanceof \stdClass ? $this->billing_mode = new \StripeSDK\DTOs\QuotesResource\SubscriptionDataBillingMode($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'effective_date' => $value === null || is_int($value) ? $this->effective_date = $value : parent::assignMember($name, $value),
            'trial_period_days' => $value === null || is_int($value) ? $this->trial_period_days = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
