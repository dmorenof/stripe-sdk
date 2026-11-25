<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Sources\BySource\MandateNotifications;

final class ByMandateNotification extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'mandate_notification',
        'source',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'mandate_notification' => 'mandate_notification',
            'source' => 'source',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'mandate_notification' => [
            'maxLength' => 5000,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
    ];

    public string $mandate_notification {
        set {
            $this->assigning('mandate_notification', $value);
            $this->mandate_notification = $value;
        }
    }
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
}
