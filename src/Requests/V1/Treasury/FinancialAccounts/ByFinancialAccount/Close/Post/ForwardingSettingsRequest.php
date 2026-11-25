<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close\Post;

/**
 * forwarding_settings
 *
 * A different bank account where funds can be deposited/debited in order to get the closing FA's balance to $0
 */
final class ForwardingSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    public string $financial_account;
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    public \StripeSDK\Enums\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close\Post\ForwardingSettings\SettingsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'financial_account' => is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close\Post\ForwardingSettings\SettingsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
