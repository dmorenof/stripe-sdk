<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cards\ByCard\Post\SpendingControls;

final class SpendingLimitsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Requests\V1\Issuing\Cards\ByCard\Post\SpendingControls\SpendingLimitsRequest::class;
}
