<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetailsResourceShipping
 */
final class FlowsAmountDetailsResourceShipping extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'from_postal_code' => [
            'maxLength' => 5000,
        ],
        'to_postal_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If a physical good is being shipped, the cost of shipping represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). An integer greater than or equal to 0.
     */
    public ?int $amount;
    /**
     * If a physical good is being shipped, the postal code of where it is being shipped from. At most 10 alphanumeric characters long, hyphens and spaces are allowed.
     */
    public ?string $from_postal_code {
        set {
            $this->assigning('from_postal_code', $value);
            $this->from_postal_code = $value;
        }
    }
    /**
     * If a physical good is being shipped, the postal code of where it is being shipped to. At most 10 alphanumeric characters long, hyphens and spaces are allowed.
     */
    public ?string $to_postal_code {
        set {
            $this->assigning('to_postal_code', $value);
            $this->to_postal_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'from_postal_code' => $value === null || is_string($value) ? $this->from_postal_code = $value : parent::assignMember($name, $value),
            'to_postal_code' => $value === null || is_string($value) ? $this->to_postal_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
