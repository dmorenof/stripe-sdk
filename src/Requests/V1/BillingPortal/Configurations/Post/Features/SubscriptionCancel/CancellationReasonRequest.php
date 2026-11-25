<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel;

/**
 * subscription_cancellation_reason_creation_param
 */
final class CancellationReasonRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'options',
    ];

    public bool $enabled;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\CancellationReason\FeedbackOptionsRequest $feedback_options;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel\CancellationReason\ReasonOptionsRequest $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
