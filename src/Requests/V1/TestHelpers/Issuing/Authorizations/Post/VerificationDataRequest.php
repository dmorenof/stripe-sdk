<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post;

/**
 * verification_data_specs
 *
 * Verifications that Stripe performed on information that the cardholder provided to the merchant.
 */
final class VerificationDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\Line1CheckEnum $address_line1_check;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\CodeCheckEnum $address_postal_code_check;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\AuthenticationExemptionRequest $authentication_exemption;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\CvcCheckEnum $cvc_check;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\ExpiryCheckEnum $expiry_check;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\DSecureRequest $three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1_check' => is_string($value) ? $this->address_line1_check = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\Line1CheckEnum::from($value) : parent::assignMember($name, $value),
            'address_postal_code_check' => is_string($value) ? $this->address_postal_code_check = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\CodeCheckEnum::from($value) : parent::assignMember($name, $value),
            'cvc_check' => is_string($value) ? $this->cvc_check = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\CvcCheckEnum::from($value) : parent::assignMember($name, $value),
            'expiry_check' => is_string($value) ? $this->expiry_check = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\ExpiryCheckEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
