<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Mandate\AcssDebit;

final class DefaultForCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Mandate\AcssDebit\DefaultForEnum::class;
}
