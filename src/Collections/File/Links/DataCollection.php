<?php

declare(strict_types=1);

namespace StripeSDK\Collections\File\Links;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\FileLink> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\FileLink::class;
}
