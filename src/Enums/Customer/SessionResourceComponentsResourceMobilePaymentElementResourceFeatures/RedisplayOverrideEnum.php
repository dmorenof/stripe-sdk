<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\SessionResourceComponentsResourceMobilePaymentElementResourceFeatures;

enum RedisplayOverrideEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
