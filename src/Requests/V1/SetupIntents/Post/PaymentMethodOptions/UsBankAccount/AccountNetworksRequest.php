<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodOptions\UsBankAccount;

/**
 * networks_options_param
 */
final class AccountNetworksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\SetupIntents\Post\PaymentMethodOptions\UsBankAccount\Networks\NetworksRequestedCollection $requested;
}
