<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Card;

/**
 * card_mandate_payment_method_details
 */
final class MandatePaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Card\MandatePaymentMethodDetailsIndia $india;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'india' => $value instanceof \stdClass ? $this->india = new \StripeSDK\DTOs\Card\MandatePaymentMethodDetailsIndia($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
