<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\ById\Post;

final class ExpiresAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Enums\ExpiresAtRequest6Variant1\Request6Variant1Enum::class, 'int', \StripeSDK\Enums\Request6Variant3Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'enum' => [
                'now',
            ],
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
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
