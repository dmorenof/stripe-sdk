<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Event
 *
 * Snapshot events allow you to track and react to activity in your Stripe integration. When
 * the state of another API resource changes, Stripe creates an `Event` object that contains
 * all the relevant information associated with that action, including the affected API
 * resource. For example, a successful payment triggers a `charge.succeeded` event, which
 * contains the `Charge` in the event's data property. Some actions trigger multiple events.
 * For example, if you create a new subscription for a customer, it triggers both a
 * `customer.subscription.created` event and a `charge.succeeded` event.
 *
 * Configure an event destination in your account to listen for events that represent actions
 * your integration needs to respond to. Additionally, you can retrieve an individual event or
 * a list of events from the API.
 *
 * [Connect](https://docs.stripe.com/connect) platforms can also receive event notifications
 * that occur in their connected accounts. These events include an account attribute that
 * identifies the relevant connected account.
 *
 * You can access events through the [Retrieve Event API](https://docs.stripe.com/api/events#retrieve_event)
 * for 30 days.
 */
final class Event extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'data',
        'id',
        'livemode',
        'object_',
        'pending_webhooks',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'api_version' => [
            'maxLength' => 5000,
        ],
        'context' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The connected account that originates the event.
     */
    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    /**
     * The Stripe API version used to render `data` when the event was created. The contents of `data` never change, so this value remains static regardless of the API version currently in use. This property is populated only for events created on or after October 31, 2014.
     */
    public ?string $api_version {
        set {
            $this->assigning('api_version', $value);
            $this->api_version = $value;
        }
    }
    /**
     * Authentication context needed to fetch the event or related object.
     */
    public string $context {
        set {
            $this->assigning('context', $value);
            $this->context = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    public \StripeSDK\DTOs\NotificationEventData $data;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Event\ObjectEnum $object_;
    /**
     * Number of webhooks that haven't been successfully delivered (for example, to return a 20x response) to the URLs you specify.
     */
    public int $pending_webhooks;
    /**
     * Information on the API request that triggers the event.
     */
    public ?\StripeSDK\DTOs\NotificationEventRequest $request;
    /**
     * Description of the event (for example, `invoice.created` or `charge.refunded`).
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'api_version' => $value === null || is_string($value) ? $this->api_version = $value : parent::assignMember($name, $value),
            'context' => is_string($value) ? $this->context = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'data' => $value instanceof \stdClass ? $this->data = new \StripeSDK\DTOs\NotificationEventData($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Event\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'pending_webhooks' => is_int($value) ? $this->pending_webhooks = $value : parent::assignMember($name, $value),
            'request' => $value === null || $value instanceof \stdClass ? $this->request = $value === null ? null : new \StripeSDK\DTOs\NotificationEventRequest($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
