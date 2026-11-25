<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post;

/**
 * subscription_details_params
 *
 * The subscription creation or modification params to apply as a preview. Cannot be used with `schedule` or `schedule_details` fields.
 */
final class SubscriptionDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'resume_at' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\CycleAnchorRequest $billing_cycle_anchor;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingModeRequest $billing_mode;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingSchedulesRequest $billing_schedules;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\CancelAtRequest $cancel_at;
    public bool $cancel_at_period_end;
    public bool $cancel_now;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\TaxRatesRequest $default_tax_rates;
    public \StripeSDK\Collections\V1\Invoices\CreatePreview\Post\SubscriptionDetails\DetailsItemsCollection $items;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\DetailsMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\DetailsPauseRequest $pause;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\ProrationBehaviorEnum $proration_behavior;
    /**
     * Format: unix-time
     */
    public int $proration_date;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\ResumeAtEnum $resume_at {
        set {
            $this->assigning('resume_at', $value);
            $this->resume_at = $value;
        }
    }
    /**
     * Format: unix-time
     */
    public int $start_date;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\TrialEndRequest $trial_end;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancel_at_period_end' => is_bool($value) ? $this->cancel_at_period_end = $value : parent::assignMember($name, $value),
            'cancel_now' => is_bool($value) ? $this->cancel_now = $value : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_date' => is_int($value) ? $this->proration_date = $value : parent::assignMember($name, $value),
            'resume_at' => is_string($value) ? $this->resume_at = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\ResumeAtEnum::from($value) : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
