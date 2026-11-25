<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * [Stablecoin payments](https://docs.stripe.com/payments/stablecoin-payments) enable customers to pay in stablecoins like USDC from 100s of wallets including Phantom and Metamask.
 */
final class PaymentMethodConfigurationsCryptoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Crypto\DisplayPreferenceRequest $display_preference;
}
