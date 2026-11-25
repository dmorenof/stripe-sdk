<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceSubscriptionData
 */
final class LinksResourceSubscriptionData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'invoice_settings',
        'metadata',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The subscription's description, meant to be displayable to the customer. Use this field to optionally store an explanation of the subscription for rendering in Stripe surfaces and certain local payment methods UIs.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\LinksResourceSubscriptionDataInvoiceSettings $invoice_settings;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that will set metadata on [Subscriptions](https://docs.stripe.com/api/subscriptions) generated from this payment link.
     */
    public \StripeSDK\DTOs\Payment\LinksResourceSubscriptionData\MetadataMap $metadata;
    /**
     * Integer representing the number of trial period days before the customer is charged for the first time.
     */
    public ?int $trial_period_days;
    /**
     * Settings related to subscription trials.
     */
    public ?\StripeSDK\DTOs\SubscriptionsTrialsResourceTrialSettings $trial_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'invoice_settings' => $value instanceof \stdClass ? $this->invoice_settings = new \StripeSDK\DTOs\Payment\LinksResourceSubscriptionDataInvoiceSettings($value) : parent::assignMember($name, $value),
            'trial_period_days' => $value === null || is_int($value) ? $this->trial_period_days = $value : parent::assignMember($name, $value),
            'trial_settings' => $value === null || $value instanceof \stdClass ? $this->trial_settings = $value === null ? null : new \StripeSDK\DTOs\SubscriptionsTrialsResourceTrialSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
