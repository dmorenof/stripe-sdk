<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person;

/**
 * person_documents_specs
 */
final class PersonDocumentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Tokens\Post\Person\Documents\CompanyAuthorizationRequest $company_authorization;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\Documents\DocumentsPassportRequest $passport;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\Documents\DocumentsVisaRequest $visa;
}
