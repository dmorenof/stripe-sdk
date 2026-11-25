<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post;

/**
 * schedule_details_params
 *
 * The schedule creation or modification params to apply as a preview. Cannot be used with `subscription` or `subscription_` prefixed fields.
 */
final class ScheduleDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetails\BillingModeRequest $billing_mode;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\EndBehaviorEnum $end_behavior;
    public \StripeSDK\Collections\V1\Invoices\CreatePreview\Post\ScheduleDetails\DetailsPhasesCollection $phases;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\ProrationBehaviorEnum $proration_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_behavior' => is_string($value) ? $this->end_behavior = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\EndBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
