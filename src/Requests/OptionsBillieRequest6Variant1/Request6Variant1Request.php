<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBillieRequest6Variant1;

/**
 * payment_method_options_param
 */
final class Request6Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\OptionsBillieRequest6Variant1\CaptureMethodEnum $capture_method;
    public \StripeSDK\Requests\OptionsBillieRequest6Variant1\CompanyDetailsRequest $company_details;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\OptionsBillieRequest6Variant1\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
