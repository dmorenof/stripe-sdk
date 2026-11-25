<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\CarrierText;

final class HeaderBodyRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\HeaderBodyRequestVariant2\BodyVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 200,
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
