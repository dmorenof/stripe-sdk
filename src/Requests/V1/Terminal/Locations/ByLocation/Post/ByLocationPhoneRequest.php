<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Locations\ByLocation\Post;

final class ByLocationPhoneRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\ByLocationPhoneRequestVariant2\PhoneVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
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
