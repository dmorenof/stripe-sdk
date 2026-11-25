<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EvidenceCanceledRequestVariant1;

final class PolicyProvidedRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['bool', \StripeSDK\Enums\ProvidedVariant2Enum::class];
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
