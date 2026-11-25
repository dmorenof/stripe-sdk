<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

/**
 * consent_collection_params
 *
 * Configure fields to gather active consent from customers.
 */
final class ConsentCollectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection\ReuseAgreementRequest $payment_method_reuse_agreement;
    public \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection\CollectionPromotionsEnum $promotions;
    public \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection\TermsServiceEnum $terms_of_service;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'promotions' => is_string($value) ? $this->promotions = \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection\CollectionPromotionsEnum::from($value) : parent::assignMember($name, $value),
            'terms_of_service' => is_string($value) ? $this->terms_of_service = \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\ConsentCollection\TermsServiceEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
