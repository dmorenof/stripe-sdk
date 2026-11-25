<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\LinkAccountSessions\Post;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\LinkAccountSessions\Post\LinkAccountSessionsPermissionsEnum> */
final class LinkAccountSessionsPermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\LinkAccountSessions\Post\LinkAccountSessionsPermissionsEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
