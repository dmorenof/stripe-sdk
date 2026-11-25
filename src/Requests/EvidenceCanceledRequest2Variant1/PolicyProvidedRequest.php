<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EvidenceCanceledRequest2Variant1;

final class PolicyProvidedRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['bool', \StripeSDK\Enums\PolicyProvidedRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'boolean',
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
