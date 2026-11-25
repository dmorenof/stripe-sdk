<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Pause Collection
 *
 * The Pause Collection settings determine how we will pause collection for this subscription and for how long the subscription
 * should be paused.
 */
final class PauseCollection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'behavior',
    ];

    /**
     * The payment collection behavior for this subscription while paused.
     */
    public \StripeSDK\Enums\SubscriptionsResource\PauseCollection\BehaviorEnum $behavior;
    /**
     * The time after which the subscription will resume collecting payments.
     * Format: unix-time
     */
    public ?int $resumes_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'behavior' => is_string($value) ? $this->behavior = \StripeSDK\Enums\SubscriptionsResource\PauseCollection\BehaviorEnum::from($value) : parent::assignMember($name, $value),
            'resumes_at' => $value === null || is_int($value) ? $this->resumes_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
