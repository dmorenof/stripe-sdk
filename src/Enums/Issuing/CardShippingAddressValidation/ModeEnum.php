<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardShippingAddressValidation;

enum ModeEnum: string
{
    case Disabled = 'disabled';
    case NormalizationOnly = 'normalization_only';
    case ValidationAndNormalization = 'validation_and_normalization';
}
