<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 500,
        ],
        'flow' => [
            'maxLength' => 5000,
        ],
        'original_source' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
        'token' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
        'usage' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount associated with the source. This is the amount for which the source will be chargeable once ready. Required for `single_use` sources. Not supported for `receiver` type sources, where charge amount may not be specified until funds land.
     */
    public int $amount;
    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) associated with the source. This is the currency for which the source will be chargeable once ready.
     * Format: currency
     */
    public string $currency;
    /**
     * The `Customer` to whom the original source is attached to. Must be set when the original source is not a `Source` (e.g., `Card`).
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The authentication `flow` of the source to create. `flow` is one of `redirect`, `receiver`, `code_verification`, `none`. It is generally inferred unless a type supports multiple flows.
     */
    public \StripeSDK\Enums\V1\Sources\Post\SourcesFlowEnum $flow {
        set {
            $this->assigning('flow', $value);
            $this->flow = $value;
        }
    }
    /**
     * Information about a mandate possibility attached to a source object (generally for bank debits) as well as its acceptance status.
     */
    public \StripeSDK\Requests\V1\Sources\Post\SourcesMandateRequest $mandate;
    public \StripeSDK\Requests\V1\Sources\Post\MetadataMapRequest $metadata;
    /**
     * The source to share.
     */
    public string $original_source {
        set {
            $this->assigning('original_source', $value);
            $this->original_source = $value;
        }
    }
    /**
     * Information about the owner of the payment instrument that may be used or required by particular source types.
     */
    public \StripeSDK\Requests\V1\Sources\Post\SourcesOwnerRequest $owner;
    /**
     * Optional parameters for the receiver flow. Can be set only if the source is a receiver (`flow` is `receiver`).
     */
    public \StripeSDK\Requests\V1\Sources\Post\SourcesReceiverRequest $receiver;
    /**
     * Parameters required for the redirect flow. Required if the source is authenticated by a redirect (`flow` is `redirect`).
     */
    public \StripeSDK\Requests\V1\Sources\Post\SourcesRedirectRequest $redirect;
    /**
     * Information about the items and shipping associated with the source. Required for transactional credit (for example Klarna) sources before you can charge it.
     */
    public \StripeSDK\Requests\V1\Sources\Post\SourceOrderRequest $source_order;
    /**
     * An arbitrary string to be displayed on your customer's statement. As an example, if your website is `RunClub` and the item you're charging for is a race ticket, you may want to specify a `statement_descriptor` of `RunClub 5K race ticket.` While many payment types will display this information, some may not display it at all.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * An optional token used to create the source. When passed, token properties will override source parameters.
     */
    public string $token {
        set {
            $this->assigning('token', $value);
            $this->token = $value;
        }
    }
    /**
     * The `type` of the source to create. Required unless `customer` and `original_source` are specified (see the [Cloning card Sources](https://docs.stripe.com/sources/connect#cloning-card-sources) guide)
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public \StripeSDK\Enums\V1\Sources\Post\SourcesUsageEnum $usage {
        set {
            $this->assigning('usage', $value);
            $this->usage = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'flow' => is_string($value) ? $this->flow = \StripeSDK\Enums\V1\Sources\Post\SourcesFlowEnum::from($value) : parent::assignMember($name, $value),
            'original_source' => is_string($value) ? $this->original_source = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'usage' => is_string($value) ? $this->usage = \StripeSDK\Enums\V1\Sources\Post\SourcesUsageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
