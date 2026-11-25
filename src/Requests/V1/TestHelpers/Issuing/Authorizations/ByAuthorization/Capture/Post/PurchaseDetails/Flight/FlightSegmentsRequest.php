<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\Flight;

/**
 * flight_segment_specs
 */
final class FlightSegmentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'arrival_airport_code' => [
            'maxLength' => 3,
        ],
        'carrier' => [
            'maxLength' => 5000,
        ],
        'departure_airport_code' => [
            'maxLength' => 3,
        ],
        'flight_number' => [
            'maxLength' => 5000,
        ],
        'service_class' => [
            'maxLength' => 5000,
        ],
    ];

    public string $arrival_airport_code {
        set {
            $this->assigning('arrival_airport_code', $value);
            $this->arrival_airport_code = $value;
        }
    }
    public string $carrier {
        set {
            $this->assigning('carrier', $value);
            $this->carrier = $value;
        }
    }
    public string $departure_airport_code {
        set {
            $this->assigning('departure_airport_code', $value);
            $this->departure_airport_code = $value;
        }
    }
    public string $flight_number {
        set {
            $this->assigning('flight_number', $value);
            $this->flight_number = $value;
        }
    }
    public string $service_class {
        set {
            $this->assigning('service_class', $value);
            $this->service_class = $value;
        }
    }
    public bool $stopover_allowed;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'arrival_airport_code' => is_string($value) ? $this->arrival_airport_code = $value : parent::assignMember($name, $value),
            'carrier' => is_string($value) ? $this->carrier = $value : parent::assignMember($name, $value),
            'departure_airport_code' => is_string($value) ? $this->departure_airport_code = $value : parent::assignMember($name, $value),
            'flight_number' => is_string($value) ? $this->flight_number = $value : parent::assignMember($name, $value),
            'service_class' => is_string($value) ? $this->service_class = $value : parent::assignMember($name, $value),
            'stopover_allowed' => is_bool($value) ? $this->stopover_allowed = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
