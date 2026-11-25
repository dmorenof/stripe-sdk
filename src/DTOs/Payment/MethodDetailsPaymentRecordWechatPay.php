<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_wechat_pay
 */
final class MethodDetailsPaymentRecordWechatPay extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'location' => [
            'maxLength' => 5000,
        ],
        'reader' => [
            'maxLength' => 5000,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Uniquely identifies this particular WeChat Pay account. You can use this attribute to check whether two WeChat accounts are the same.
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * ID of the [location](https://docs.stripe.com/api/terminal/locations) that this transaction's reader is assigned to.
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }
    /**
     * ID of the [reader](https://docs.stripe.com/api/terminal/readers) this transaction was made on.
     */
    public string $reader {
        set {
            $this->assigning('reader', $value);
            $this->reader = $value;
        }
    }
    /**
     * Transaction ID of this particular WeChat Pay transaction.
     */
    public ?string $transaction_id {
        set {
            $this->assigning('transaction_id', $value);
            $this->transaction_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'reader' => is_string($value) ? $this->reader = $value : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
