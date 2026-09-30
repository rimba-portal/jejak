<?php

namespace Rimba\Trail\Http\UI\Admin\Resources\AuditLogs;

use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AuditLogResource extends Resource
{
    protected static ?string $model = \Rimba\Trail\Models\AuditLog::class;

    protected static string|UnitEnum|null $navigationGroup = 'Trail';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'actor';

    public static function form(Schema $schema): Schema { return \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Schemas\AuditLogForm::configure($schema); }

    public static function infolist(Schema $schema): Schema { return \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Schemas\AuditLogInfolist::configure($schema); }

    public static function table(Table $table): Table { return \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Tables\AuditLogsTable::configure($table); }

    public static function getRelations(): array 
    { 
        return [ 
            // 
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\ListAuditLogs::route('/'),
             'create' => \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\CreateAuditLog::route('/create'),
             'view' => \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\ViewAuditLog::route('/{record}'),
             'edit' => \Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Pages\EditAuditLog::route('/{record}/edit'),
            //
        ];
    }
}
