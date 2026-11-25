<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Documents;

/**
 * documents_param
 */
final class CompanyAuthorizationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Accounts\ByAccount\People\Post\Documents\CompanyAuthorization\AuthorizationFilesCollection $files;
}
