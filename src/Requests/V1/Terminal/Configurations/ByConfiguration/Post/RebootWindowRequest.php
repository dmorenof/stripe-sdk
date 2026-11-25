<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post;

final class RebootWindowRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\WindowVariant1Request::class, \StripeSDK\Enums\WindowVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'end_hour' => [
                    'kind' => 'integer',
                ],
                'start_hour' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'end_hour',
                'start_hour',
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
