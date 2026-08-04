<?php

declare(strict_types=1);

namespace Rimba\Trail\Http\UI\Admin\Resources\AuditLogs;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\CreateAuditLog;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\EditAuditLog;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\ListAuditLogs;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\ViewAuditLog;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Schemas\AuditLogForm;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Schemas\AuditLogInfolist;
use Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Tables\AuditLogsTable;
use Rimba\Trail\Models\AuditLog;
use UnitEnum;

class AuditLogResource extends Resource
{
    protected static ?string $model = AuditLog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ArrowSmallRight;

    protected static ?string $recordTitleAttribute = 'actor';

    protected static string|UnitEnum|null $navigationGroup = 'Trail';

    protected static ?string $navigationLabel = 'AuditLog';

    protected static ?int $navigationSort = 36;

    public static function form(Schema $schema): Schema
    {
        return AuditLogForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AuditLogInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AuditLogsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAuditLogs::route('/'),
            'create' => CreateAuditLog::route('/create'),
            'view' => ViewAuditLog::route('/{record}'),
            'edit' => EditAuditLog::route('/{record}/edit'),
        ];
    }
}
