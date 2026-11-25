<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Source
 *
 * `Source` objects allow you to accept a variety of payment methods. They
 * represent a customer's payment instrument, and can be used with the Stripe API
 * just like a `Card` object: once chargeable, they can be charged, or can be
 * attached to customers.
 *
 * Stripe doesn't recommend using the deprecated [Sources API](https://docs.stripe.com/api/sources).
 * We recommend that you adopt the [PaymentMethods API](https://docs.stripe.com/api/payment_methods).
 * This newer API provides access to our latest features and payment method types.
 *
 * Related guides: [Sources API](https://docs.stripe.com/sources) and [Sources & Customers](https://docs.stripe.com/sources/customers).
 */
final class Source extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'client_secret',
        'created',
        'flow',
        'id',
        'livemode',
        'object_',
        'status',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'flow' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
        'usage' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Source\TypeAchCreditTransfer $ach_credit_transfer;
    public \StripeSDK\DTOs\Source\TypeAchDebit $ach_debit;
    public \StripeSDK\DTOs\Source\TypeAcssDebit $acss_debit;
    public \StripeSDK\DTOs\Source\TypeAlipay $alipay;
    /**
     * This field indicates whether this payment method can be shown again to its customer in a checkout flow. Stripe products such as Checkout and Elements use this field to determine whether a payment method can be shown as a saved payment method in a checkout flow. The field defaults to “unspecified”.
     */
    public ?\StripeSDK\Enums\Source\AllowRedisplayEnum $allow_redisplay;
    /**
     * A positive integer in the smallest currency unit (that is, 100 cents for $1.00, or 1 for ¥1, Japanese Yen being a zero-decimal currency) representing the total amount associated with the source. This is the amount for which the source will be chargeable once ready. Required for `single_use` sources.
     */
    public ?int $amount;
    public \StripeSDK\DTOs\Source\TypeAuBecsDebit $au_becs_debit;
    public \StripeSDK\DTOs\Source\TypeBancontact $bancontact;
    public \StripeSDK\DTOs\Source\TypeCard $card;
    public \StripeSDK\DTOs\Source\TypeCardPresent $card_present;
    /**
     * The client secret of the source. Used for client-side retrieval using a publishable key.
     */
    public string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    public \StripeSDK\DTOs\Source\CodeVerificationFlow $code_verification;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) associated with the source. This is the currency for which the source will be chargeable once ready. Required for `single_use` sources.
     * Format: currency
     */
    public ?string $currency;
    /**
     * The ID of the customer to which this source is attached. This will not be present when the source has not been attached to a customer.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public \StripeSDK\DTOs\Source\TypeEps $eps;
    /**
     * The authentication `flow` of the source. `flow` is one of `redirect`, `receiver`, `code_verification`, `none`.
     */
    public string $flow {
        set {
            $this->assigning('flow', $value);
            $this->flow = $value;
        }
    }
    public \StripeSDK\DTOs\Source\TypeGiropay $giropay;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\DTOs\Source\TypeIdeal $ideal;
    public \StripeSDK\DTOs\Source\TypeKlarna $klarna;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Source\MetadataMap $metadata;
    public \StripeSDK\DTOs\Source\TypeMultibanco $multibanco;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Source\ObjectEnum $object_;
    /**
     * Information about the owner of the payment instrument that may be used or required by particular source types.
     */
    public ?\StripeSDK\DTOs\Source\Owner $owner;
    public \StripeSDK\DTOs\Source\TypeP24 $p24;
    public \StripeSDK\DTOs\Source\ReceiverFlow $receiver;
    public \StripeSDK\DTOs\Source\RedirectFlow $redirect;
    public \StripeSDK\DTOs\Source\TypeSepaDebit $sepa_debit;
    public \StripeSDK\DTOs\Source\TypeSofort $sofort;
    public \StripeSDK\DTOs\Source\Order $source_order;
    /**
     * Extra information about a source. This will appear on your customer's statement every time you charge the source.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * The status of the source, one of `canceled`, `chargeable`, `consumed`, `failed`, or `pending`. Only `chargeable` sources can be used to create a charge.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    public \StripeSDK\DTOs\Source\TypeThreeDSecure $three_d_secure;
    /**
     * The `type` of the source. The `type` is a payment method, one of `ach_credit_transfer`, `ach_debit`, `alipay`, `bancontact`, `card`, `card_present`, `eps`, `giropay`, `ideal`, `multibanco`, `klarna`, `p24`, `sepa_debit`, `sofort`, `three_d_secure`, or `wechat`. An additional hash is included on the source with a name matching this value. It contains additional information specific to the [payment method](https://docs.stripe.com/sources) used.
     */
    public \StripeSDK\Enums\Source\TypeEnum $type;
    /**
     * Either `reusable` or `single_use`. Whether this source should be reusable or not. Some source types may or may not be reusable by construction, while others may leave the option at creation. If an incompatible value is passed, an error will be returned.
     */
    public ?string $usage {
        set {
            $this->assigning('usage', $value);
            $this->usage = $value;
        }
    }
    public \StripeSDK\DTOs\Source\TypeWechat $wechat;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach_credit_transfer' => $value instanceof \stdClass ? $this->ach_credit_transfer = new \StripeSDK\DTOs\Source\TypeAchCreditTransfer($value) : parent::assignMember($name, $value),
            'ach_debit' => $value instanceof \stdClass ? $this->ach_debit = new \StripeSDK\DTOs\Source\TypeAchDebit($value) : parent::assignMember($name, $value),
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Source\TypeAcssDebit($value) : parent::assignMember($name, $value),
            'alipay' => $value instanceof \stdClass ? $this->alipay = new \StripeSDK\DTOs\Source\TypeAlipay($value) : parent::assignMember($name, $value),
            'allow_redisplay' => $value === null || is_string($value) ? $this->allow_redisplay = $value === null ? null : \StripeSDK\Enums\Source\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'au_becs_debit' => $value instanceof \stdClass ? $this->au_becs_debit = new \StripeSDK\DTOs\Source\TypeAuBecsDebit($value) : parent::assignMember($name, $value),
            'bancontact' => $value instanceof \stdClass ? $this->bancontact = new \StripeSDK\DTOs\Source\TypeBancontact($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Source\TypeCard($value) : parent::assignMember($name, $value),
            'card_present' => $value instanceof \stdClass ? $this->card_present = new \StripeSDK\DTOs\Source\TypeCardPresent($value) : parent::assignMember($name, $value),
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'code_verification' => $value instanceof \stdClass ? $this->code_verification = new \StripeSDK\DTOs\Source\CodeVerificationFlow($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'eps' => $value instanceof \stdClass ? $this->eps = new \StripeSDK\DTOs\Source\TypeEps($value) : parent::assignMember($name, $value),
            'flow' => is_string($value) ? $this->flow = $value : parent::assignMember($name, $value),
            'giropay' => $value instanceof \stdClass ? $this->giropay = new \StripeSDK\DTOs\Source\TypeGiropay($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ideal' => $value instanceof \stdClass ? $this->ideal = new \StripeSDK\DTOs\Source\TypeIdeal($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Source\TypeKlarna($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'multibanco' => $value instanceof \stdClass ? $this->multibanco = new \StripeSDK\DTOs\Source\TypeMultibanco($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Source\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'owner' => $value === null || $value instanceof \stdClass ? $this->owner = $value === null ? null : new \StripeSDK\DTOs\Source\Owner($value) : parent::assignMember($name, $value),
            'p24' => $value instanceof \stdClass ? $this->p24 = new \StripeSDK\DTOs\Source\TypeP24($value) : parent::assignMember($name, $value),
            'receiver' => $value instanceof \stdClass ? $this->receiver = new \StripeSDK\DTOs\Source\ReceiverFlow($value) : parent::assignMember($name, $value),
            'redirect' => $value instanceof \stdClass ? $this->redirect = new \StripeSDK\DTOs\Source\RedirectFlow($value) : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Source\TypeSepaDebit($value) : parent::assignMember($name, $value),
            'sofort' => $value instanceof \stdClass ? $this->sofort = new \StripeSDK\DTOs\Source\TypeSofort($value) : parent::assignMember($name, $value),
            'source_order' => $value instanceof \stdClass ? $this->source_order = new \StripeSDK\DTOs\Source\Order($value) : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'three_d_secure' => $value instanceof \stdClass ? $this->three_d_secure = new \StripeSDK\DTOs\Source\TypeThreeDSecure($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Source\TypeEnum::from($value) : parent::assignMember($name, $value),
            'usage' => $value === null || is_string($value) ? $this->usage = $value : parent::assignMember($name, $value),
            'wechat' => $value instanceof \stdClass ? $this->wechat = new \StripeSDK\DTOs\Source\TypeWechat($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
