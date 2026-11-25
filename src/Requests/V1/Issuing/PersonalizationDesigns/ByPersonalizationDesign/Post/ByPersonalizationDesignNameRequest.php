<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\PersonalizationDesigns\ByPersonalizationDesign\Post;

final class ByPersonalizationDesignNameRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\ByPersonalizationDesignNameRequestVariant2\NameVariant2Enum::class];
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
