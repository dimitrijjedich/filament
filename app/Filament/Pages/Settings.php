<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\PatientTypeOverview;
use App\Filament\Widgets\TreatmentsChart;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    public static function canAccess(): bool
    {
        return true;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            PatientTypeOverview::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            TreatmentsChart::class,
        ];
    }
}
