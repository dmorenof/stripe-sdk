<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\Channel;

enum ChannelTypeEnum: string
{
    case Browser = 'browser';
    case ThreeRI = 'three_r_i';
}
