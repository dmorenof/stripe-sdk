<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post;

final class ByConfigurationOfflineRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByConfigurationOfflineRequestVariant1\OfflineVariant1Request::class, \StripeSDK\Enums\ByConfigurationOfflineRequestVariant2\OfflineVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
            ],
            'required' => [
                'enabled',
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
