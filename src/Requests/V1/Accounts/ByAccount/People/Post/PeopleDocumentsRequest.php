<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\Post;

/**
 * person_documents_specs
 *
 * Documents that may be submitted to satisfy various informational requests.
 */
final class PeopleDocumentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Documents\CompanyAuthorizationRequest $company_authorization;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Documents\DocumentsPassportRequest $passport;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Documents\DocumentsVisaRequest $visa;
}
