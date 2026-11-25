<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\FileLinks\ByLink\Post;

final class ExpiresAtRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Enums\ExpiresAtRequest2Variant1\Request2Variant1Enum::class, 'int', \StripeSDK\Enums\ExpiresAtRequest2Variant3\Request2Variant3Enum::class];
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
