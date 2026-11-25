<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount;

/**
 * mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount\MandateOptions\CollectionMethodEnum $collection_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount\MandateOptions\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
