<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\Authorization;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Issuing\Authorization\Request> */
final class HistoryCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\Authorization\Request::class;
}
