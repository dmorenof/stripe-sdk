<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Climate\Supplier;

enum RemovalPathwayEnum: string
{
    case BiomassCarbonRemovalAndStorage = 'biomass_carbon_removal_and_storage';
    case DirectAirCapture = 'direct_air_capture';
    case EnhancedWeathering = 'enhanced_weathering';
    case MarineCarbonRemoval = 'marine_carbon_removal';
}
