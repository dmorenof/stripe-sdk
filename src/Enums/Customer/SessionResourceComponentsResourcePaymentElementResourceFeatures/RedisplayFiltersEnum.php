<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\SessionResourceComponentsResourcePaymentElementResourceFeatures;

enum RedisplayFiltersEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
