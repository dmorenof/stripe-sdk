<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\PersonalizationDesignRejectionReasons;

enum CarrierTextEnum: string
{
    case GeographicLocation = 'geographic_location';
    case Inappropriate = 'inappropriate';
    case NetworkName = 'network_name';
    case NonFiatCurrency = 'non_fiat_currency';
    case Other = 'other';
    case OtherEntity = 'other_entity';
    case PromotionalMaterial = 'promotional_material';
}
