<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsUnitedStates
 */
final class RegistrationsResourceCountryOptionsUnitedStates extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'state',
        'type',
    ];

    protected const array VALIDATION = [
        'state' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsAdmissionsTax $admissions_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsAttendanceTax $attendance_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsEntertainmentTax $entertainment_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsGrossReceiptsTax $gross_receipts_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsHospitalityTax $hospitality_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsLocalAmusementTax $local_amusement_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsLocalLeaseTax $local_lease_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsLuxuryTax $luxury_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsMassTransitParkingTax $mass_transit_parking_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsParkingTax $parking_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsResortTax $resort_tax;
    /**
     * Two-letter US state code ([ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2)).
     */
    public string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTax $state_sales_tax;
    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsTourismTax $tourism_tax;
    /**
     * Type of registration in the US.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsUnitedStates\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'admissions_tax' => $value instanceof \stdClass ? $this->admissions_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsAdmissionsTax($value) : parent::assignMember($name, $value),
            'attendance_tax' => $value instanceof \stdClass ? $this->attendance_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsAttendanceTax($value) : parent::assignMember($name, $value),
            'entertainment_tax' => $value instanceof \stdClass ? $this->entertainment_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsEntertainmentTax($value) : parent::assignMember($name, $value),
            'gross_receipts_tax' => $value instanceof \stdClass ? $this->gross_receipts_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsGrossReceiptsTax($value) : parent::assignMember($name, $value),
            'hospitality_tax' => $value instanceof \stdClass ? $this->hospitality_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsHospitalityTax($value) : parent::assignMember($name, $value),
            'local_amusement_tax' => $value instanceof \stdClass ? $this->local_amusement_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsLocalAmusementTax($value) : parent::assignMember($name, $value),
            'local_lease_tax' => $value instanceof \stdClass ? $this->local_lease_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsLocalLeaseTax($value) : parent::assignMember($name, $value),
            'luxury_tax' => $value instanceof \stdClass ? $this->luxury_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsLuxuryTax($value) : parent::assignMember($name, $value),
            'mass_transit_parking_tax' => $value instanceof \stdClass ? $this->mass_transit_parking_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsMassTransitParkingTax($value) : parent::assignMember($name, $value),
            'parking_tax' => $value instanceof \stdClass ? $this->parking_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsParkingTax($value) : parent::assignMember($name, $value),
            'resort_tax' => $value instanceof \stdClass ? $this->resort_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsResortTax($value) : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'state_sales_tax' => $value instanceof \stdClass ? $this->state_sales_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsStateSalesTax($value) : parent::assignMember($name, $value),
            'tourism_tax' => $value instanceof \stdClass ? $this->tourism_tax = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsUsTourismTax($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsUnitedStates\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
