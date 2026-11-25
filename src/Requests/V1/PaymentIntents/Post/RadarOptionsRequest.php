<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * radar_options_with_peval_options
 *
 * Options to configure Radar. Learn more about [Radar Sessions](https://docs.stripe.com/radar/radar-session).
 */
final class RadarOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'session' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\PaymentIntents\Post\RadarOptions\OptionsReferrerRequest $referrer;
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
