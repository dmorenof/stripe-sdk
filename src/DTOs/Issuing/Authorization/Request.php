<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing\Authorization;

/**
 * IssuingAuthorizationRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'approved',
        'created',
        'currency',
        'merchant_amount',
        'merchant_currency',
        'reason',
    ];

    protected const array VALIDATION = [
        'authorization_code' => [
            'maxLength' => 5000,
        ],
        'currency' => [
            'maxLength' => 5000,
        ],
        'merchant_currency' => [
            'maxLength' => 5000,
        ],
        'reason_message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The `pending_request.amount` at the time of the request, presented in your card's currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). Stripe held this amount from your account to fund the authorization if the request was approved.
     */
    public int $amount;
    /**
     * Detailed breakdown of amount components. These amounts are denominated in `currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationAmountDetails $amount_details;
    /**
     * Whether this request was approved.
     */
    public bool $approved;
    /**
     * A code created by Stripe which is shared with the merchant to validate the authorization. This field will be populated if the authorization message was approved. The code typically starts with the letter "S", followed by a six-digit number. For example, "S498162". Please note that the code is not guaranteed to be unique across authorizations.
     */
    public ?string $authorization_code {
        set {
            $this->assigning('authorization_code', $value);
            $this->authorization_code = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * The `pending_request.merchant_amount` at the time of the request, presented in the `merchant_currency` and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $merchant_amount;
    /**
     * The currency that was collected by the merchant and presented to the cardholder for the authorization. Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $merchant_currency {
        set {
            $this->assigning('merchant_currency', $value);
            $this->merchant_currency = $value;
        }
    }
    /**
     * The card network's estimate of the likelihood that an authorization is fraudulent. Takes on values between 1 and 99.
     */
    public ?int $network_risk_score;
    /**
     * When an authorization is approved or declined by you or by Stripe, this field provides additional detail on the reason for the outcome.
     */
    public \StripeSDK\Enums\Issuing\Authorization\Request\ReasonEnum $reason;
    /**
     * If the `request_history.reason` is `webhook_error` because the direct webhook response is invalid (for example, parsing errors or missing parameters), we surface a more detailed error message via this field.
     */
    public ?string $reason_message {
        set {
            $this->assigning('reason_message', $value);
            $this->reason_message = $value;
        }
    }
    /**
     * Time when the card network received an authorization request from the acquirer in UTC. Referred to by networks as transmission time.
     * Format: unix-time
     */
    public ?int $requested_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_details' => $value === null || $value instanceof \stdClass ? $this->amount_details = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationAmountDetails($value) : parent::assignMember($name, $value),
            'approved' => is_bool($value) ? $this->approved = $value : parent::assignMember($name, $value),
            'authorization_code' => $value === null || is_string($value) ? $this->authorization_code = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'merchant_amount' => is_int($value) ? $this->merchant_amount = $value : parent::assignMember($name, $value),
            'merchant_currency' => is_string($value) ? $this->merchant_currency = $value : parent::assignMember($name, $value),
            'network_risk_score' => $value === null || is_int($value) ? $this->network_risk_score = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\Issuing\Authorization\Request\ReasonEnum::from($value) : parent::assignMember($name, $value),
            'reason_message' => $value === null || is_string($value) ? $this->reason_message = $value : parent::assignMember($name, $value),
            'requested_at' => $value === null || is_int($value) ? $this->requested_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
