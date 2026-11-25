<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_card_present_routing
 */
final class MethodOptionsCardPresentRouting extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Requested routing priority
     */
    public ?\StripeSDK\Enums\Payment\MethodOptionsCardPresentRouting\RequestedPriorityEnum $requested_priority;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requested_priority' => $value === null || is_string($value) ? $this->requested_priority = $value === null ? null : \StripeSDK\Enums\Payment\MethodOptionsCardPresentRouting\RequestedPriorityEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
