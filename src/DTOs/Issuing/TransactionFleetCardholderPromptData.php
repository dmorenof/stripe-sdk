<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFleetCardholderPromptData
 */
final class TransactionFleetCardholderPromptData extends \Dmorenof\SdkRuntime\DTO
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

    /**
     * Driver ID.
     */
    public ?string $driver_id {
        set {
            $this->assigning('driver_id', $value);
            $this->driver_id = $value;
        }
    }
    /**
     * Odometer reading.
     */
    public ?int $odometer;
    /**
     * An alphanumeric ID. This field is used when a vehicle ID, driver ID, or generic ID is entered by the cardholder, but the merchant or card network did not specify the prompt type.
     */
    public ?string $unspecified_id {
        set {
            $this->assigning('unspecified_id', $value);
            $this->unspecified_id = $value;
        }
    }
    /**
     * User ID.
     */
    public ?string $user_id {
        set {
            $this->assigning('user_id', $value);
            $this->user_id = $value;
        }
    }
    /**
     * Vehicle number.
     */
    public ?string $vehicle_number {
        set {
            $this->assigning('vehicle_number', $value);
            $this->vehicle_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'driver_id' => $value === null || is_string($value) ? $this->driver_id = $value : parent::assignMember($name, $value),
            'odometer' => $value === null || is_int($value) ? $this->odometer = $value : parent::assignMember($name, $value),
            'unspecified_id' => $value === null || is_string($value) ? $this->unspecified_id = $value : parent::assignMember($name, $value),
            'user_id' => $value === null || is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            'vehicle_number' => $value === null || is_string($value) ? $this->vehicle_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
