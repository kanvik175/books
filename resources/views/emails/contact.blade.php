@component('mail::message')

# Новое обращение

### Имя:
{{ $data['name'] }}

### Почта:
{{ $data['email'] }}

### Сообщение:
{{ $data['message'] }}

@endcomponent