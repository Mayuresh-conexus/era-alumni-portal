<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\RecentPosts;
use App\Filament\Widgets\RecentEvents;

class Dashboard extends BaseDashboard
{
    protected function getWidgets(): array
    {
        return [
            RecentPosts::class,
            RecentEvents::class,
            
        ];
    }

   
}
