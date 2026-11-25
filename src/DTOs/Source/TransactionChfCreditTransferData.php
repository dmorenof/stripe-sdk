<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceTransactionChfCreditTransferData
 */
final class TransactionChfCreditTransferData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
        'sender_address_country' => [
            'maxLength' => 5000,
        ],
        'sender_address_line1' => [
            'maxLength' => 5000,
        ],
        'sender_iban' => [
            'maxLength' => 5000,
        ],
        'sender_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Reference associated with the transfer.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Sender's country address.
     */
    public string $sender_address_country {
        set {
            $this->assigning('sender_address_country', $value);
            $this->sender_address_country = $value;
        }
    }
    /**
     * Sender's line 1 address.
     */
    public string $sender_address_line1 {
        set {
            $this->assigning('sender_address_line1', $value);
            $this->sender_address_line1 = $value;
        }
    }
    /**
     * Sender's bank account IBAN.
     */
    public string $sender_iban {
        set {
            $this->assigning('sender_iban', $value);
            $this->sender_iban = $value;
        }
    }
    /**
     * Sender's name.
     */
    public string $sender_name {
        set {
            $this->assigning('sender_name', $value);
            $this->sender_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'sender_address_country' => is_string($value) ? $this->sender_address_country = $value : parent::assignMember($name, $value),
            'sender_address_line1' => is_string($value) ? $this->sender_address_line1 = $value : parent::assignMember($name, $value),
            'sender_iban' => is_string($value) ? $this->sender_iban = $value : parent::assignMember($name, $value),
            'sender_name' => is_string($value) ? $this->sender_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
