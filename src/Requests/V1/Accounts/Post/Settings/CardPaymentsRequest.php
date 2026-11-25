<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings;

/**
 * card_payments_settings_specs
 */
final class CardPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor_prefix' => [
            'maxLength' => 10,
        ],
    ];

    public \StripeSDK\Requests\V1\Accounts\Post\Settings\CardPayments\DeclineOnRequest $decline_on;
    public string $statement_descriptor_prefix {
        set {
            $this->assigning('statement_descriptor_prefix', $value);
            $this->statement_descriptor_prefix = $value;
        }
    }
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\CardPayments\PrefixKanaRequest $statement_descriptor_prefix_kana;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\CardPayments\PrefixKanjiRequest $statement_descriptor_prefix_kanji;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'statement_descriptor_prefix' => is_string($value) ? $this->statement_descriptor_prefix = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
