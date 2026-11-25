<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * stripe_s700
 *
 * An object containing device type specific settings for Stripe S700 readers.
 */
final class StripeS700Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\StripeS700\S700SplashscreenRequest $splashscreen;
}
