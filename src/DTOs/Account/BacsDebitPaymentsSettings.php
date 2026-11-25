<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountBacsDebitPaymentsSettings
 */
final class BacsDebitPaymentsSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
        'service_user_number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Bacs Direct Debit display name for this account. For payments made with Bacs Direct Debit, this name appears on the mandate as the statement descriptor. Mobile banking apps display it as the name of the business. To use custom branding, set the Bacs Direct Debit Display Name during or right after creation. Custom branding incurs an additional monthly fee for the platform. The fee appears 5 business days after requesting Bacs. If you don't set the display name before requesting Bacs capability, it's automatically set as "Stripe" and the account is onboarded to Stripe branding, which is free.
     */
    public ?string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The Bacs Direct Debit Service user number for this account. For payments made with Bacs Direct Debit, this number is a unique identifier of the account with our banking partners.
     */
    public ?string $service_user_number {
        set {
            $this->assigning('service_user_number', $value);
            $this->service_user_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => $value === null || is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'service_user_number' => $value === null || is_string($value) ? $this->service_user_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
