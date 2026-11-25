<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person\Documents;

/**
 * documents_param
 */
final class DocumentsVisaRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Tokens\Post\Person\Documents\Visa\VisaFilesCollection $files;
}
