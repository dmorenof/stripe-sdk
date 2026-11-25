<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post;

/**
 * update_api_param
 *
 * If this is a `card` PaymentMethod, this hash contains the user's card details.
 */
final class ByPaymentMethodCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $exp_month;
    public int $exp_year;
    public \StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post\Card\CardNetworksRequest $networks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
