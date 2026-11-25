<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequest7Variant1;

final class SuffixKanjiRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\SuffixKanjiRequest3Variant2\Request3Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 17,
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
