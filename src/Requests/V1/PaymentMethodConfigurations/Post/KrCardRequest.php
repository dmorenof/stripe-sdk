<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Korean cards let users pay using locally issued cards from South Korea.
 */
final class KrCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\KrCard\DisplayPreferenceRequest $display_preference;
}
