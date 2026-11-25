<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceReceiverFlow
 */
final class ReceiverFlow extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_charged',
        'amount_received',
        'amount_returned',
        'refund_attributes_method',
        'refund_attributes_status',
    ];

    protected const array VALIDATION = [
        'address' => [
            'maxLength' => 5000,
        ],
        'refund_attributes_method' => [
            'maxLength' => 5000,
        ],
        'refund_attributes_status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The address of the receiver source. This is the value that should be communicated to the customer to send their funds to.
     */
    public ?string $address {
        set {
            $this->assigning('address', $value);
            $this->address = $value;
        }
    }
    /**
     * The total amount that was moved to your balance. This is almost always equal to the amount charged. In rare cases when customers deposit excess funds and we are unable to refund those, those funds get moved to your balance and show up in amount_charged as well. The amount charged is expressed in the source's currency.
     */
    public int $amount_charged;
    /**
     * The total amount received by the receiver source. `amount_received = amount_returned + amount_charged` should be true for consumed sources unless customers deposit excess funds. The amount received is expressed in the source's currency.
     */
    public int $amount_received;
    /**
     * The total amount that was returned to the customer. The amount returned is expressed in the source's currency.
     */
    public int $amount_returned;
    /**
     * Type of refund attribute method, one of `email`, `manual`, or `none`.
     */
    public string $refund_attributes_method {
        set {
            $this->assigning('refund_attributes_method', $value);
            $this->refund_attributes_method = $value;
        }
    }
    /**
     * Type of refund attribute status, one of `missing`, `requested`, or `available`.
     */
    public string $refund_attributes_status {
        set {
            $this->assigning('refund_attributes_status', $value);
            $this->refund_attributes_status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'amount_charged' => is_int($value) ? $this->amount_charged = $value : parent::assignMember($name, $value),
            'amount_received' => is_int($value) ? $this->amount_received = $value : parent::assignMember($name, $value),
            'amount_returned' => is_int($value) ? $this->amount_returned = $value : parent::assignMember($name, $value),
            'refund_attributes_method' => is_string($value) ? $this->refund_attributes_method = $value : parent::assignMember($name, $value),
            'refund_attributes_status' => is_string($value) ? $this->refund_attributes_status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
