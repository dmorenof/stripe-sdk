<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPaymentDetails
 */
final class FlowsPaymentDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer_reference' => [
            'maxLength' => 5000,
        ],
        'order_reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A unique value to identify the customer. This field is available only for card payments.
     *
     * This field is truncated to 25 alphanumeric characters, excluding spaces, before being sent to card networks.
     */
    public ?string $customer_reference {
        set {
            $this->assigning('customer_reference', $value);
            $this->customer_reference = $value;
        }
    }
    /**
     * A unique value assigned by the business to identify the transaction. Required for L2 and L3 rates.
     *
     * For Cards, this field is truncated to 25 alphanumeric characters, excluding spaces, before being sent to card networks. For Klarna, this field is truncated to 255 characters and is visible to customers when they view the order in the Klarna app.
     */
    public ?string $order_reference {
        set {
            $this->assigning('order_reference', $value);
            $this->order_reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer_reference' => $value === null || is_string($value) ? $this->customer_reference = $value : parent::assignMember($name, $value),
            'order_reference' => $value === null || is_string($value) ? $this->order_reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
