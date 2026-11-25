<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features;

/**
 * subscription_cancel_creation_param
 */
final class SubscriptionCancelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\CancellationReasonRequest $cancellation_reason;
    public bool $enabled;
    public \StripeSDK\Enums\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\CancelModeEnum $mode;
    public \StripeSDK\Enums\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\ProrationBehaviorEnum $proration_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\CancelModeEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
