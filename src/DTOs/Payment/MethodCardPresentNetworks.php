<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_card_present_networks
 */
final class MethodCardPresentNetworks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'available',
    ];

    protected const array VALIDATION = [
        'preferred' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * All networks available for selection via [payment_method_options.card.network](/api/payment_intents/confirm#confirm_payment_intent-payment_method_options-card-network).
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $available;
    /**
     * The preferred network for the card.
     */
    public ?string $preferred {
        set {
            $this->assigning('preferred', $value);
            $this->preferred = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->available = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'preferred' => $value === null || is_string($value) ? $this->preferred = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
