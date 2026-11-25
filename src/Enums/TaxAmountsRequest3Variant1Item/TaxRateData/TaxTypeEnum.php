<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxAmountsRequest3Variant1Item\TaxRateData;

enum TaxTypeEnum: string
{
    case AmusementTax = 'amusement_tax';
    case CommunicationsTax = 'communications_tax';
    case DigitalExciseTax = 'digital_excise_tax';
    case Gst = 'gst';
    case Hst = 'hst';
    case Igst = 'igst';
    case Jct = 'jct';
    case LeaseTax = 'lease_tax';
    case MassTransitParkingTax = 'mass_transit_parking_tax';
    case ParkingTax = 'parking_tax';
    case Pst = 'pst';
    case Qst = 'qst';
    case RetailDeliveryFee = 'retail_delivery_fee';
    case Rst = 'rst';
    case SalesTax = 'sales_tax';
    case ServiceTax = 'service_tax';
    case UtilityUsersTax = 'utility_users_tax';
    case Vat = 'vat';
}
