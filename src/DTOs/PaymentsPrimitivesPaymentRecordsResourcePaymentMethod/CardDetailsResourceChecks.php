<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * PaymentsPrimitivesPaymentRecordsResourcePaymentMethodCardDetailsResourceChecks
 */
final class CardDetailsResourceChecks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If you provide a value for `address.line1`, the check result is one of `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks\Line1CheckEnum $address_line1_check;
    /**
     * If you provide a address postal code, the check result is one of `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks\CodeCheckEnum $address_postal_code_check;
    /**
     * If you provide a CVC, the check results is one of `pass`, `fail`, `unavailable`, or `unchecked`.
     */
    public ?\StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks\CvcCheckEnum $cvc_check;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1_check' => $value === null || is_string($value) ? $this->address_line1_check = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks\Line1CheckEnum::from($value) : parent::assignMember($name, $value),
            'address_postal_code_check' => $value === null || is_string($value) ? $this->address_postal_code_check = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks\CodeCheckEnum::from($value) : parent::assignMember($name, $value),
            'cvc_check' => $value === null || is_string($value) ? $this->cvc_check = $value === null ? null : \StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceChecks\CvcCheckEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
