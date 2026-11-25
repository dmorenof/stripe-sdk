<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputePaymentMethodDetailsKlarna
 */
final class PaymentMethodDetailsKlarna extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'chargeback_loss_reason_code' => [
            'maxLength' => 5000,
        ],
        'reason_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Chargeback loss reason mapped by Stripe from Klarna's chargeback loss reason
     */
    public string $chargeback_loss_reason_code {
        set {
            $this->assigning('chargeback_loss_reason_code', $value);
            $this->chargeback_loss_reason_code = $value;
        }
    }
    /**
     * The reason for the dispute as defined by Klarna
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
            'chargeback_loss_reason_code' => is_string($value) ? $this->chargeback_loss_reason_code = $value : parent::assignMember($name, $value),
            'reason_code' => $value === null || is_string($value) ? $this->reason_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
