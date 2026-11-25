<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionItems\ByItem\Post;

/**
 * current_trial_param
 *
 * The trial offer to apply to this subscription item.
 */
final class CurrentTrialRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'trial_offer',
    ];

    protected const array VALIDATION = [
        'trial_offer' => [
            'maxLength' => 5000,
        ],
    ];

    public string $trial_offer {
        set {
            $this->assigning('trial_offer', $value);
            $this->trial_offer = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'trial_offer' => is_string($value) ? $this->trial_offer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
