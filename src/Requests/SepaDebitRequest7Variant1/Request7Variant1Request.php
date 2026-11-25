<?php

declare(strict_types=1);

namespace StripeSDK\Requests\SepaDebitRequest7Variant1;

/**
 * payment_intent_payment_method_options_param
 */
final class Request7Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'target_date' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\SepaDebitRequest7Variant1\MandateOptionsRequest $mandate_options;
    public \StripeSDK\Enums\SepaDebitRequest7Variant1\FutureUsageEnum $setup_future_usage;
    public string $target_date {
        set {
            $this->assigning('target_date', $value);
            $this->target_date = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\SepaDebitRequest7Variant1\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'target_date' => is_string($value) ? $this->target_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
