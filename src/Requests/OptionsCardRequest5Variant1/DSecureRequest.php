<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequest5Variant1;

/**
 * payment_method_options_param
 */
final class DSecureRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cryptogram',
        'transaction_id',
        'version',
    ];

    protected const array VALIDATION = [
        'cryptogram' => [
            'maxLength' => 5000,
        ],
        'requestor_challenge_indicator' => [
            'maxLength' => 2,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\TransStatusEnum $ares_trans_status;
    public string $cryptogram {
        set {
            $this->assigning('cryptogram', $value);
            $this->cryptogram = $value;
        }
    }
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\CommerceIndicatorEnum $electronic_commerce_indicator;
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\ExemptionIndicatorEnum $exemption_indicator;
    public \StripeSDK\Requests\OptionsCardRequest5Variant1\ThreeDSecure\NetworkOptionsRequest $network_options;
    public string $requestor_challenge_indicator {
        set {
            $this->assigning('requestor_challenge_indicator', $value);
            $this->requestor_challenge_indicator = $value;
        }
    }
    public string $transaction_id {
        set {
            $this->assigning('transaction_id', $value);
            $this->transaction_id = $value;
        }
    }
    public \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\SecureVersionEnum $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ares_trans_status' => is_string($value) ? $this->ares_trans_status = \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\TransStatusEnum::from($value) : parent::assignMember($name, $value),
            'cryptogram' => is_string($value) ? $this->cryptogram = $value : parent::assignMember($name, $value),
            'electronic_commerce_indicator' => is_string($value) ? $this->electronic_commerce_indicator = \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\CommerceIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'exemption_indicator' => is_string($value) ? $this->exemption_indicator = \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\ExemptionIndicatorEnum::from($value) : parent::assignMember($name, $value),
            'requestor_challenge_indicator' => is_string($value) ? $this->requestor_challenge_indicator = $value : parent::assignMember($name, $value),
            'transaction_id' => is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            'version' => is_string($value) ? $this->version = \StripeSDK\Enums\OptionsCardRequest5Variant1\ThreeDSecure\SecureVersionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
