<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EvidenceOtherRequest2Variant1;

final class AdditionalDocumentationRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\AdditionalDocumentationRequest15Variant2\Request15Variant2Enum::class];
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
