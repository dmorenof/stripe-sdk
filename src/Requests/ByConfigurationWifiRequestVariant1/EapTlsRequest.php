<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ByConfigurationWifiRequestVariant1;

/**
 * enterprise_tls_config
 */
final class EapTlsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'client_certificate_file',
        'private_key_file',
        'ssid',
    ];

    protected const array VALIDATION = [
        'private_key_file_password' => [
            'maxLength' => 5000,
        ],
        'ssid' => [
            'maxLength' => 5000,
        ],
    ];

    public string $ca_certificate_file;
    public string $client_certificate_file;
    public string $private_key_file;
    public string $private_key_file_password {
        set {
            $this->assigning('private_key_file_password', $value);
            $this->private_key_file_password = $value;
        }
    }
    public string $ssid {
        set {
            $this->assigning('ssid', $value);
            $this->ssid = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ca_certificate_file' => is_string($value) ? $this->ca_certificate_file = $value : parent::assignMember($name, $value),
            'client_certificate_file' => is_string($value) ? $this->client_certificate_file = $value : parent::assignMember($name, $value),
            'private_key_file' => is_string($value) ? $this->private_key_file = $value : parent::assignMember($name, $value),
            'private_key_file_password' => is_string($value) ? $this->private_key_file_password = $value : parent::assignMember($name, $value),
            'ssid' => is_string($value) ? $this->ssid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
