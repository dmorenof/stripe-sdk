<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\FundingInstructionsBankTransfer;

/**
 * IbanRecord
 *
 * Iban Records contain E.U. bank account details per the SEPA format.
 */
final class IbanRecord extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder_address',
        'account_holder_name',
        'bank_address',
        'bic',
        'country',
        'iban',
    ];

    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'bic' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'iban' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $account_holder_address;
    /**
     * The name of the person or business that owns the bank account
     */
    public string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    public \StripeSDK\DTOs\Address $bank_address;
    /**
     * The BIC/SWIFT code of the account.
     */
    public string $bic {
        set {
            $this->assigning('bic', $value);
            $this->bic = $value;
        }
    }
    /**
     * Two-letter country code ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * The IBAN of the account.
     */
    public string $iban {
        set {
            $this->assigning('iban', $value);
            $this->iban = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_address' => $value instanceof \stdClass ? $this->account_holder_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'bank_address' => $value instanceof \stdClass ? $this->bank_address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'bic' => is_string($value) ? $this->bic = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'iban' => is_string($value) ? $this->iban = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
