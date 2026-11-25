<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\Post;

final class ChargesDestinationRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DestinationVariant1Request::class, 'string'];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'account' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'amount' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'account',
            ],
        ],
        [
            'kind' => 'string',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
