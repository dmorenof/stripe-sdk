<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFlightData
 */
final class TransactionFlightData extends \Dmorenof\SdkRuntime\DTO
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
     * The time that the flight departed.
     */
    public ?int $departure_at;
    /**
     * The name of the passenger.
     */
    public ?string $passenger_name {
        set {
            $this->assigning('passenger_name', $value);
            $this->passenger_name = $value;
        }
    }
    /**
     * Whether the ticket is refundable.
     */
    public ?bool $refundable;
    /**
     * The legs of the trip.
     */
    public ?\StripeSDK\Collections\Issuing\TransactionFlightData\SegmentsCollection $segments;
    /**
     * The travel agency that issued the ticket.
     */
    public ?string $travel_agency {
        set {
            $this->assigning('travel_agency', $value);
            $this->travel_agency = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'departure_at' => $value === null || is_int($value) ? $this->departure_at = $value : parent::assignMember($name, $value),
            'passenger_name' => $value === null || is_string($value) ? $this->passenger_name = $value : parent::assignMember($name, $value),
            'refundable' => $value === null || is_bool($value) ? $this->refundable = $value : parent::assignMember($name, $value),
            'segments' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->segments = $value === null ? null : new \StripeSDK\Collections\Issuing\TransactionFlightData\SegmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Issuing\TransactionFlightDataLeg::class)) : parent::assignMember($name, $value),
            'travel_agency' => $value === null || is_string($value) ? $this->travel_agency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
