<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post;

/**
 * acquirer_details
 *
 * Contains additional details about the acquirer for this 3DS Authentication.
 *
 * Refer to the [Pass acquirer details and directory server section of the standalone 3DS guide](/payments/3d-secure/standalone-3d-secure#pass-acquirer-details-and-directory-server) for more information.
 */
final class AcquirerDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'acquirer_bin',
        'acquirer_country',
        'acquirer_merchant_id',
    ];

    protected const array VALIDATION = [
        'acquirer_bin' => [
            'maxLength' => 11,
        ],
        'acquirer_country' => [
            'maxLength' => 5000,
        ],
        'acquirer_merchant_id' => [
            'maxLength' => 35,
        ],
        'mcc' => [
            'maxLength' => 5000,
        ],
        'merchant_name' => [
            'maxLength' => 40,
        ],
        'requestor_id' => [
            'maxLength' => 35,
        ],
    ];

    public string $acquirer_bin {
        set {
            $this->assigning('acquirer_bin', $value);
            $this->acquirer_bin = $value;
        }
    }
    public string $acquirer_country {
        set {
            $this->assigning('acquirer_country', $value);
            $this->acquirer_country = $value;
        }
    }
    public string $acquirer_merchant_id {
        set {
            $this->assigning('acquirer_merchant_id', $value);
            $this->acquirer_merchant_id = $value;
        }
    }
    public string $mcc {
        set {
            $this->assigning('mcc', $value);
            $this->mcc = $value;
        }
    }
    public string $merchant_name {
        set {
            $this->assigning('merchant_name', $value);
            $this->merchant_name = $value;
        }
    }
    public string $requestor_id {
        set {
            $this->assigning('requestor_id', $value);
            $this->requestor_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acquirer_bin' => is_string($value) ? $this->acquirer_bin = $value : parent::assignMember($name, $value),
            'acquirer_country' => is_string($value) ? $this->acquirer_country = $value : parent::assignMember($name, $value),
            'acquirer_merchant_id' => is_string($value) ? $this->acquirer_merchant_id = $value : parent::assignMember($name, $value),
            'mcc' => is_string($value) ? $this->mcc = $value : parent::assignMember($name, $value),
            'merchant_name' => is_string($value) ? $this->merchant_name = $value : parent::assignMember($name, $value),
            'requestor_id' => is_string($value) ? $this->requestor_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
