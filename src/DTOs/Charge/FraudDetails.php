<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Charge;

/**
 * ChargeFraudDetails
 */
final class FraudDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'stripe_report' => [
            'maxLength' => 5000,
        ],
        'user_report' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Assessments from Stripe. If set, the value is `fraudulent`.
     */
    public string $stripe_report {
        set {
            $this->assigning('stripe_report', $value);
            $this->stripe_report = $value;
        }
    }
    /**
     * Assessments reported by you. If set, possible values of are `safe` and `fraudulent`.
     */
    public string $user_report {
        set {
            $this->assigning('user_report', $value);
            $this->user_report = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'stripe_report' => is_string($value) ? $this->stripe_report = $value : parent::assignMember($name, $value),
            'user_report' => is_string($value) ? $this->user_report = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
