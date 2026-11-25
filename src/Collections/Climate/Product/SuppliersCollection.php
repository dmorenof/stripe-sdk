<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Climate\Product;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Climate\Supplier> */
final class SuppliersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Climate\Supplier::class;
}
