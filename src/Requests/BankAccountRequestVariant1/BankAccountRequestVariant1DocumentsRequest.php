<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BankAccountRequestVariant1;

/**
 * external_account_documents_param
 */
final class BankAccountRequestVariant1DocumentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\BankAccountRequestVariant1\Documents\OwnershipVerificationRequest $bank_account_ownership_verification;
}
