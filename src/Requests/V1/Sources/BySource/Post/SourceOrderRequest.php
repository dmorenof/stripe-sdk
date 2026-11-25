<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\BySource\Post;

/**
 * order_params
 *
 * Information about the items and shipping associated with the source. Required for transactional credit (for example Klarna) sources before you can charge it.
 */
final class SourceOrderRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\Sources\BySource\Post\SourceOrder\OrderItemsCollection $items;
    public \StripeSDK\Requests\V1\Sources\BySource\Post\SourceOrder\OrderShippingRequest $shipping;
}
