<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Payment\Intent;

final class MethodTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Payment\Intent\MethodTypesEnum::class;
}
