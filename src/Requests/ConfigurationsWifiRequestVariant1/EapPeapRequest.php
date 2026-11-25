<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ConfigurationsWifiRequestVariant1;

/**
 * enterprise_peap_config
 */
final class EapPeapRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'password',
        'ssid',
        'username',
    ];

    protected const array VALIDATION = [
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

    public string $ca_certificate_file;
    public string $password {
        set {
            $this->assigning('password', $value);
            $this->password = $value;
        }
    }
    public string $ssid {
        set {
            $this->assigning('ssid', $value);
            $this->ssid = $value;
        }
    }
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
