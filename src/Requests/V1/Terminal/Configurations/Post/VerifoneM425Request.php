<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * verifone_m425
 *
 * An object containing device type specific settings for Verifone M425 readers.
 */
final class VerifoneM425Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\VerifoneM425\M425SplashscreenRequest $splashscreen;
}
