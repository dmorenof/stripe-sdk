<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Climate\Supplier;

final class LocationsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\ClimateRemovals\Location::class;
}
