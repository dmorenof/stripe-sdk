<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_giropay
 */
final class MethodDetailsPaymentRecordGiropay extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'bank_code' => [
            'maxLength' => 5000,
        ],
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'bic' => [
            'maxLength' => 5000,
        ],
        'verified_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Bank code of bank associated with the bank account.
     */
    public ?string $bank_code {
        set {
            $this->assigning('bank_code', $value);
            $this->bank_code = $value;
        }
    }
    /**
     * Name of the bank associated with the bank account.
     */
    public ?string $bank_name {
        set {
            $this->assigning('bank_name', $value);
            $this->bank_name = $value;
        }
    }
    /**
     * Bank Identifier Code of the bank associated with the bank account.
     */
    public ?string $bic {
        set {
            $this->assigning('bic', $value);
            $this->bic = $value;
        }
    }
    /**
     * Owner's verified full name. Values are verified or provided by Giropay directly (if supported) at the time of authorization or settlement. They cannot be set or mutated. Giropay rarely provides this information so the attribute is usually empty.
     */
    public ?string $verified_name {
        set {
            $this->assigning('verified_name', $value);
            $this->verified_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'bic' => $value === null || is_string($value) ? $this->bic = $value : parent::assignMember($name, $value),
            'verified_name' => $value === null || is_string($value) ? $this->verified_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
