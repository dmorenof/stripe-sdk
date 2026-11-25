<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CardPresentRequest3Variant1;

/**
 * routing_payment_method_options_param
 */
final class CardPresentRequest3Variant1RoutingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\CardPresentRequest3Variant1\Routing\RequestedPriorityEnum $requested_priority;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requested_priority' => is_string($value) ? $this->requested_priority = \StripeSDK\Enums\CardPresentRequest3Variant1\Routing\RequestedPriorityEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
