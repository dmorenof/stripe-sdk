<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Individual;

/**
 * person_verification_specs
 */
final class IndividualVerificationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Individual\Verification\AdditionalDocumentRequest $additional_document;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Individual\Verification\VerificationDocumentRequest $document;
}
