<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Pix is a payment method popular in Brazil. When paying with Pix, customers authenticate and approve payments by scanning a QR code in their preferred banking app. Check this [page](https://docs.stripe.com/payments/pix) for more details.
 */
final class ByConfigurationPixRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Pix\DisplayPreferenceRequest $display_preference;
}
