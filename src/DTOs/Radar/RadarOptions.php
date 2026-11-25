<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Radar;

/**
 * RadarOption
 *
 * Options to configure Radar. See [Radar Session](https://docs.stripe.com/radar/radar-session) for more information.
 */
final class RadarOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'session' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A [Radar Session](https://docs.stripe.com/radar/radar-session) is a snapshot of the browser metadata and device details that help Radar make more accurate predictions on your payments.
     */
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
