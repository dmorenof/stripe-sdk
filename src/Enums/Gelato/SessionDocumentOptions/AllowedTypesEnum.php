<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\SessionDocumentOptions;

enum AllowedTypesEnum: string
{
    case DrivingLicense = 'driving_license';
    case IdCard = 'id_card';
    case Passport = 'passport';
}
