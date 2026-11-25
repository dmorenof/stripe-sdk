<?php

declare(strict_types=1);

namespace StripeSDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [
        'basicAuth' => [
            'type' => 'http',
            'scheme' => 'basic',
            'location' => null,
            'parameterName' => null,
        ],
        'bearerAuth' => [
            'type' => 'http',
            'scheme' => 'bearer',
            'location' => null,
            'parameterName' => null,
        ],
    ];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
