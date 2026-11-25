<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Current Trial
 *
 * The current trial attached to the subscription item.
 */
final class SubscriptionsTrialsResourceCurrentTrial extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_date',
        'start_date',
        'trial_offer',
    ];

    protected const array VALIDATION = [
        'trial_offer' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Format: unix-time
     */
    public int $end_date;
    /**
     * Format: unix-time
     */
    public int $start_date;
    public string $trial_offer {
        set {
            $this->assigning('trial_offer', $value);
            $this->trial_offer = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_date' => is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'trial_offer' => is_string($value) ? $this->trial_offer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
