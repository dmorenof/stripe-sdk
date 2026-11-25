<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual\CardIssuing;

/**
 * terms_acceptance_param
 */
final class TermsAcceptanceRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: unix-time
     */
    public int $date;
    public string $ip;
    public \StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual\CardIssuing\UserTermsAcceptance\UserAgentRequest $user_agent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_int($value) ? $this->date = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
