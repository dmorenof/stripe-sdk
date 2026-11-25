<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * APIErrors
 */
final class ApiErrors extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'advice_code' => [
            'maxLength' => 5000,
        ],
        'charge' => [
            'maxLength' => 5000,
        ],
        'code' => [
            'maxLength' => 5000,
        ],
        'decline_code' => [
            'maxLength' => 5000,
        ],
        'doc_url' => [
            'maxLength' => 5000,
        ],
        'message' => [
            'maxLength' => 40000,
        ],
        'network_advice_code' => [
            'maxLength' => 5000,
        ],
        'network_decline_code' => [
            'maxLength' => 5000,
        ],
        'param' => [
            'maxLength' => 5000,
        ],
        'payment_method_type' => [
            'maxLength' => 5000,
        ],
        'request_log_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * For card errors resulting from a card issuer decline, a short string indicating [how to proceed with an error](https://docs.stripe.com/declines/card#retrying-issuer-declines) if they provide one.
     */
    public string $advice_code {
        set {
            $this->assigning('advice_code', $value);
            $this->advice_code = $value;
        }
    }
    /**
     * For card errors, the ID of the failed charge.
     */
    public string $charge {
        set {
            $this->assigning('charge', $value);
            $this->charge = $value;
        }
    }
    /**
     * For some errors that could be handled programmatically, a short string indicating the [error code](https://docs.stripe.com/error-codes) reported.
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    /**
     * For card errors resulting from a card issuer decline, a short string indicating the [card issuer's reason for the decline](https://docs.stripe.com/declines#issuer-declines) if they provide one.
     */
    public string $decline_code {
        set {
            $this->assigning('decline_code', $value);
            $this->decline_code = $value;
        }
    }
    /**
     * A URL to more information about the [error code](https://docs.stripe.com/error-codes) reported.
     */
    public string $doc_url {
        set {
            $this->assigning('doc_url', $value);
            $this->doc_url = $value;
        }
    }
    /**
     * A human-readable message providing more details about the error. For card errors, these messages can be shown to your users.
     */
    public string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }
    /**
     * For card errors resulting from a card issuer decline, a 2 digit code which indicates the advice given to merchant by the card network on how to proceed with an error.
     */
    public string $network_advice_code {
        set {
            $this->assigning('network_advice_code', $value);
            $this->network_advice_code = $value;
        }
    }
    /**
     * For payments declined by the network, an alphanumeric code which indicates the reason the payment failed.
     */
    public string $network_decline_code {
        set {
            $this->assigning('network_decline_code', $value);
            $this->network_decline_code = $value;
        }
    }
    /**
     * If the error is parameter-specific, the parameter related to the error. For example, you can use this to display a message near the correct form field.
     */
    public string $param {
        set {
            $this->assigning('param', $value);
            $this->param = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\Intent $payment_intent;
    public \StripeSDK\DTOs\Payment\Method $payment_method;
    /**
     * If the error is specific to the type of payment method, the payment method type that had a problem. This field is only populated for invoice-related errors.
     */
    public string $payment_method_type {
        set {
            $this->assigning('payment_method_type', $value);
            $this->payment_method_type = $value;
        }
    }
    /**
     * A URL to the request log entry in your dashboard.
     */
    public string $request_log_url {
        set {
            $this->assigning('request_log_url', $value);
            $this->request_log_url = $value;
        }
    }
    public \StripeSDK\DTOs\Setup\Intent $setup_intent;
    /**
     * The [source object](https://docs.stripe.com/api/sources/object) for errors returned on a request involving a source.
     */
    public \StripeSDK\DTOs\ApiErrors\SourceDTO $source;
    /**
     * The type of error returned. One of `api_error`, `card_error`, `idempotency_error`, or `invalid_request_error`
     */
    public \StripeSDK\Enums\ApiErrors\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'advice_code' => is_string($value) ? $this->advice_code = $value : parent::assignMember($name, $value),
            'charge' => is_string($value) ? $this->charge = $value : parent::assignMember($name, $value),
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'decline_code' => is_string($value) ? $this->decline_code = $value : parent::assignMember($name, $value),
            'doc_url' => is_string($value) ? $this->doc_url = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'network_advice_code' => is_string($value) ? $this->network_advice_code = $value : parent::assignMember($name, $value),
            'network_decline_code' => is_string($value) ? $this->network_decline_code = $value : parent::assignMember($name, $value),
            'param' => is_string($value) ? $this->param = $value : parent::assignMember($name, $value),
            'payment_intent' => $value instanceof \stdClass ? $this->payment_intent = new \StripeSDK\DTOs\Payment\Intent($value) : parent::assignMember($name, $value),
            'payment_method' => $value instanceof \stdClass ? $this->payment_method = new \StripeSDK\DTOs\Payment\Method($value) : parent::assignMember($name, $value),
            'payment_method_type' => is_string($value) ? $this->payment_method_type = $value : parent::assignMember($name, $value),
            'request_log_url' => is_string($value) ? $this->request_log_url = $value : parent::assignMember($name, $value),
            'setup_intent' => $value instanceof \stdClass ? $this->setup_intent = new \StripeSDK\DTOs\Setup\Intent($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ApiErrors\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
