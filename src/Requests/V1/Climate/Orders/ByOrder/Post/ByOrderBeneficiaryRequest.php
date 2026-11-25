<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Climate\Orders\ByOrder\Post;

final class ByOrderBeneficiaryRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\BeneficiaryVariant1Request::class, \StripeSDK\Enums\BeneficiaryVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'public_name' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
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
            'required' => [
                'public_name',
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
