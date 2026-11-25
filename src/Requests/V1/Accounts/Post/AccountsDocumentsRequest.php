<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * documents_specs
 *
 * Documents that may be submitted to satisfy various informational requests.
 */
final class AccountsDocumentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\OwnershipVerificationRequest $bank_account_ownership_verification;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\CompanyLicenseRequest $company_license;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\MemorandumAssociationRequest $company_memorandum_of_association;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\MinisterialDecreeRequest $company_ministerial_decree;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\RegistrationVerificationRequest $company_registration_verification;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\IdVerificationRequest $company_tax_id_verification;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\ProofAddressRequest $proof_of_address;
    public \StripeSDK\Requests\V1\Accounts\Post\Documents\BeneficialOwnershipRequest $proof_of_ultimate_beneficial_ownership;
}
