<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * payment_method_options_params
 *
 * Payment-method-specific configuration.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentLinks\Post\PaymentMethodOptions\OptionsCardRequest $card;
}
