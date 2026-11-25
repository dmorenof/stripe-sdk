<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalSubscriptionCancellationReason
 */
final class SubscriptionCancellationReason extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
        'options',
    ];

    /**
     * Whether the feature is enabled.
     */
    public bool $enabled;
    /**
     * The IDs of custom feedback options configured for this cancellation reason.
     */
    public ?\StripeSDK\Collections\Portal\SubscriptionCancellationReason\FeedbackOptionsCollection $feedback_options;
    /**
     * Which cancellation reasons will be given as options to the customer.
     */
    public \StripeSDK\Collections\Portal\SubscriptionCancellationReason\OptionsCollection $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
