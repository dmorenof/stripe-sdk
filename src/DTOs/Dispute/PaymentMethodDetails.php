<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputePaymentMethodDetails
 */
final class PaymentMethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Dispute\PaymentMethodDetailsAmazonPay $amazon_pay;
    public \StripeSDK\DTOs\Dispute\PaymentMethodDetailsCard $card;
    public \StripeSDK\DTOs\Dispute\PaymentMethodDetailsKlarna $klarna;
    public \StripeSDK\DTOs\Dispute\PaymentMethodDetailsPaypal $paypal;
    /**
     * Payment method type.
     */
    public \StripeSDK\Enums\Dispute\PaymentMethodDetails\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amazon_pay' => $value instanceof \stdClass ? $this->amazon_pay = new \StripeSDK\DTOs\Dispute\PaymentMethodDetailsAmazonPay($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Dispute\PaymentMethodDetailsCard($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Dispute\PaymentMethodDetailsKlarna($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Dispute\PaymentMethodDetailsPaypal($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Dispute\PaymentMethodDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
