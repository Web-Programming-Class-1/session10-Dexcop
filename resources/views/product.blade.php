<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <h1>{{ __('messages.title') }}</h1>
    <h1>{{ __('messages.price') }}</h1>
    <P>{{ __('messages.description') }}</P>

    <hr>
    Choose Language
    <a href="{{ route('product', ['lang' => 'id']) }}">Bahasa Indonesia</a>
    <a href="{{ route('product', ['lang' => 'en']) }}">English</a>
</body>
</html>