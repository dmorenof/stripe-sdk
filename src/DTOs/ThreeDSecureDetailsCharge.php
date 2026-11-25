<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * three_d_secure_details_charge
 */
final class ThreeDSecureDetailsCharge extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * For authenticated transactions: how the customer was authenticated by
     * the issuing bank.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetailsCharge\AuthenticationFlowEnum $authentication_flow;
    /**
     * The Electronic Commerce Indicator (ECI). A protocol-level field
     * indicating what degree of authentication was performed.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetailsCharge\CommerceIndicatorEnum $electronic_commerce_indicator;
    /**
     * The exemption requested via 3DS and accepted by the issuer at authentication time.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetailsCharge\ExemptionIndicatorEnum $exemption_indicator;
    /**
     * Whether Stripe requested the value of `exemption_indicator` in the transaction. This will depend on
     * the outcome of Stripe's internal risk assessment.
     */
    public bool $exemption_indicator_applied;
    /**
     * Indicates the outcome of 3D Secure authentication.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetailsCharge\ResultEnum $result;
    /**
     * Additional information about why 3D Secure succeeded or failed based
     * on the `result`.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetailsCharge\ResultReasonEnum $result_reason;
    /**
     * The 3D Secure 1 XID or 3D Secure 2 Directory Server Transaction ID
     * (dsTransId) for this payment.
     */
    public ?string $transaction_id {
        set {
            $this->assigning('transaction_id', $value);
            $this->transaction_id = $value;
        }
    }
    /**
     * The version of 3D Secure that was used.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetailsCharge\VersionEnum $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authentication_flow' => $value === null || is_string($value) ? $this->authentication_flow = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetailsCharge\AuthenticationFlowEnum::from($value) : parent::assignMember($name, $value),
            'electronic_commerce_indicator' => $value === null || is_string($value) ? $this->electronic_commerce_indicator = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetailsCharge\CommerceIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'exemption_indicator' => $value === null || is_string($value) ? $this->exemption_indicator = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetailsCharge\ExemptionIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'exemption_indicator_applied' => is_bool($value) ? $this->exemption_indicator_applied = $value : parent::assignMember($name, $value),
            'result' => $value === null || is_string($value) ? $this->result = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetailsCharge\ResultEnum::from($value) : parent::assignMember($name, $value),
            'result_reason' => $value === null || is_string($value) ? $this->result_reason = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetailsCharge\ResultReasonEnum::from($value) : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            'version' => $value === null || is_string($value) ? $this->version = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetailsCharge\VersionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
