<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\Documents;

/**
 * documents_param
 */
final class DocumentsPassportRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Accounts\ByAccount\Persons\Post\Documents\Passport\PassportFilesCollection $files;
}
