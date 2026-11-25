<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * wallet_options_param
 *
 * Wallet-specific configuration.
 */
final class WalletOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\WalletOptions\OptionsLinkRequest $link;
}
