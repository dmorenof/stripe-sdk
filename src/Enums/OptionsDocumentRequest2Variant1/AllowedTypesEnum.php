<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsDocumentRequest2Variant1;

enum AllowedTypesEnum: string
{
    case DrivingLicense = 'driving_license';
    case IdCard = 'id_card';
    case Passport = 'passport';
}
