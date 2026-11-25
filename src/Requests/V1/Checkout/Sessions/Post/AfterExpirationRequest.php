<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * after_expiration_params
 *
 * Configure actions after a Checkout Session has expired. You can't set this parameter if `ui_mode` is `elements`.
 */
final class AfterExpirationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\AfterExpiration\ExpirationRecoveryRequest $recovery;
}
