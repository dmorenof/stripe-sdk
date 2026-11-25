<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Mandate
 *
 * A Mandate is a record of the permission that your customer gives you to debit their payment method.
 */
final class Mandate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer_acceptance',
        'id',
        'livemode',
        'object_',
        'payment_method',
        'payment_method_details',
        'status',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'on_behalf_of' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Customer\Acceptance $customer_acceptance;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    public \StripeSDK\DTOs\Mandate\MultiUse $multi_use;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Mandate\ObjectEnum $object_;
    /**
     * The account (if any) that the mandate is intended for.
     */
    public string $on_behalf_of {
        set {
            $this->assigning('on_behalf_of', $value);
            $this->on_behalf_of = $value;
        }
    }
    /**
     * ID of the payment method associated with this mandate.
     */
    public \StripeSDK\DTOs\Mandate\PaymentMethodDTO $payment_method;
    public \StripeSDK\DTOs\Mandate\PaymentMethodDetails $payment_method_details;
    public \StripeSDK\DTOs\Mandate\SingleUse $single_use;
    /**
     * The mandate status indicates whether or not you can use it to initiate a payment.
     */
    public \StripeSDK\Enums\Mandate\StatusEnum $status;
    /**
     * The type of the mandate.
     */
    public \StripeSDK\Enums\Mandate\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_acceptance' => $value instanceof \stdClass ? $this->customer_acceptance = new \StripeSDK\DTOs\Customer\Acceptance($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'multi_use' => $value instanceof \stdClass ? $this->multi_use = new \StripeSDK\DTOs\Mandate\MultiUse($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Mandate\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'payment_method_details' => $value instanceof \stdClass ? $this->payment_method_details = new \StripeSDK\DTOs\Mandate\PaymentMethodDetails($value) : parent::assignMember($name, $value),
            'single_use' => $value instanceof \stdClass ? $this->single_use = new \StripeSDK\DTOs\Mandate\SingleUse($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Mandate\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Mandate\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
