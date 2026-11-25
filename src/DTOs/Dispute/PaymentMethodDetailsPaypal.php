<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputePaymentMethodDetailsPaypal
 */
final class PaymentMethodDetailsPaypal extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'case_id' => [
            'maxLength' => 5000,
        ],
        'reason_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the dispute in PayPal.
     */
    public ?string $case_id {
        set {
            $this->assigning('case_id', $value);
            $this->case_id = $value;
        }
    }
    /**
     * The reason for the dispute as defined by PayPal
     */
    public ?string $reason_code {
        set {
            $this->assigning('reason_code', $value);
            $this->reason_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'case_id' => $value === null || is_string($value) ? $this->case_id = $value : parent::assignMember($name, $value),
            'reason_code' => $value === null || is_string($value) ? $this->reason_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
