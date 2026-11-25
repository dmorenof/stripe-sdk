<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * verifone_p400
 *
 * An object containing device type specific settings for Verifone P400 readers.
 */
final class VerifoneP400Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\VerifoneP400\P400SplashscreenRequest $splashscreen;
}
