<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBillieRequest3Variant1;

/**
 * invoice_payment_method_options_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\OptionsBillieRequest3Variant1\CompanyDetailsRequest $company_details;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
