<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\Authorization;

final class HistoryCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\Authorization\Request::class;
}
