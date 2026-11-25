<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Charge\Outcome;

final class RuleDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Rule::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'rule',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'rule' => [
            'kind' => 'object',
            'properties' => [
                'action' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'predicate' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'action',
                'id',
                'predicate',
            ],
        ],
    ];
}
