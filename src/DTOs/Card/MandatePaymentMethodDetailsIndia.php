<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Card;

/**
 * card_mandate_payment_method_details_india
 */
final class MandatePaymentMethodDetailsIndia extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The reason why the mandate has an `inactive` status. This field is only populated if the mandate is inactive.
     */
    public ?\StripeSDK\Enums\Card\MandatePaymentMethodDetailsIndia\InactiveReasonEnum $inactive_reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inactive_reason' => $value === null || is_string($value) ? $this->inactive_reason = $value === null ? null : \StripeSDK\Enums\Card\MandatePaymentMethodDetailsIndia\InactiveReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
