<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions;

/**
 * card_param
 */
final class OptionsCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\CardInstallmentsRequest $installments;
}
