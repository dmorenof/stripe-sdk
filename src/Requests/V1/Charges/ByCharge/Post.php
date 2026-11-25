<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Charges\ByCharge;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 40000,
        ],
        'receipt_email' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of an existing customer that will be associated with this request. This field may only be updated if there is no existing associated customer with this charge.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * An arbitrary string which you can attach to a charge object. It is displayed when in the web interface alongside the charge. Note that if you use Stripe to send automatic email receipts to your customers, your receipt emails will include the `description` of the charge(s) that they are describing.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A set of key-value pairs you can attach to a charge giving information about its riskiness. If you believe a charge is fraudulent, include a `user_report` key with a value of `fraudulent`. If you believe a charge is safe, include a `user_report` key with a value of `safe`. Stripe will use the information you send to improve our fraud detection algorithms.
     */
    public \StripeSDK\Requests\V1\Charges\ByCharge\Post\FraudDetailsRequest $fraud_details;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Charges\ByCharge\Post\ByChargeMetadataRequest $metadata;
    /**
     * This is the email address that the receipt for this charge will be sent to. If this field is updated, then a new email receipt will be sent to the updated address.
     */
    public string $receipt_email {
        set {
            $this->assigning('receipt_email', $value);
            $this->receipt_email = $value;
        }
    }
    /**
     * Shipping information for the charge. Helps prevent fraud on charges for physical goods.
     */
    public \StripeSDK\Requests\V1\Charges\ByCharge\Post\ByChargeShippingRequest $shipping;
    /**
     * A string that identifies this transaction as part of a group. `transfer_group` may only be provided if it has not been set. See the [Connect documentation](https://docs.stripe.com/connect/separate-charges-and-transfers#transfer-options) for details.
     */
    public string $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'receipt_email' => is_string($value) ? $this->receipt_email = $value : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
