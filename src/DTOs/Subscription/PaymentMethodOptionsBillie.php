<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * subscription_payment_method_options_billie
 */
final class PaymentMethodOptionsBillie extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Subscription\PaymentMethodOptionsBillieCompanyDetails $company_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'company_details' => $value instanceof \stdClass ? $this->company_details = new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsBillieCompanyDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
