<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TerminalConfigurationConfigurationResourcePersonalPSKWifi
 */
final class TerminalConfigurationConfigurationResourcePersonalPskWifi extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'password',
        'ssid',
    ];

    protected const array VALIDATION = [
        'password' => [
            'maxLength' => 5000,
        ],
        'ssid' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Password for connecting to the WiFi network
     */
    public string $password {
        set {
            $this->assigning('password', $value);
            $this->password = $value;
        }
    }
    /**
     * Name of the WiFi network
     */
    public string $ssid {
        set {
            $this->assigning('ssid', $value);
            $this->ssid = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'ssid' => is_string($value) ? $this->ssid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
