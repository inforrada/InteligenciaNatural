@props(['date'])

@php
    // Convertir la cadena de fecha a un objeto DateTime
    $dateTime = new \DateTime($date);
    $meses = [
        'January' => 'enero',
        'February' => 'febrero',
        'March' => 'marzo',
        'April' => 'abril',
        'May' => 'mayo',
        'June' => 'junio',
        'July' => 'julio',
        'August' => 'agosto',
        'September' => 'septiembre',
        'October' => 'octubre',
        'November' => 'noviembre',
        'December' => 'diciembre',
    ];
    // Formatear la fecha según el formato deseado
    $formattedDate =  $dateTime->format('j \d\e ') . $meses[$dateTime->format('F')] . $dateTime->format(' \d\e Y \a \l\a\s H:i \h\o\r\a\s');

@endphp

{{ $formattedDate }}