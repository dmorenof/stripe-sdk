<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection;

/**
 * payment_method_reuse_agreement_params
 */
final class ReuseAgreementRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'position',
    ];

    public \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection\PaymentMethodReuseAgreement\AgreementPositionEnum $position;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'position' => is_string($value) ? $this->position = \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection\PaymentMethodReuseAgreement\AgreementPositionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
