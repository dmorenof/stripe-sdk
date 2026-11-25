<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Paused
 *
 * Indicates when and why the subscription transitioned to the paused status.
 */
final class PausedStatusDetailsPublic extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'subscription',
        'transitioned_at',
        'type',
    ];

    public \StripeSDK\DTOs\SubscriptionsResource\PausedStatusDetailsSubscription $subscription;
    /**
     * Unix timestamp in seconds of when the subscription status transitioned to `paused`.
     * Format: unix-time
     */
    public int $transitioned_at;
    /**
     * The type of pause.
     */
    public \StripeSDK\Enums\SubscriptionsResource\PausedStatusDetailsPublic\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'subscription' => $value instanceof \stdClass ? $this->subscription = new \StripeSDK\DTOs\SubscriptionsResource\PausedStatusDetailsSubscription($value) : parent::assignMember($name, $value),
            'transitioned_at' => is_int($value) ? $this->transitioned_at = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\SubscriptionsResource\PausedStatusDetailsPublic\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
