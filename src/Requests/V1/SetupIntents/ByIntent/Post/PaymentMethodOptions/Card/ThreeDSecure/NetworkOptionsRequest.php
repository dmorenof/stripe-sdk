<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\Card\ThreeDSecure;

/**
 * network_options_param
 */
final class NetworkOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\Card\ThreeDSecure\NetworkOptions\CartesBancairesRequest $cartes_bancaires;
}
