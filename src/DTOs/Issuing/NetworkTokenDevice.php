<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingNetworkTokenDevice
 */
final class NetworkTokenDevice extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'device_fingerprint' => [
            'maxLength' => 5000,
        ],
        'ip_address' => [
            'maxLength' => 5000,
        ],
        'location' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An obfuscated ID derived from the device ID.
     */
    public string $device_fingerprint {
        set {
            $this->assigning('device_fingerprint', $value);
            $this->device_fingerprint = $value;
        }
    }
    /**
     * The IP address of the device at provisioning time.
     */
    public string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * The geographic latitude/longitude coordinates of the device at provisioning time. The format is [+-]decimal/[+-]decimal.
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }
    /**
     * The name of the device used for tokenization.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The phone number of the device used for tokenization.
     */
    public string $phone_number {
        set {
            $this->assigning('phone_number', $value);
            $this->phone_number = $value;
        }
    }
    /**
     * The type of device used for tokenization.
     */
    public \StripeSDK\Enums\Issuing\NetworkTokenDevice\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'device_fingerprint' => is_string($value) ? $this->device_fingerprint = $value : parent::assignMember($name, $value),
            'ip_address' => is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone_number' => is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\NetworkTokenDevice\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
