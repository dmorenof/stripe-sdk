<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AsDescribedRequest2Variant1;

final class ReceivedAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\ReceivedAtRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'integer',
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
