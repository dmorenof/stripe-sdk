<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionCancel;

/**
 * subscription_cancellation_reason_updating_param
 */
final class CancellationReasonRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionCancel\CancellationReason\FeedbackOptionsRequest $feedback_options;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionCancel\CancellationReason\ReasonOptionsRequest $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
