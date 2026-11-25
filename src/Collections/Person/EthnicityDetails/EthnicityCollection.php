<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Person\EthnicityDetails;

final class EthnicityCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Person\EthnicityDetails\EthnicityEnum::class;
}
