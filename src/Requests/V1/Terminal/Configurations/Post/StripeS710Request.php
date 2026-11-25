<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\Post;

/**
 * stripe_s710
 *
 * An object containing device type specific settings for Stripe S710 readers.
 */
final class StripeS710Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Terminal\Configurations\Post\StripeS710\S710SplashscreenRequest $splashscreen;
}
