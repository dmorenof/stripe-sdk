<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post;

/**
 * documents_specs_update
 *
 * Documents that may be submitted to satisfy various informational requests.
 */
final class ByAccountDocumentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\OwnershipVerificationRequest $bank_account_ownership_verification;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\CompanyLicenseRequest $company_license;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\MemorandumAssociationRequest $company_memorandum_of_association;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\MinisterialDecreeRequest $company_ministerial_decree;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\RegistrationVerificationRequest $company_registration_verification;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\IdVerificationRequest $company_tax_id_verification;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\ProofAddressRequest $proof_of_address;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\ProofRegistrationRequest $proof_of_registration;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Documents\BeneficialOwnershipRequest $proof_of_ultimate_beneficial_ownership;
}
