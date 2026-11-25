<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * TerminalConfigurationConfigurationResourceEnterprisePEAPWifi
 */
final class TerminalConfigurationConfigurationResourceEnterprisePeapWifi extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'password',
        'ssid',
        'username',
    ];

    protected const array VALIDATION = [
        'ca_certificate_file' => [
            'maxLength' => 5000,
        ],
        'password' => [
            'maxLength' => 5000,
        ],
        'ssid' => [
            'maxLength' => 5000,
        ],
        'username' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A File ID representing a PEM file containing the server certificate
     */
    public string $ca_certificate_file {
        set {
            $this->assigning('ca_certificate_file', $value);
            $this->ca_certificate_file = $value;
        }
    }
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
    /**
     * Username for connecting to the WiFi network
     */
    public string $username {
        set {
            $this->assigning('username', $value);
            $this->username = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ca_certificate_file' => is_string($value) ? $this->ca_certificate_file = $value : parent::assignMember($name, $value),
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'ssid' => is_string($value) ? $this->ssid = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
