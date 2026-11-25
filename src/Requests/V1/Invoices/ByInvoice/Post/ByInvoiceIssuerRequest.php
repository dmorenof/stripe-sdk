<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Post;

/**
 * param
 *
 * The connected account that issues the invoice. The invoice is presented with the branding and support information of the specified account.
 */
final class ByInvoiceIssuerRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public string $account;
    public \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Issuer\IssuerTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Issuer\IssuerTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
