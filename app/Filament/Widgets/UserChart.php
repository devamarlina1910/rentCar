<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Carbon\Carbon;
use App\Models\Booking;

class UserChart extends ChartWidget
{
    protected static ?string $heading = 'Booking Chart';

    protected function getData(): array
    {
    $data = Trend::model(Booking::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Bookings',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(function (TrendValue $value)  {
            $date = Carbon::createFromFormat('Y-m', $value->date);
            $formattedDate = $date->format('M');
            
            return $formattedDate;
        }),
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}