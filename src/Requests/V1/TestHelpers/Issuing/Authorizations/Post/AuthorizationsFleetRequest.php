<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post;

/**
 * fleet_testmode_authorization_specs
 *
 * Fleet-specific information for authorizations using Fleet cards.
 */
final class AuthorizationsFleetRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'purchase_type' => [
            'maxLength' => 5000,
        ],
        'service_type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\Fleet\PromptDataRequest $cardholder_prompt_data;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fleet\PurchaseTypeEnum $purchase_type {
        set {
            $this->assigning('purchase_type', $value);
            $this->purchase_type = $value;
        }
    }
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post\Fleet\ReportedBreakdownRequest $reported_breakdown;
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fleet\ServiceTypeEnum $service_type {
        set {
            $this->assigning('service_type', $value);
            $this->service_type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'purchase_type' => is_string($value) ? $this->purchase_type = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fleet\PurchaseTypeEnum::from($value) : parent::assignMember($name, $value),
            'service_type' => is_string($value) ? $this->service_type = \StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fleet\ServiceTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
