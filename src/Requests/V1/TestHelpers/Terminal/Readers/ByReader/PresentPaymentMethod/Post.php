<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Simulated on-reader tip amount.
     */
    public int $amount_tip;
    /**
     * Simulated data for the card payment method.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post\PresentPaymentMethodCardRequest $card;
    /**
     * Simulated data for the card_present payment method.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post\CardPresentRequest $card_present;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Simulated data for the interac_present payment method.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post\InteracPresentRequest $interac_present;
    /**
     * Simulated payment type.
     */
    public \StripeSDK\Enums\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post\PresentPaymentMethodTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_tip' => is_int($value) ? $this->amount_tip = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post\PresentPaymentMethodTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
