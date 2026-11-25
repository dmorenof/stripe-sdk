<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Post;

/**
 * person_verification_specs
 *
 * The person's verification status.
 */
final class ByPersonVerificationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Post\Verification\AdditionalDocumentRequest $additional_document;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Post\Verification\VerificationDocumentRequest $document;
}
