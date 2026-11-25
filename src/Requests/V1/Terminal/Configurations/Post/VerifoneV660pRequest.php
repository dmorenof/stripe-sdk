<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * verifone_v660p
 *
 * An object containing device type specific settings for Verifone V660p readers.
 */
final class VerifoneV660pRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\VerifoneV660p\V660pSplashscreenRequest $splashscreen;
}
