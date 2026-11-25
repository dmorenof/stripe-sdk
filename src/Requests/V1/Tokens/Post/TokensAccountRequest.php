<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post;

/**
 * connect_js_account_token_specs
 *
 * Information for the account this token represents.
 */
final class TokensAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Tokens\Post\Account\BusinessTypeEnum $business_type;
    public \StripeSDK\Requests\V1\Tokens\Post\Account\AccountCompanyRequest $company;
    public \StripeSDK\Requests\V1\Tokens\Post\Account\AccountIndividualRequest $individual;
    public bool $tos_shown_and_accepted;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'business_type' => is_string($value) ? $this->business_type = \StripeSDK\Enums\V1\Tokens\Post\Account\BusinessTypeEnum::from($value) : parent::assignMember($name, $value),
            'tos_shown_and_accepted' => is_bool($value) ? $this->tos_shown_and_accepted = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
