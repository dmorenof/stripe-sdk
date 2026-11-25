<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\SessionResourceComponentsResourceCustomerSheetResourceFeatures;

enum RedisplayFiltersEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
