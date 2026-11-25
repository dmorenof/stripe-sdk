<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\Post;

final class QuotesDescriptionRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\QuotesDescriptionRequestVariant2\DescriptionVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 500,
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
