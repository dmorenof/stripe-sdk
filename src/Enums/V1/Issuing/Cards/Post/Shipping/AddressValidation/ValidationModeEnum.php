<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Post\Shipping\AddressValidation;

enum ValidationModeEnum: string
{
    case Disabled = 'disabled';
    case NormalizationOnly = 'normalization_only';
    case ValidationAndNormalization = 'validation_and_normalization';
}
