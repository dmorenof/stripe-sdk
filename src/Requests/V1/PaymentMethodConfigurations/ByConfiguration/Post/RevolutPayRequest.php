<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Revolut Pay, developed by Revolut, a global finance app, is a digital wallet payment method. Revolut Pay uses the customer’s stored balance or cards to fund the payment, and offers the option for non-Revolut customers to save their details after their first purchase.
 */
final class RevolutPayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\RevolutPay\DisplayPreferenceRequest $display_preference;
}
