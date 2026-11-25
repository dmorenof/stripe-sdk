<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person;

/**
 * person_verification_specs
 */
final class PersonVerificationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Tokens\Post\Person\Verification\AdditionalDocumentRequest $additional_document;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\Verification\VerificationDocumentRequest $document;
}
