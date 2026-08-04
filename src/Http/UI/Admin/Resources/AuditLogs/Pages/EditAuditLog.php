<?php

declare(strict_types=1);

namespace Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\AuditLogResource;

class EditAuditLog extends EditRecord
{
    protected static string $resource = AuditLogResource::class;

    protected static ?string $title = 'Audit Logs';

    protected ?string $subheading = 'Audit logs, keep track of changes in records.';

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
