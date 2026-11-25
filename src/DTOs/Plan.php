<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Plan
 *
 * You can now model subscriptions more flexibly using the [Prices API](https://docs.stripe.com/api#prices). It replaces the Plans API and is backwards compatible to simplify your migration.
 *
 * Plans define the base price, currency, and billing cycle for recurring purchases of products.
 * [Products](https://docs.stripe.com/api#products) help you track inventory or provisioning, and plans help you track pricing. Different physical goods or levels of service should be represented by products, and pricing options should be represented by plans. This approach lets you change prices without having to change your provisioning scheme.
 *
 * For example, you might have a single "gold" product that has plans for $10/month, $100/year, €9/month, and €90/year.
 *
 * Related guides: [Set up a subscription](https://docs.stripe.com/billing/subscriptions/set-up-subscription) and more about [products and prices](https://docs.stripe.com/products-prices/overview).
 */
final class Plan extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'billing_scheme',
        'created',
        'currency',
        'id',
        'interval',
        'interval_count',
        'livemode',
        'object_',
        'usage_type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'meter' => [
            'maxLength' => 5000,
        ],
        'nickname' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the plan can be used for new purchases.
     */
    public bool $active;
    /**
     * The unit amount in cents (or local equivalent) to be charged, represented as a whole integer if possible. Only set if `billing_scheme=per_unit`.
     */
    public ?int $amount;
    /**
     * The unit amount in cents (or local equivalent) to be charged, represented as a decimal string with at most 12 decimal places. Only set if `billing_scheme=per_unit`.
     * Format: decimal
     */
    public ?string $amount_decimal;
    /**
     * Describes how to compute the price per period. Either `per_unit` or `tiered`. `per_unit` indicates that the fixed amount (specified in `amount`) will be charged per unit in `quantity` (for plans with `usage_type=licensed`), or per unit of total usage (for plans with `usage_type=metered`). `tiered` indicates that the unit pricing will be computed using a tiering strategy as defined using the `tiers` and `tiers_mode` attributes.
     */
    public \StripeSDK\Enums\Plan\BillingSchemeEnum $billing_scheme;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
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
     * The frequency at which a subscription is billed. One of `day`, `week`, `month` or `year`.
     */
    public \StripeSDK\Enums\Plan\IntervalEnum $interval;
    /**
     * The number of intervals (specified in the `interval` attribute) between subscription billings. For example, `interval=month` and `interval_count=3` bills every 3 months.
     */
    public int $interval_count;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Plan\MetadataMap $metadata;
    /**
     * The meter tracking the usage of a metered price
     */
    public ?string $meter {
        set {
            $this->assigning('meter', $value);
            $this->meter = $value;
        }
    }
    /**
     * A brief description of the plan, hidden from customers.
     */
    public ?string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Plan\ObjectEnum $object_;
    /**
     * The product whose pricing this plan determines.
     */
    public ?\StripeSDK\DTOs\Plan\ProductDTO $product;
    /**
     * Each element represents a pricing tier. This parameter requires `billing_scheme` to be set to `tiered`. See also the documentation for `billing_scheme`.
     */
    public \StripeSDK\Collections\Plan\TiersCollection $tiers;
    /**
     * Defines if the tiering price should be `graduated` or `volume` based. In `volume`-based tiering, the maximum quantity within a period determines the per unit price. In `graduated` tiering, pricing can change as the quantity grows.
     */
    public ?\StripeSDK\Enums\Plan\TiersModeEnum $tiers_mode;
    /**
     * Apply a transformation to the reported usage or set quantity before computing the amount billed. Cannot be combined with `tiers`.
     */
    public ?\StripeSDK\DTOs\TransformUsage $transform_usage;
    /**
     * Default number of trial days when subscribing a customer to this plan using [`trial_from_plan=true`](https://docs.stripe.com/api#create_subscription-trial_from_plan).
     */
    public ?int $trial_period_days;
    /**
     * Configures how the quantity per period should be determined. Can be either `metered` or `licensed`. `licensed` automatically bills the `quantity` set when adding it to a subscription. `metered` aggregates the total usage based on usage records. Defaults to `licensed`.
     */
    public \StripeSDK\Enums\Plan\UsageTypeEnum $usage_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_decimal' => $value === null || is_string($value) ? $this->amount_decimal = $value : parent::assignMember($name, $value),
            'billing_scheme' => is_string($value) ? $this->billing_scheme = \StripeSDK\Enums\Plan\BillingSchemeEnum::from($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\Plan\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'meter' => $value === null || is_string($value) ? $this->meter = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Plan\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'tiers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tiers = new \StripeSDK\Collections\Plan\TiersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\PlanTier::class)) : parent::assignMember($name, $value),
            'tiers_mode' => $value === null || is_string($value) ? $this->tiers_mode = $value === null ? null : \StripeSDK\Enums\Plan\TiersModeEnum::from($value) : parent::assignMember($name, $value),
            'transform_usage' => $value === null || $value instanceof \stdClass ? $this->transform_usage = $value === null ? null : new \StripeSDK\DTOs\TransformUsage($value) : parent::assignMember($name, $value),
            'trial_period_days' => $value === null || is_int($value) ? $this->trial_period_days = $value : parent::assignMember($name, $value),
            'usage_type' => is_string($value) ? $this->usage_type = \StripeSDK\Enums\Plan\UsageTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
