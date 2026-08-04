<?php

declare(strict_types=1);

namespace Rimba\Trail\Http\UI\Admin\Resources\AuditLogs\Schemas;

use Filament\Schemas\Schema;

class AuditLogInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
