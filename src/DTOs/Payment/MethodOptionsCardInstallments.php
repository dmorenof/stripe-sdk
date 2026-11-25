<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_options_card_installments
 */
final class MethodOptionsCardInstallments extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    /**
     * Installment plans that may be selected for this PaymentIntent.
     */
    public ?\StripeSDK\Collections\Payment\MethodOptionsCardInstallments\AvailablePlansCollection $available_plans;
    /**
     * Whether Installments are enabled for this PaymentIntent.
     */
    public bool $enabled;
    /**
     * Installment plan selected for this PaymentIntent.
     */
    public ?\StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan $plan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available_plans' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->available_plans = $value === null ? null : new \StripeSDK\Collections\Payment\MethodOptionsCardInstallments\AvailablePlansCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan::class)) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'plan' => $value === null || $value instanceof \stdClass ? $this->plan = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodDetailsCardInstallmentsPlan($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
