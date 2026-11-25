<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings;

/**
 * payments_settings_specs
 */
final class SettingsPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_kana' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_kanji' => [
            'maxLength' => 22,
        ],
    ];

    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    public string $statement_descriptor_kana {
        set {
            $this->assigning('statement_descriptor_kana', $value);
            $this->statement_descriptor_kana = $value;
        }
    }
    public string $statement_descriptor_kanji {
        set {
            $this->assigning('statement_descriptor_kanji', $value);
            $this->statement_descriptor_kanji = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_kana' => is_string($value) ? $this->statement_descriptor_kana = $value : parent::assignMember($name, $value),
            'statement_descriptor_kanji' => is_string($value) ? $this->statement_descriptor_kanji = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
