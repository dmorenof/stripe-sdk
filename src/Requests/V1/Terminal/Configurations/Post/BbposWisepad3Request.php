<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * bbpos_wise_pad3
 *
 * An object containing device type specific settings for BBPOS WisePad 3 readers.
 */
final class BbposWisepad3Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\BbposWisepad3\Wisepad3SplashscreenRequest $splashscreen;
}
