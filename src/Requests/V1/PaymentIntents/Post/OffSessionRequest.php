<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

final class OffSessionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['bool', \StripeSDK\Enums\SessionVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'boolean',
        ],
        [
            'kind' => 'string',
            'enum' => [
                'one_off',
                'recurring',
            ],
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
