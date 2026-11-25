<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Apps\Install;

enum StatusEnum: string
{
    case InstallFailed = 'install_failed';
    case Installed = 'installed';
    case Installing = 'installing';
    case UninstallFailed = 'uninstall_failed';
    case Uninstalling = 'uninstalling';
}
