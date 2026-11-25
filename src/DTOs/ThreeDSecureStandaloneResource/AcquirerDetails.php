<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * Acquirer Detail
 *
 * Contains additional details about the acquirer for a 3DS Authentication.
 */
final class AcquirerDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'acquirer_bin' => [
            'maxLength' => 5000,
        ],
        'acquirer_country' => [
            'maxLength' => 5000,
        ],
        'acquirer_merchant_id' => [
            'maxLength' => 5000,
        ],
        'mcc' => [
            'maxLength' => 5000,
        ],
        'merchant_name' => [
            'maxLength' => 5000,
        ],
        'requestor_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Acquirer BIN (specific to the directory_server).
     */
    public string $acquirer_bin {
        set {
            $this->assigning('acquirer_bin', $value);
            $this->acquirer_bin = $value;
        }
    }
    /**
     * The two-letter country code of the acquirer ([ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
     */
    public string $acquirer_country {
        set {
            $this->assigning('acquirer_country', $value);
            $this->acquirer_country = $value;
        }
    }
    /**
     * The Merchant ID (or Card Acceptor ID) that your acquirer assigned you (specific to the directory_server).
     */
    public string $acquirer_merchant_id {
        set {
            $this->assigning('acquirer_merchant_id', $value);
            $this->acquirer_merchant_id = $value;
        }
    }
    /**
     * The [merchant category code](https://en.wikipedia.org/wiki/Merchant_category_code) as defined by each payment system or directory server.
     */
    public string $mcc {
        set {
            $this->assigning('mcc', $value);
            $this->mcc = $value;
        }
    }
    /**
     * The merchant name assigned by the acquirer or payment system. Same name used in the authorization message as defined in [ISO 8583](https://en.wikipedia.org/wiki/ISO_8583).
     */
    public string $merchant_name {
        set {
            $this->assigning('merchant_name', $value);
            $this->merchant_name = $value;
        }
    }
    /**
     * Requestor ID if you’re enrolled in the card network’s 3DS program. Otherwise, you can omit this field because Stripe assigns a Requestor ID with the card networks.
     */
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
