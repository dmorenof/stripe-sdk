<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * no_valid_authorization
 */
final class AuthorizationVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\ValidAuthorizationRequestVariant1\AdditionalDocumentationRequest $additional_documentation;
    public \StripeSDK\Requests\ValidAuthorizationRequestVariant1\ValidAuthorizationRequestVariant1ExplanationRequest $explanation;
}
