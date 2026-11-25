<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * inbound_transfers_payment_method_details_us_bank_account
 */
final class InboundTransfersPaymentMethodDetailsUsBankAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'network',
    ];

    protected const array VALIDATION = [
        'bank_name' => [
            'maxLength' => 5000,
        ],
        'fingerprint' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'routing_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Account holder type: individual or company.
     */
    public ?\StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount\HolderTypeEnum $account_holder_type;
    /**
     * Account type: checkings or savings. Defaults to checking if omitted.
     */
    public ?\StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount\AccountTypeEnum $account_type;
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
     * Uniquely identifies this particular bank account. You can use this attribute to check whether two bank accounts are the same.
     */
    public ?string $fingerprint {
        set {
            $this->assigning('fingerprint', $value);
            $this->fingerprint = $value;
        }
    }
    /**
     * Last four digits of the bank account number.
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * ID of the mandate used to make this payment.
     */
    public \StripeSDK\DTOs\InboundTransfersPaymentMethodDetailsUsBankAccount\MandateDTO $mandate;
    /**
     * The network rails used. See the [docs](https://docs.stripe.com/treasury/money-movement/timelines) to learn more about money movement timelines for each network type.
     */
    public \StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount\NetworkEnum $network;
    /**
     * Routing number of the bank account.
     */
    public ?string $routing_number {
        set {
            $this->assigning('routing_number', $value);
            $this->routing_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_type' => $value === null || is_string($value) ? $this->account_holder_type = $value === null ? null : \StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'account_type' => $value === null || is_string($value) ? $this->account_type = $value === null ? null : \StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount\AccountTypeEnum::from($value) : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'fingerprint' => $value === null || is_string($value) ? $this->fingerprint = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount\NetworkEnum::from($value) : parent::assignMember($name, $value),
            'routing_number' => $value === null || is_string($value) ? $this->routing_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
