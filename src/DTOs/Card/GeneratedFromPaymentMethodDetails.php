<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Card;

/**
 * card_generated_from_payment_method_details
 */
final class GeneratedFromPaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodDetailsCardPresent $card_present;
    /**
     * The type of payment method transaction-specific details from the transaction that generated this `card` payment method. Always `card_present`.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_present' => $value instanceof \stdClass ? $this->card_present = new \StripeSDK\DTOs\Payment\MethodDetailsCardPresent($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
