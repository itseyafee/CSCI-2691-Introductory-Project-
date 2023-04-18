<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X691</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        @include('main-elements.navbar.navbar')
        @include('main-elements.about.about')
        @include('main-elements.project-highlights.project-highlights')
        @include('main-elements.client-testimonials.client-testimonials')
        @include('main-elements.footer.footer')
    </div>
</body>
</html>
