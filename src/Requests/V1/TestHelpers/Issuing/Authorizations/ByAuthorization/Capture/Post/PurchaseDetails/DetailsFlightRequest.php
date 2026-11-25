<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails;

/**
 * flight_specs
 */
final class DetailsFlightRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'passenger_name' => [
            'maxLength' => 5000,
        ],
        'travel_agency' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Format: unix-time
     */
    public int $departure_at;
    public string $passenger_name {
        set {
            $this->assigning('passenger_name', $value);
            $this->passenger_name = $value;
        }
    }
    public bool $refundable;
    public \StripeSDK\Collections\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\Flight\FlightSegmentsCollection $segments;
    public string $travel_agency {
        set {
            $this->assigning('travel_agency', $value);
            $this->travel_agency = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'departure_at' => is_int($value) ? $this->departure_at = $value : parent::assignMember($name, $value),
            'passenger_name' => is_string($value) ? $this->passenger_name = $value : parent::assignMember($name, $value),
            'refundable' => is_bool($value) ? $this->refundable = $value : parent::assignMember($name, $value),
            'travel_agency' => is_string($value) ? $this->travel_agency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
