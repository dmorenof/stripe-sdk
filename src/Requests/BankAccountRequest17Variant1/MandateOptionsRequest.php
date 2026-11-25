<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BankAccountRequest17Variant1;

/**
 * mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\BankAccountRequest17Variant1\MandateOptions\CollectionMethodEnum $collection_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\BankAccountRequest17Variant1\MandateOptions\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
