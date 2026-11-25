<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post;

/**
 * purchase_details_specs
 *
 * Additional purchase information that is optionally provided by the merchant.
 */
final class PurchaseDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\DetailsFleetRequest $fleet;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\DetailsFlightRequest $flight;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\DetailsFuelRequest $fuel;
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\DetailsLodgingRequest $lodging;
    public \StripeSDK\Collections\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails\DetailsReceiptCollection $receipt;
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
