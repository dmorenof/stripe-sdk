<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Treasury\ReceivedDebits\Post;

/**
 * source_params
 *
 * Initiating payment method details for the object.
 */
final class MethodDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Enums\V1\TestHelpers\Treasury\ReceivedDebits\Post\InitiatingPaymentMethodDetails\DetailsTypeEnum $type;
    public \StripeSDK\Requests\V1\TestHelpers\Treasury\ReceivedDebits\Post\InitiatingPaymentMethodDetails\BankAccountRequest $us_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\TestHelpers\Treasury\ReceivedDebits\Post\InitiatingPaymentMethodDetails\DetailsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
