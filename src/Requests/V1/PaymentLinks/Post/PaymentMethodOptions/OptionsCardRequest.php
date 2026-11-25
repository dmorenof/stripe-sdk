<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post\PaymentMethodOptions;

/**
 * card_payment_method_options_params
 */
final class OptionsCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentLinks\Post\PaymentMethodOptions\Card\CardRestrictionsRequest $restrictions;
}
