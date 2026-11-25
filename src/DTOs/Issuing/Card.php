<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Card
 *
 * You can [create physical or virtual cards](https://docs.stripe.com/issuing) that are issued to cardholders.
 */
final class Card extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'brand',
        'cardholder',
        'created',
        'currency',
        'exp_month',
        'exp_year',
        'id',
        'last4',
        'livemode',
        'metadata',
        'object_',
        'spending_controls',
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
        'brand' => [
            'maxLength' => 5000,
        ],
        'cvc' => [
            'maxLength' => 5000,
        ],
        'financial_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
        'second_line' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The brand of the card.
     */
    public string $brand {
        set {
            $this->assigning('brand', $value);
            $this->brand = $value;
        }
    }
    /**
     * The reason why the card was canceled.
     */
    public ?\StripeSDK\Enums\Issuing\Card\CancellationReasonEnum $cancellation_reason;
    public \StripeSDK\DTOs\Issuing\Cardholder $cardholder;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Supported currencies are `usd` in the US, `eur` in the EU, and `gbp` in the UK.
     * Format: currency
     */
    public string $currency;
    /**
     * The card's CVC. For security reasons, this is only available for virtual cards, and will be omitted unless you explicitly request it with [the `expand` parameter](https://docs.stripe.com/api/expanding_objects). Additionally, it's only available via the ["Retrieve a card" endpoint](https://docs.stripe.com/api/issuing/cards/retrieve), not via "List all cards" or any other endpoint.
     */
    public string $cvc {
        set {
            $this->assigning('cvc', $value);
            $this->cvc = $value;
        }
    }
    /**
     * The expiration month of the card.
     */
    public int $exp_month;
    /**
     * The expiration year of the card.
     */
    public int $exp_year;
    /**
     * The financial account this card is attached to.
     */
    public ?string $financial_account {
        set {
            $this->assigning('financial_account', $value);
            $this->financial_account = $value;
        }
    }
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The last 4 digits of the card number.
     */
    public string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * Stripe’s assessment of whether this card’s details have been compromised. If this property isn't null, cancel and reissue the card to prevent fraudulent activity risk.
     */
    public ?\StripeSDK\DTOs\Issuing\CardFraudWarning $latest_fraud_warning;
    /**
     * Rules that control the lifecycle of this card, such as automatic cancellation. Refer to our [documentation](/issuing/controls/lifecycle-controls) for more details.
     */
    public ?\StripeSDK\DTOs\Issuing\CardLifecycleControls $lifecycle_controls;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Issuing\Card\MetadataMap $metadata;
    /**
     * The full unredacted card number. For security reasons, this is only available for virtual cards, and will be omitted unless you explicitly request it with [the `expand` parameter](https://docs.stripe.com/api/expanding_objects). Additionally, it's only available via the ["Retrieve a card" endpoint](https://docs.stripe.com/api/issuing/cards/retrieve), not via "List all cards" or any other endpoint.
     */
    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Issuing\Card\ObjectEnum $object_;
    /**
     * The personalization design object belonging to this card.
     */
    public ?\StripeSDK\DTOs\Issuing\Card\PersonalizationDesignDTO $personalization_design;
    /**
     * The latest card that replaces this card, if any.
     */
    public ?\StripeSDK\DTOs\Issuing\Card\ReplacedByDTO $replaced_by;
    /**
     * The card this card replaces, if any.
     */
    public ?\StripeSDK\DTOs\Issuing\Card\ReplacementForDTO $replacement_for;
    /**
     * The reason why the previous card needed to be replaced.
     */
    public ?\StripeSDK\Enums\Issuing\Card\ReplacementReasonEnum $replacement_reason;
    /**
     * Text separate from cardholder name, printed on the card.
     */
    public ?string $second_line {
        set {
            $this->assigning('second_line', $value);
            $this->second_line = $value;
        }
    }
    /**
     * Where and how the card will be shipped.
     */
    public ?\StripeSDK\DTOs\Issuing\CardShipping $shipping;
    public \StripeSDK\DTOs\Issuing\CardAuthorizationControls $spending_controls;
    /**
     * Whether authorizations can be approved on this card. May be blocked from activating cards depending on past-due Cardholder requirements. Defaults to `inactive`.
     */
    public \StripeSDK\Enums\Issuing\Card\StatusEnum $status;
    /**
     * The type of the card.
     */
    public \StripeSDK\Enums\Issuing\Card\TypeEnum $type;
    /**
     * Information relating to digital wallets (like Apple Pay and Google Pay).
     */
    public ?\StripeSDK\DTOs\Issuing\CardWallets $wallets;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand' => is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'cancellation_reason' => $value === null || is_string($value) ? $this->cancellation_reason = $value === null ? null : \StripeSDK\Enums\Issuing\Card\CancellationReasonEnum::from($value) : parent::assignMember($name, $value),
            'cardholder' => $value instanceof \stdClass ? $this->cardholder = new \StripeSDK\DTOs\Issuing\Cardholder($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'cvc' => is_string($value) ? $this->cvc = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'financial_account' => $value === null || is_string($value) ? $this->financial_account = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last4' => is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'latest_fraud_warning' => $value === null || $value instanceof \stdClass ? $this->latest_fraud_warning = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardFraudWarning($value) : parent::assignMember($name, $value),
            'lifecycle_controls' => $value === null || $value instanceof \stdClass ? $this->lifecycle_controls = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardLifecycleControls($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\Card\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'replacement_reason' => $value === null || is_string($value) ? $this->replacement_reason = $value === null ? null : \StripeSDK\Enums\Issuing\Card\ReplacementReasonEnum::from($value) : parent::assignMember($name, $value),
            'second_line' => $value === null || is_string($value) ? $this->second_line = $value : parent::assignMember($name, $value),
            'shipping' => $value === null || $value instanceof \stdClass ? $this->shipping = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardShipping($value) : parent::assignMember($name, $value),
            'spending_controls' => $value instanceof \stdClass ? $this->spending_controls = new \StripeSDK\DTOs\Issuing\CardAuthorizationControls($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\Card\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\Card\TypeEnum::from($value) : parent::assignMember($name, $value),
            'wallets' => $value === null || $value instanceof \stdClass ? $this->wallets = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardWallets($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
