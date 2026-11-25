<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountCardPaymentsSettings
 */
final class CardPaymentsSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor_prefix' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor_prefix_kana' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor_prefix_kanji' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Account\DeclineChargeOn $decline_on;
    /**
     * The default text that appears on credit card statements when a charge is made. This field prefixes any dynamic `statement_descriptor` specified on the charge. `statement_descriptor_prefix` is useful for maximizing descriptor space for the dynamic portion.
     */
    public ?string $statement_descriptor_prefix {
        set {
            $this->assigning('statement_descriptor_prefix', $value);
            $this->statement_descriptor_prefix = $value;
        }
    }
    /**
     * The Kana variation of the default text that appears on credit card statements when a charge is made (Japan only). This field prefixes any dynamic `statement_descriptor_suffix_kana` specified on the charge. `statement_descriptor_prefix_kana` is useful for maximizing descriptor space for the dynamic portion.
     */
    public ?string $statement_descriptor_prefix_kana {
        set {
            $this->assigning('statement_descriptor_prefix_kana', $value);
            $this->statement_descriptor_prefix_kana = $value;
        }
    }
    /**
     * The Kanji variation of the default text that appears on credit card statements when a charge is made (Japan only). This field prefixes any dynamic `statement_descriptor_suffix_kanji` specified on the charge. `statement_descriptor_prefix_kanji` is useful for maximizing descriptor space for the dynamic portion.
     */
    public ?string $statement_descriptor_prefix_kanji {
        set {
            $this->assigning('statement_descriptor_prefix_kanji', $value);
            $this->statement_descriptor_prefix_kanji = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'decline_on' => $value instanceof \stdClass ? $this->decline_on = new \StripeSDK\DTOs\Account\DeclineChargeOn($value) : parent::assignMember($name, $value),
            'statement_descriptor_prefix' => $value === null || is_string($value) ? $this->statement_descriptor_prefix = $value : parent::assignMember($name, $value),
            'statement_descriptor_prefix_kana' => $value === null || is_string($value) ? $this->statement_descriptor_prefix_kana = $value : parent::assignMember($name, $value),
            'statement_descriptor_prefix_kanji' => $value === null || is_string($value) ? $this->statement_descriptor_prefix_kanji = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
