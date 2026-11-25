<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalSubscriptionCancel
 */
final class SubscriptionCancel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cancellation_reason',
        'enabled',
        'mode',
        'proration_behavior',
    ];

    public \StripeSDK\DTOs\Portal\SubscriptionCancellationReason $cancellation_reason;
    /**
     * Whether the feature is enabled.
     */
    public bool $enabled;
    /**
     * Whether to cancel subscriptions immediately or at the end of the billing period.
     */
    public \StripeSDK\Enums\Portal\SubscriptionCancel\ModeEnum $mode;
    /**
     * Whether to create prorations when canceling subscriptions. Possible values are `none` and `create_prorations`.
     */
    public \StripeSDK\Enums\Portal\SubscriptionCancel\ProrationBehaviorEnum $proration_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancellation_reason' => $value instanceof \stdClass ? $this->cancellation_reason = new \StripeSDK\DTOs\Portal\SubscriptionCancellationReason($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\Portal\SubscriptionCancel\ModeEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\Portal\SubscriptionCancel\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
