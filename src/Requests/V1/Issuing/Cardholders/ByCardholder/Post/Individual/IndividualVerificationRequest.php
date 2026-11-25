<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual;

/**
 * person_verification_param
 */
final class IndividualVerificationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual\Verification\VerificationDocumentRequest $document;
}
