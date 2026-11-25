<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceTaxRateDetails;

enum TaxTypeEnum: string
{
    case AdmissionsTax = 'admissions_tax';
    case AmusementTax = 'amusement_tax';
    case AttendanceTax = 'attendance_tax';
    case CommunicationsTax = 'communications_tax';
    case DigitalExciseTax = 'digital_excise_tax';
    case EntertainmentTax = 'entertainment_tax';
    case GrossReceiptsTax = 'gross_receipts_tax';
    case Gst = 'gst';
    case HospitalityTax = 'hospitality_tax';
    case Hst = 'hst';
    case Igst = 'igst';
    case Jct = 'jct';
    case LeaseTax = 'lease_tax';
    case LuxuryTax = 'luxury_tax';
    case MassTransitParkingTax = 'mass_transit_parking_tax';
    case ParkingTax = 'parking_tax';
    case Pst = 'pst';
    case Qst = 'qst';
    case RecyclingFee = 'recycling_fee';
    case ResortTax = 'resort_tax';
    case RetailDeliveryFee = 'retail_delivery_fee';
    case Rst = 'rst';
    case SalesTax = 'sales_tax';
    case ServiceTax = 'service_tax';
    case TourismTax = 'tourism_tax';
    case UtilityUsersTax = 'utility_users_tax';
    case Vat = 'vat';
}
