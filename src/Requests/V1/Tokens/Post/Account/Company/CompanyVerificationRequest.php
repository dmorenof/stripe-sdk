<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Account\Company;

/**
 * verification_specs
 */
final class CompanyVerificationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Tokens\Post\Account\Company\Verification\VerificationDocumentRequest $document;
}
