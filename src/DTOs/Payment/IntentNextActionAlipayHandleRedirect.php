<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionAlipayHandleRedirect
 */
final class IntentNextActionAlipayHandleRedirect extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'native_data' => [
            'maxLength' => 5000,
        ],
        'native_url' => [
            'maxLength' => 5000,
        ],
        'return_url' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The native data to be used with Alipay SDK you must redirect your customer to in order to authenticate the payment in an Android App.
     */
    public ?string $native_data {
        set {
            $this->assigning('native_data', $value);
            $this->native_data = $value;
        }
    }
    /**
     * The native URL you must redirect your customer to in order to authenticate the payment in an iOS App.
     */
    public ?string $native_url {
        set {
            $this->assigning('native_url', $value);
            $this->native_url = $value;
        }
    }
    /**
     * If the customer does not exit their browser while authenticating, they will be redirected to this specified URL after completion.
     */
    public ?string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }
    /**
     * The URL you must redirect your customer to in order to authenticate the payment.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'native_data' => $value === null || is_string($value) ? $this->native_data = $value : parent::assignMember($name, $value),
            'native_url' => $value === null || is_string($value) ? $this->native_url = $value : parent::assignMember($name, $value),
            'return_url' => $value === null || is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
