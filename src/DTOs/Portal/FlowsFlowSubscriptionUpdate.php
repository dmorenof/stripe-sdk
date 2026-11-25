<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsFlowSubscriptionUpdate
 */
final class FlowsFlowSubscriptionUpdate extends \Dmorenof\SdkRuntime\DTO
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
     * The ID of the subscription to be updated.
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
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
