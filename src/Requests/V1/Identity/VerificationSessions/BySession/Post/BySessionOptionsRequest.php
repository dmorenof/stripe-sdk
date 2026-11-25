<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Post;

/**
 * session_options_param
 *
 * A set of options for the session’s verification checks.
 */
final class BySessionOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Post\Options\OptionsDocumentRequest $document;
}
