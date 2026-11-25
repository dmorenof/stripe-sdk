<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\FinancialConnections\Sessions\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\SessionsPermissionsEnum> */
final class SessionsPermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\SessionsPermissionsEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
