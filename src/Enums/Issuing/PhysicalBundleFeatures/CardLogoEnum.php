<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\PhysicalBundleFeatures;

enum CardLogoEnum: string
{
    case Optional = 'optional';
    case Required = 'required';
    case Unsupported = 'unsupported';
}
