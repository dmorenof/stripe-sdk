<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationVerificationData
 */
final class AuthorizationVerificationData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address_line1_check',
        'address_postal_code_check',
        'cvc_check',
        'expiry_check',
    ];

    protected const array VALIDATION = [
        'postal_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the cardholder provided an address first line and if it matched the cardholder’s `billing.address.line1`.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationVerificationData\Line1CheckEnum $address_line1_check;
    /**
     * Whether the cardholder provided a postal code and if it matched the cardholder’s `billing.address.postal_code`.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationVerificationData\CodeCheckEnum $address_postal_code_check;
    /**
     * The exemption applied to this authorization.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationAuthenticationExemption $authentication_exemption;
    /**
     * Whether the cardholder provided a CVC and if it matched Stripe’s record.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationVerificationData\CvcCheckEnum $cvc_check;
    /**
     * Whether the cardholder provided an expiry date and if it matched Stripe’s record.
     */
    public \StripeSDK\Enums\Issuing\AuthorizationVerificationData\ExpiryCheckEnum $expiry_check;
    /**
     * The postal code submitted as part of the authorization used for postal code verification.
     */
    public ?string $postal_code {
        set {
            $this->assigning('postal_code', $value);
            $this->postal_code = $value;
        }
    }
    /**
     * 3D Secure details.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationThreeDSecure $three_d_secure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1_check' => is_string($value) ? $this->address_line1_check = \StripeSDK\Enums\Issuing\AuthorizationVerificationData\Line1CheckEnum::from($value) : parent::assignMember($name, $value),
            'address_postal_code_check' => is_string($value) ? $this->address_postal_code_check = \StripeSDK\Enums\Issuing\AuthorizationVerificationData\CodeCheckEnum::from($value) : parent::assignMember($name, $value),
            'authentication_exemption' => $value === null || $value instanceof \stdClass ? $this->authentication_exemption = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationAuthenticationExemption($value) : parent::assignMember($name, $value),
            'cvc_check' => is_string($value) ? $this->cvc_check = \StripeSDK\Enums\Issuing\AuthorizationVerificationData\CvcCheckEnum::from($value) : parent::assignMember($name, $value),
            'expiry_check' => is_string($value) ? $this->expiry_check = \StripeSDK\Enums\Issuing\AuthorizationVerificationData\ExpiryCheckEnum::from($value) : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'three_d_secure' => $value === null || $value instanceof \stdClass ? $this->three_d_secure = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationThreeDSecure($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
