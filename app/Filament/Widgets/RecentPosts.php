<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class RecentPosts extends BaseWidget
{
    protected static ?int $sort = 2; // Optional: controls order on dashboard
    protected int $recordsPerPage = 5; // Optional: limit visible rows

    protected function getTableQuery(): Builder
    {
        return Post::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('title')
                ->label('Title')
                ->sortable()
                ->searchable(),

            TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime('M d, Y H:i'),
        ];
    }
}
