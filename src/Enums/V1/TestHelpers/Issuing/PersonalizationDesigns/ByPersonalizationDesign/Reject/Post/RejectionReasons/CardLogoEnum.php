<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Reject\Post\RejectionReasons;

enum CardLogoEnum: string
{
    case GeographicLocation = 'geographic_location';
    case Inappropriate = 'inappropriate';
    case NetworkName = 'network_name';
    case NonBinaryImage = 'non_binary_image';
    case NonFiatCurrency = 'non_fiat_currency';
    case Other = 'other';
    case OtherEntity = 'other_entity';
    case PromotionalMaterial = 'promotional_material';
}
