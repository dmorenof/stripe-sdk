<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ValidAuthorizationRequest2Variant1;

final class AdditionalDocumentationRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\AdditionalDocumentationRequest13Variant2\Request13Variant2Enum::class];
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
