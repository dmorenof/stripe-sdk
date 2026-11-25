<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequest4Variant1\Installments;

final class InstallmentsPlanRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\InstallmentsPlanRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\InstallmentsPlanRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'count' => [
                    'kind' => 'integer',
                ],
                'interval' => [
                    'kind' => 'string',
                    'enum' => [
                        'month',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'bonus',
                        'fixed_count',
                        'revolving',
                    ],
                ],
            ],
            'required' => [
                'type',
            ],
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
