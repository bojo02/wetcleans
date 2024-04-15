<!DOCTYPE html>
<html lang="bg">
<head>
    <title>Нова заявка за почистване</title>
</head>
<body>
    <h1>Нова заявка за почистване от {{$name}}</h1>

    <hr>

    <p>Име и Фамилия: {{$name}}</p>
    <p>Телефон: {{$phone}}</p>
    <p>Час: {{date('H:i', strtotime($date_time))}}</p>
    <p>Дата: {{date('d/m/Y', strtotime($date_time))}}</p>
    <p>Адрес: {{$address}}</p>
    <p>Услуги:</p>
    @foreach ($services as $service)
        <hr>
        <p>{{$service->name}}</p>
        
        @if($service->service->is_square)
            <p>Квадрати: {{$service->quantity}}</p>
            @else
            <p>Количество: {{$service->quantity}}</p>
        @endif
    @endforeach
    <hr>
    <p>Цена: {{$amount}}лв.</p>
    <p><a href="{{route('admin.ticket.edit', ['ticket' => $service->ticket->id])}}">> Отвори билета ></a></p>
</body>
</html>