<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Account\Individual;

/**
 * person_verification_specs
 */
final class IndividualVerificationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Tokens\Post\Account\Individual\Verification\AdditionalDocumentRequest $additional_document;
    public \StripeSDK\Requests\V1\Tokens\Post\Account\Individual\Verification\VerificationDocumentRequest $document;
}
