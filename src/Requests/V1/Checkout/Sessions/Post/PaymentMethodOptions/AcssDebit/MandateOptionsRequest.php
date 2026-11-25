<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit;

/**
 * mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'interval_description' => [
            'maxLength' => 500,
        ],
    ];

    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptions\MandateUrlRequest $custom_mandate_url;
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptions\DefaultForCollection $default_for;
    public string $interval_description {
        set {
            $this->assigning('interval_description', $value);
            $this->interval_description = $value;
        }
    }
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptions\PaymentScheduleEnum $payment_schedule;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptions\TransactionTypeEnum $transaction_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval_description' => is_string($value) ? $this->interval_description = $value : parent::assignMember($name, $value),
            'payment_schedule' => is_string($value) ? $this->payment_schedule = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptions\PaymentScheduleEnum::from($value) : parent::assignMember($name, $value),
            'transaction_type' => is_string($value) ? $this->transaction_type = \StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit\MandateOptions\TransactionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
