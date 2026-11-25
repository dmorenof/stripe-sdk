<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationFleetData
 */
final class AuthorizationFleetData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Answers to prompts presented to the cardholder at the point of sale. Prompted fields vary depending on the configuration of your physical fleet cards. Typical points of sale support only numeric entry.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationFleetCardholderPromptData $cardholder_prompt_data;
    /**
     * The type of purchase.
     */
    public ?\StripeSDK\Enums\Issuing\AuthorizationFleetData\PurchaseTypeEnum $purchase_type;
    /**
     * More information about the total amount. Typically this information is received from the merchant after the authorization has been approved and the fuel dispensed. This information is not guaranteed to be accurate as some merchants may provide unreliable data.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationFleetReportedBreakdown $reported_breakdown;
    /**
     * The type of fuel service.
     */
    public ?\StripeSDK\Enums\Issuing\AuthorizationFleetData\ServiceTypeEnum $service_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cardholder_prompt_data' => $value === null || $value instanceof \stdClass ? $this->cardholder_prompt_data = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationFleetCardholderPromptData($value) : parent::assignMember($name, $value),
            'purchase_type' => $value === null || is_string($value) ? $this->purchase_type = $value === null ? null : \StripeSDK\Enums\Issuing\AuthorizationFleetData\PurchaseTypeEnum::from($value) : parent::assignMember($name, $value),
            'reported_breakdown' => $value === null || $value instanceof \stdClass ? $this->reported_breakdown = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationFleetReportedBreakdown($value) : parent::assignMember($name, $value),
            'service_type' => $value === null || is_string($value) ? $this->service_type = $value === null ? null : \StripeSDK\Enums\Issuing\AuthorizationFleetData\ServiceTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
