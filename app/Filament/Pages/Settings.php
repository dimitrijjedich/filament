<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\PatientTypeOverview;
use App\Filament\Widgets\TreatmentsChart;
use Filament\Pages\Page;
use Illuminate\Contracts\View\View;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $slug = 'custom-url-slug';

    protected ?string $heading = 'Custom Page Heading';

    protected ?string $subheading = 'Custom Page Subheading';

    // check if the page should be displayed in the sidebar
    // example for usage: return auth()->user()->canManageSettings();
    public static function canAccess(): bool
    {
        return true;
    }

    public function getHeader(): ?View
    {
        return view('custom-header');
    }

    // returns an array of widgets to display above the page content
    protected function getHeaderWidgets(): array
    {
        return [
            PatientTypeOverview::class,
        ];
    }

    // returns an array of widgets to display below the page content
    protected function getFooterWidgets(): array
    {
        return [
            TreatmentsChart::class,
        ];
    }
}
