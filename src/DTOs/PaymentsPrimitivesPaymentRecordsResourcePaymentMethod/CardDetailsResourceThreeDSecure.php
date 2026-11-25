<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodCardDetailsResourceThreeDSecure
 */
final class CardDetailsResourceThreeDSecure extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * For authenticated transactions: Indicates how the issuing bank authenticated the customer.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\AuthenticationFlowEnum $authentication_flow;
    /**
     * The Electronic Commerce Indicator (ECI). A protocol-level field indicating what degree of authentication was performed.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\CommerceIndicatorEnum $electronic_commerce_indicator;
    /**
     * The exemption requested via 3DS and accepted by the issuer at authentication time.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\ExemptionIndicatorEnum $exemption_indicator;
    /**
     * Whether Stripe requested the value of `exemption_indicator` in the transaction. This will depend on the outcome of Stripe's internal risk assessment.
     */
    public ?bool $exemption_indicator_applied;
    /**
     * Indicates the outcome of 3D Secure authentication.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\ResultEnum $result;
    /**
     * Additional information about why 3D Secure succeeded or failed, based on the `result`.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\ResultReasonEnum $result_reason;
    /**
     * The version of 3D Secure that was used.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\VersionEnum $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authentication_flow' => $value === null || is_string($value) ? $this->authentication_flow = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\AuthenticationFlowEnum::from($value) : parent::assignMember($name, $value),
            'electronic_commerce_indicator' => $value === null || is_string($value) ? $this->electronic_commerce_indicator = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\CommerceIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'exemption_indicator' => $value === null || is_string($value) ? $this->exemption_indicator = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\ExemptionIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'exemption_indicator_applied' => $value === null || is_bool($value) ? $this->exemption_indicator_applied = $value : parent::assignMember($name, $value),
            'result' => $value === null || is_string($value) ? $this->result = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\ResultEnum::from($value) : parent::assignMember($name, $value),
            'result_reason' => $value === null || is_string($value) ? $this->result_reason = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\ResultReasonEnum::from($value) : parent::assignMember($name, $value),
            'version' => $value === null || is_string($value) ? $this->version = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure\VersionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
