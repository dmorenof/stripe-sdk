<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_ach_credit_transfer
 */
final class MethodDetailsAchCreditTransfer extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account_number' => [
            'maxLength' => 5000,
        ],
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
        'swift_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Account number to transfer funds to.
     */
    public ?string $account_number {
        set {
            $this->assigning('account_number', $value);
            $this->account_number = $value;
        }
    }
    /**
     * Name of the bank associated with the routing number.
     */
    public ?string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * Routing transit number for the bank account to transfer funds to.
     */
    public ?string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }
    /**
     * SWIFT code of the bank associated with the routing number.
     */
    public ?string $swift_code {
        set {
            $this->assigning('swift_code', $value);
            $this->swift_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_number' => $value === null || is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            'swift_code' => $value === null || is_string($value) ? $this->swift_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
