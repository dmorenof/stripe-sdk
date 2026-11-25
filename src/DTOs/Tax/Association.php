<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Tax;

/**
 * Tax Association
 *
 * A Tax Association exposes the Tax Transactions that Stripe attempted to create on your behalf based on the PaymentIntent input
 */
final class Association extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'calculation',
        'id',
        'object_',
        'payment_intent',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'calculation' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'payment_intent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The [Tax Calculation](https://docs.stripe.com/api/tax/calculations/object) that was included in PaymentIntent.
     */
    public string $calculation {
        set {
            $this->assigning('calculation', $value);
            $this->calculation = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Tax\Association\ObjectEnum $object_;
    /**
     * The [PaymentIntent](https://docs.stripe.com/api/payment_intents/object) that this Tax Association is tracking.
     */
    public string $payment_intent {
        set {
            $this->assigning('payment_intent', $value);
            $this->payment_intent = $value;
        }
    }
    /**
     * Information about the tax transactions linked to this payment intent
     */
    public ?\StripeSDK\Collections\Tax\Association\TransactionAttemptsCollection $tax_transaction_attempts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'calculation' => is_string($value) ? $this->calculation = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Tax\Association\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_intent' => is_string($value) ? $this->payment_intent = $value : parent::assignMember($name, $value),
            'tax_transaction_attempts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->tax_transaction_attempts = $value === null ? null : new \StripeSDK\Collections\Tax\Association\TransactionAttemptsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttempts::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
