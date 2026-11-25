<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * verifone_ux700
 *
 * An object containing device type specific settings for Verifone UX700 readers.
 */
final class VerifoneUx700Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\VerifoneUx700\Ux700SplashscreenRequest $splashscreen;
}
