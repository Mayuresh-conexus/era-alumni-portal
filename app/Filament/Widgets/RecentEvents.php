<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;

class RecentEvents extends BaseWidget
{
    protected static ?int $sort = 3; // Optional sort order
    protected int $recordsPerPage = 5;

    protected function getTableQuery(): Builder
    {
        return Event::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('title')
                ->label('Event Title')
                ->sortable()
                ->searchable(),

            TextColumn::make('start_date')
                ->label('Start Date')
                ->dateTime('M d, Y'),
        ];
    }
}
