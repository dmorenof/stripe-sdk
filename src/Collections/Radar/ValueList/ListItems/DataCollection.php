<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Radar\ValueList\ListItems;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Radar\ValueListItem> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Radar\ValueListItem::class;
}
