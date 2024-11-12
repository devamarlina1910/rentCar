<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;

class BookingPdfController extends Controller
{
    public function print($id)
    {
        $booking = Booking::with(['car', 'user'])->findOrFail($id);

        $pdf = Pdf::loadView('pdf.booking', ['booking' => $booking]);
        return $pdf->download('booking_' . $id . '.pdf');
    }
}