<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card;

/**
 * installments_param
 */
final class CardInstallmentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'plan',
    ];

    public \StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodOptions\Card\Installments\InstallmentsPlanRequest $plan;
}
