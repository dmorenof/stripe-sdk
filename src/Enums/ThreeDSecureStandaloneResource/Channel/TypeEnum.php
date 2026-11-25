<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureStandaloneResource\Channel;

enum TypeEnum: string
{
    case Browser = 'browser';
    case ThreeRI = 'three_r_i';
}
