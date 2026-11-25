<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions;

/**
 * united_states
 */
final class OptionsUsRequest extends \Dmorenof\SdkRuntime\DTO
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

    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\AdmissionsTaxRequest $admissions_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\AttendanceTaxRequest $attendance_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\EntertainmentTaxRequest $entertainment_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\ReceiptsTaxRequest $gross_receipts_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\HospitalityTaxRequest $hospitality_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\AmusementTaxRequest $local_amusement_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\LeaseTaxRequest $local_lease_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\LuxuryTaxRequest $luxury_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\ParkingTaxRequest $mass_transit_parking_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\ParkingTax\ParkingTaxRequest $parking_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\ResortTaxRequest $resort_tax;
    public string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\SalesTaxRequest $state_sales_tax;
    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Us\TourismTaxRequest $tourism_tax;
    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Us\UsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Us\UsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
