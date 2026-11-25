<?php

declare(strict_types=1);

namespace StripeSDK\Requests\AsDescribedRequest4Variant1;

final class AdditionalDocumentationRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\AdditionalDocumentationRequest16Variant2\Request16Variant2Enum::class];
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
