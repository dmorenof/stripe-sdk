<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_multibanco
 */
final class MethodDetailsPaymentRecordMultibanco extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'entity' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Entity number associated with this Multibanco payment.
     */
    public ?string $entity {
        set {
            $this->assigning('entity', $value);
            $this->entity = $value;
        }
    }
    /**
     * Reference number associated with this Multibanco payment.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'entity' => $value === null || is_string($value) ? $this->entity = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
