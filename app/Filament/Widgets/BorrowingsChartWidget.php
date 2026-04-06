<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BorrowingsChartWidget extends ChartWidget
{
    protected ?string $heading = 'Borrowings Chart Widget';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
