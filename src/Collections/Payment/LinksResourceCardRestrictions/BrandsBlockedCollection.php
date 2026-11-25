<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\LinksResourceCardRestrictions;

final class BrandsBlockedCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Payment\LinksResourceCardRestrictions\BrandsBlockedEnum::class;
}
