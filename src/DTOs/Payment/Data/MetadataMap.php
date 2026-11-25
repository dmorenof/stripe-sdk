<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment\Data;

/** @extends \Dmorenof\SdkRuntime\Map<string> */
final class MetadataMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'string';
    protected const bool VALUE_NULLABLE = false;
    protected const array VALUE_VALIDATION = [
        'maxLength' => 500,
    ];
}
