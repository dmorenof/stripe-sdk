<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\Post\CarrierText;

final class HeaderTitleRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\HeaderTitleRequestVariant2\TitleVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 30,
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
