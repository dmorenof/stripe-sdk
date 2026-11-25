<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * verifone_p630
 *
 * An object containing device type specific settings for Verifone P630 readers.
 */
final class VerifoneP630Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\VerifoneP630\P630SplashscreenRequest $splashscreen;
}
