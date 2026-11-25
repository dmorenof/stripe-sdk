<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * bbpos_wise_pose
 *
 * An object containing device type specific settings for BBPOS WisePOS E readers.
 */
final class WiseposERequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\BbposWiseposE\ESplashscreenRequest $splashscreen;
}
