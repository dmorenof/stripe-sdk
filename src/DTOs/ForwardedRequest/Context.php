<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ForwardedRequest;

/**
 * ForwardedRequestContext
 *
 * Metadata about the forwarded request.
 */
final class Context extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination_duration',
        'destination_ip_address',
    ];

    protected const array VALIDATION = [
        'destination_ip_address' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The time it took in milliseconds for the destination endpoint to respond.
     */
    public int $destination_duration;
    /**
     * The IP address of the destination.
     */
    public string $destination_ip_address {
        set {
            $this->assigning('destination_ip_address', $value);
            $this->destination_ip_address = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination_duration' => is_int($value) ? $this->destination_duration = $value : parent::assignMember($name, $value),
            'destination_ip_address' => is_string($value) ? $this->destination_ip_address = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
