<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Account\CapabilityFutureRequirements;

final class CurrentlyDueCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
