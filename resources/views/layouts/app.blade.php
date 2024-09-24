<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <header>
        @include('partials.header')
    </header>

    <div class="container ashbin-padding-top">
        <div class="row">
            <div class="col-lg-8 col-12">
                @yield('content')
            </div>
            <div class="col-lg-4 col-12">
                <!-- @include('partials.right-widget') -->
            </div>
        </div>
    </div>

    <footer>
        @include('partials.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        const items = document.querySelectorAll('.ticker-item');
        let currentIndex = 0;

        function showNextItem() {
            items.forEach((item, index) => {
                item.style.top = index === currentIndex ? '0' : '50px';
            });
            currentIndex = (currentIndex + 1) % items.length;
        }

        setInterval(showNextItem, 3000); // Change item every 2 seconds

        // Initialize ticker
        showNextItem();
    </script>
</body>

</html>