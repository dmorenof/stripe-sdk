<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person\Documents\CompanyAuthorization;

final class AuthorizationFilesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\AuthorizationFilesRequest5Variant2\Request5Variant2Enum::class];
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
