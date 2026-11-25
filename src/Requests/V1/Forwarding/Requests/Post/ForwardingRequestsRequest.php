<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Forwarding\Requests\Post;

/**
 * request_param
 *
 * The request body and headers to be sent to the destination endpoint.
 */
final class ForwardingRequestsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'body' => [
            'maxLength' => 5000,
        ],
    ];

    public string $body {
        set {
            $this->assigning('body', $value);
            $this->body = $value;
        }
    }
    public \StripeSDK\Collections\V1\Forwarding\Requests\Post\Request\RequestsHeadersCollection $headers;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
