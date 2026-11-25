<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Products\ById\Post;

final class PackageDimensionsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DimensionsVariant1Request::class, \StripeSDK\Enums\DimensionsVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'height' => [
                    'kind' => 'number',
                ],
                'length' => [
                    'kind' => 'number',
                ],
                'weight' => [
                    'kind' => 'number',
                ],
                'width' => [
                    'kind' => 'number',
                ],
            ],
            'required' => [
                'height',
                'length',
                'weight',
                'width',
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
