<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsFlowSubscriptionCancel
 */
final class FlowsFlowSubscriptionCancel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subscription',
    ];

    protected const array VALIDATION = [
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specify a retention strategy to be used in the cancellation flow.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsRetention $retention;
    /**
     * The ID of the subscription to be canceled.
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'retention' => $value === null || $value instanceof \stdClass ? $this->retention = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsRetention($value) : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
