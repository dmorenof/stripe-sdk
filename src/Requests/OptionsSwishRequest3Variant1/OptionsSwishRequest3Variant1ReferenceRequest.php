<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsSwishRequest3Variant1;

final class OptionsSwishRequest3Variant1ReferenceRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\OptionsSwishRequest3Variant1ReferenceRequestVariant2\ReferenceVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
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
