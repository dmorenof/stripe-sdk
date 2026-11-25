<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureStandaloneResource\DataShareDetails;

enum TypeEnum: string
{
    case DsSpecific = 'ds_specific';
    case EmvStandard = 'emv_standard';
}
