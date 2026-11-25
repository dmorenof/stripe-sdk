<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingClocksResourceStatusDetailsStatusDetails
 */
final class ClocksResourceStatusDetailsStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Billing\ClocksResourceStatusDetailsAdvancingStatusDetails $advancing;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'advancing' => $value instanceof \stdClass ? $this->advancing = new \StripeSDK\DTOs\Billing\ClocksResourceStatusDetailsAdvancingStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
