<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post;

/**
 * test_payment_method_options_param
 *
 * Payment-method-specific configuration for this ConfirmationToken.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\OptionsCardRequest $card;
}
