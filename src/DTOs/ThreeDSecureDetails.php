<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * three_d_secure_details
 */
final class ThreeDSecureDetails extends \Dmorenof\SdkRuntime\DTO
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
    public ?\StripeSDK\Enums\ThreeDSecureDetails\AuthenticationFlowEnum $authentication_flow;
    /**
     * The Electronic Commerce Indicator (ECI). A protocol-level field
     * indicating what degree of authentication was performed.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetails\CommerceIndicatorEnum $electronic_commerce_indicator;
    /**
     * Indicates the outcome of 3D Secure authentication.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetails\ResultEnum $result;
    /**
     * Additional information about why 3D Secure succeeded or failed based
     * on the `result`.
     */
    public ?\StripeSDK\Enums\ThreeDSecureDetails\ResultReasonEnum $result_reason;
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
    public ?\StripeSDK\Enums\ThreeDSecureDetails\VersionEnum $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authentication_flow' => $value === null || is_string($value) ? $this->authentication_flow = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetails\AuthenticationFlowEnum::from($value) : parent::assignMember($name, $value),
            'electronic_commerce_indicator' => $value === null || is_string($value) ? $this->electronic_commerce_indicator = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetails\CommerceIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'result' => $value === null || is_string($value) ? $this->result = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetails\ResultEnum::from($value) : parent::assignMember($name, $value),
            'result_reason' => $value === null || is_string($value) ? $this->result_reason = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetails\ResultReasonEnum::from($value) : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            'version' => $value === null || is_string($value) ? $this->version = $value === null ? null : \StripeSDK\Enums\ThreeDSecureDetails\VersionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
