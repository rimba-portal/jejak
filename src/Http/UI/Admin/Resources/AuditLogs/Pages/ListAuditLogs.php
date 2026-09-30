<?php

namespace Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAuditLogs extends ListRecords
{
    protected static string $resource = \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\AuditLogResource::class;

    protected static ?string $title = 'Audit Log';

    protected ?string $subheading = 'Audit logs, keep track of changes in records.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
