<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\Fleet;

/**
 * fleet_cardholder_prompt_data_specs
 */
final class PromptDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'driver_id' => [
            'maxLength' => 5000,
        ],
        'unspecified_id' => [
            'maxLength' => 5000,
        ],
        'user_id' => [
            'maxLength' => 5000,
        ],
        'vehicle_number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $driver_id {
        set {
            $this->assigning('driver_id', $value);
            $this->driver_id = $value;
        }
    }
    public int $odometer;
    public string $unspecified_id {
        set {
            $this->assigning('unspecified_id', $value);
            $this->unspecified_id = $value;
        }
    }
    public string $user_id {
        set {
            $this->assigning('user_id', $value);
            $this->user_id = $value;
        }
    }
    public string $vehicle_number {
        set {
            $this->assigning('vehicle_number', $value);
            $this->vehicle_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'driver_id' => is_string($value) ? $this->driver_id = $value : parent::assignMember($name, $value),
            'odometer' => is_int($value) ? $this->odometer = $value : parent::assignMember($name, $value),
            'unspecified_id' => is_string($value) ? $this->unspecified_id = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'vehicle_number' => is_string($value) ? $this->vehicle_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
