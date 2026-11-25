<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post;

/**
 * person_documents_specs
 *
 * Documents that may be submitted to satisfy various informational requests.
 */
final class PersonsDocumentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\Documents\CompanyAuthorizationRequest $company_authorization;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\Documents\DocumentsPassportRequest $passport;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Persons\Post\Documents\DocumentsVisaRequest $visa;
}
