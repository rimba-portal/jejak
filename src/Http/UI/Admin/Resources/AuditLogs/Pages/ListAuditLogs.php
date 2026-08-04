<?php

declare(strict_types=1);

namespace Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\AuditLogResource;

class ListAuditLogs extends ListRecords
{
    protected static string $resource = AuditLogResource::class;

    protected static ?string $title = 'Audit Logs';

    protected ?string $subheading = 'Audit logs, keep track of changes in records.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
