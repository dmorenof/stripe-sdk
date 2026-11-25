<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\Post;

/**
 * person_verification_specs
 *
 * The person's verification status.
 */
final class PeopleVerificationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Verification\AdditionalDocumentRequest $additional_document;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Verification\VerificationDocumentRequest $document;
}
