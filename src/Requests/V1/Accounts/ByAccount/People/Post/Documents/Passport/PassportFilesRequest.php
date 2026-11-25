<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Documents\Passport;

final class PassportFilesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\Enums\PassportFilesRequestVariant2\FilesVariant2Enum::class];
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
