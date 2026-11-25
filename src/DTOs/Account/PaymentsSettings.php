<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountPaymentsSettings
 */
final class PaymentsSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor_kana' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor_kanji' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The default text that appears on credit card statements when a charge is made. This field prefixes any dynamic `statement_descriptor` specified on the charge.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * The Kana variation of `statement_descriptor` used for charges in Japan. Japanese statement descriptors have [special requirements](https://docs.stripe.com/get-started/account/statement-descriptors#set-japanese-statement-descriptors).
     */
    public ?string $statement_descriptor_kana {
        set {
            $this->assigning('statement_descriptor_kana', $value);
            $this->statement_descriptor_kana = $value;
        }
    }
    /**
     * The Kanji variation of `statement_descriptor` used for charges in Japan. Japanese statement descriptors have [special requirements](https://docs.stripe.com/get-started/account/statement-descriptors#set-japanese-statement-descriptors).
     */
    public ?string $statement_descriptor_kanji {
        set {
            $this->assigning('statement_descriptor_kanji', $value);
            $this->statement_descriptor_kanji = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_kana' => $value === null || is_string($value) ? $this->statement_descriptor_kana = $value : parent::assignMember($name, $value),
            'statement_descriptor_kanji' => $value === null || is_string($value) ? $this->statement_descriptor_kanji = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
