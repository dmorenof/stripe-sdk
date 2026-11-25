<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * NotificationEventData
 */
final class NotificationEventData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    /**
     * Object containing the API resource relevant to the event. For example, an `invoice.created` event will have a full [invoice object](https://docs.stripe.com/api#invoice_object) as the value of the object key.
     */
    public \StripeSDK\DTOs\NotificationEventData\ObjectMap $object_;
    /**
     * Object containing the names of the updated attributes and their values prior to the event (only included in events of type `*.updated`). If an array attribute has any updated elements, this object contains the entire array. In Stripe API versions 2017-04-06 or earlier, an updated array attribute in this object includes only the updated array elements.
     */
    public \StripeSDK\DTOs\NotificationEventData\PreviousAttributesMap $previous_attributes;
}
