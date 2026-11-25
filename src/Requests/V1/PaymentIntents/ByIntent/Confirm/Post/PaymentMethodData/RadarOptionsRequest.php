<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData;

/**
 * radar_options_with_hidden_options
 */
final class RadarOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'session' => [
            'maxLength' => 5000,
        ],
    ];

    public string $session {
        set {
            $this->assigning('session', $value);
            $this->session = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'session' => is_string($value) ? $this->session = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
