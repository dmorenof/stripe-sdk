<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Unified Payment Interface (UPI) is India's leading payment method with exponential growth since it launched in 2016.
 */
final class ByConfigurationUpiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Upi\DisplayPreferenceRequest $display_preference;
}
