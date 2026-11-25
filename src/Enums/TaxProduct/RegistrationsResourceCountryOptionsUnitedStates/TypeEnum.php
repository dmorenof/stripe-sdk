<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsUnitedStates;

enum TypeEnum: string
{
    case AdmissionsTax = 'admissions_tax';
    case AttendanceTax = 'attendance_tax';
    case EntertainmentTax = 'entertainment_tax';
    case GrossReceiptsTax = 'gross_receipts_tax';
    case HospitalityTax = 'hospitality_tax';
    case LocalAmusementTax = 'local_amusement_tax';
    case LocalLeaseTax = 'local_lease_tax';
    case LuxuryTax = 'luxury_tax';
    case MassTransitParkingTax = 'mass_transit_parking_tax';
    case ParkingTax = 'parking_tax';
    case ResortTax = 'resort_tax';
    case StateCommunicationsTax = 'state_communications_tax';
    case StateRetailDeliveryFee = 'state_retail_delivery_fee';
    case StateSalesTax = 'state_sales_tax';
    case TourismTax = 'tourism_tax';
}
