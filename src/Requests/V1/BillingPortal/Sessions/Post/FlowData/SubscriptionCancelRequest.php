<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData;

/**
 * flow_data_subscription_cancel_param
 */
final class SubscriptionCancelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subscription',
    ];

    protected const array VALIDATION = [
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\SubscriptionCancel\CancelRetentionRequest $retention;
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
