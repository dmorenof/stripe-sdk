<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFlightDataLeg
 */
final class TransactionFlightDataLeg extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'arrival_airport_code' => [
            'maxLength' => 5000,
        ],
        'carrier' => [
            'maxLength' => 5000,
        ],
        'departure_airport_code' => [
            'maxLength' => 5000,
        ],
        'flight_number' => [
            'maxLength' => 5000,
        ],
        'service_class' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The three-letter IATA airport code of the flight's destination.
     */
    public ?string $arrival_airport_code {
        set {
            $this->assigning('arrival_airport_code', $value);
            $this->arrival_airport_code = $value;
        }
    }
    /**
     * The airline carrier code.
     */
    public ?string $carrier {
        set {
            $this->assigning('carrier', $value);
            $this->carrier = $value;
        }
    }
    /**
     * The three-letter IATA airport code that the flight departed from.
     */
    public ?string $departure_airport_code {
        set {
            $this->assigning('departure_airport_code', $value);
            $this->departure_airport_code = $value;
        }
    }
    /**
     * The flight number.
     */
    public ?string $flight_number {
        set {
            $this->assigning('flight_number', $value);
            $this->flight_number = $value;
        }
    }
    /**
     * The flight's service class.
     */
    public ?string $service_class {
        set {
            $this->assigning('service_class', $value);
            $this->service_class = $value;
        }
    }
    /**
     * Whether a stopover is allowed on this flight.
     */
    public ?bool $stopover_allowed;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'arrival_airport_code' => $value === null || is_string($value) ? $this->arrival_airport_code = $value : parent::assignMember($name, $value),
            'carrier' => $value === null || is_string($value) ? $this->carrier = $value : parent::assignMember($name, $value),
            'departure_airport_code' => $value === null || is_string($value) ? $this->departure_airport_code = $value : parent::assignMember($name, $value),
            'flight_number' => $value === null || is_string($value) ? $this->flight_number = $value : parent::assignMember($name, $value),
            'service_class' => $value === null || is_string($value) ? $this->service_class = $value : parent::assignMember($name, $value),
            'stopover_allowed' => $value === null || is_bool($value) ? $this->stopover_allowed = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
