<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\UsBankAccount;

/**
 * linked_account_options_param
 */
final class FinancialConnectionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\ConnectionsPermissionsCollection $permissions;
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\ConnectionsPrefetchCollection $prefetch;
}
