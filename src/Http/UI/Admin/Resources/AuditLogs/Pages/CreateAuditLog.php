<?php

declare(strict_types=1);

namespace Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages;

use Filament\Resources\Pages\CreateRecord;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\AuditLogResource;

class CreateAuditLog extends CreateRecord
{
    protected static string $resource = AuditLogResource::class;

    protected static ?string $title = 'Audit Logs';

    protected ?string $subheading = 'Audit logs, keep track of changes in records.'; // Custom
}
