<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\Post;

/**
 * shallow_order_specs
 *
 * Information about the items and shipping associated with the source. Required for transactional credit (for example Klarna) sources before you can charge it.
 */
final class SourceOrderRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Sources\Post\SourceOrder\OrderItemsCollection $items;
    public \StripeSDK\Requests\V1\Sources\Post\SourceOrder\OrderShippingRequest $shipping;
}
