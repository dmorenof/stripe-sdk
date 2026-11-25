<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * tos_acceptance_specs
 *
 * Details on the account's acceptance of the [Stripe Services Agreement](/connect/updating-accounts#tos-acceptance). This property can only be updated for accounts where [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts. This property defaults to a `full` service agreement when empty.
 */
final class TosAcceptanceRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'service_agreement' => [
            'maxLength' => 5000,
        ],
        'user_agent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Format: unix-time
     */
    public int $date;
    public string $ip;
    public string $service_agreement {
        set {
            $this->assigning('service_agreement', $value);
            $this->service_agreement = $value;
        }
    }
    public string $user_agent {
        set {
            $this->assigning('user_agent', $value);
            $this->user_agent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_int($value) ? $this->date = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'service_agreement' => is_string($value) ? $this->service_agreement = $value : parent::assignMember($name, $value),
            'user_agent' => is_string($value) ? $this->user_agent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
