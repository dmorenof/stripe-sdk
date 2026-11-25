<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AsDescribedRequestVariant1;

final class ReceivedAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['int', \StripeSDK\Enums\ReceivedAtRequestVariant2\AtVariant2Enum::class];
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
