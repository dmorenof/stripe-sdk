<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_billie
 */
final class MethodOptionsBillie extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\Payment\MethodOptionsBillie\CaptureMethodEnum $capture_method;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsBilliePaymentMethodOptionsResourceCompanyDetails $company_details;
    /**
     * An identifier or reference that this payment corresponds to.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\Payment\MethodOptionsBillie\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'company_details' => $value instanceof \stdClass ? $this->company_details = new \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsBilliePaymentMethodOptionsResourceCompanyDetails($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
