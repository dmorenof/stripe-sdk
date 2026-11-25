<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetailsResourceError
 */
final class FlowsAmountDetailsResourceError extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The code of the error that occurred when validating the current amount details.
     */
    public ?\StripeSDK\Enums\Payment\FlowsAmountDetailsResourceError\CodeEnum $code;
    /**
     * A message providing more details about the error.
     */
    public ?string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => $value === null || is_string($value) ? $this->code = $value === null ? null : \StripeSDK\Enums\Payment\FlowsAmountDetailsResourceError\CodeEnum::from($value) : parent::assignMember($name, $value),
            'message' => $value === null || is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
