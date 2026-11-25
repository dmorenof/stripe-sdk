<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections;

final class ConnectionsPermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\ConnectionsPermissionsEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
