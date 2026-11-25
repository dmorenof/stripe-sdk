<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionWechatPayRedirectToAndroidApp
 */
final class IntentNextActionWechatPayRedirectToAndroidApp extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'app_id',
        'nonce_str',
        'package',
        'partner_id',
        'prepay_id',
        'sign',
        'timestamp',
    ];

    protected const array VALIDATION = [
        'app_id' => [
            'maxLength' => 5000,
        ],
        'nonce_str' => [
            'maxLength' => 5000,
        ],
        'package' => [
            'maxLength' => 5000,
        ],
        'partner_id' => [
            'maxLength' => 5000,
        ],
        'prepay_id' => [
            'maxLength' => 5000,
        ],
        'sign' => [
            'maxLength' => 5000,
        ],
        'timestamp' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * app_id is the APP ID registered on WeChat open platform
     */
    public string $app_id {
        set {
            $this->assigning('app_id', $value);
            $this->app_id = $value;
        }
    }
    /**
     * nonce_str is a random string
     */
    public string $nonce_str {
        set {
            $this->assigning('nonce_str', $value);
            $this->nonce_str = $value;
        }
    }
    /**
     * package is static value
     */
    public string $package {
        set {
            $this->assigning('package', $value);
            $this->package = $value;
        }
    }
    /**
     * an unique merchant ID assigned by WeChat Pay
     */
    public string $partner_id {
        set {
            $this->assigning('partner_id', $value);
            $this->partner_id = $value;
        }
    }
    /**
     * an unique trading ID assigned by WeChat Pay
     */
    public string $prepay_id {
        set {
            $this->assigning('prepay_id', $value);
            $this->prepay_id = $value;
        }
    }
    /**
     * A signature
     */
    public string $sign {
        set {
            $this->assigning('sign', $value);
            $this->sign = $value;
        }
    }
    /**
     * Specifies the current time in epoch format
     */
    public string $timestamp {
        set {
            $this->assigning('timestamp', $value);
            $this->timestamp = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'app_id' => is_string($value) ? $this->app_id = $value : parent::assignMember($name, $value),
            'nonce_str' => is_string($value) ? $this->nonce_str = $value : parent::assignMember($name, $value),
            'package' => is_string($value) ? $this->package = $value : parent::assignMember($name, $value),
            'partner_id' => is_string($value) ? $this->partner_id = $value : parent::assignMember($name, $value),
            'prepay_id' => is_string($value) ? $this->prepay_id = $value : parent::assignMember($name, $value),
            'sign' => is_string($value) ? $this->sign = $value : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
