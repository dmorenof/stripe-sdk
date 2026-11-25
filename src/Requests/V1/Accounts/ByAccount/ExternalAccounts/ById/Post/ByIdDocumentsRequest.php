<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts\ById\Post;

/**
 * external_account_documents_param
 *
 * Documents that may be submitted to satisfy various informational requests.
 */
final class ByIdDocumentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\ExternalAccounts\ById\Post\Documents\OwnershipVerificationRequest $bank_account_ownership_verification;
}
