<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FlowPreference\DataShare;

enum ShareTypeEnum: string
{
    case DsSpecific = 'ds_specific';
    case EmvStandard = 'emv_standard';
}
