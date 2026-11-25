<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Disputes\ByDispute\Post\Evidence;

final class EvidenceFraudulentRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\EvidenceFraudulentRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\EvidenceFraudulentRequest2Variant2\Request2Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'additional_documentation' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                        ],
                        [
                            'kind' => 'string',
                            'enum' => [
                                '',
                            ],
                        ],
                    ],
                ],
                'explanation' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 2500,
                            ],
                        ],
                        [
                            'kind' => 'string',
                            'enum' => [
                                '',
                            ],
                        ],
                    ],
                ],
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
