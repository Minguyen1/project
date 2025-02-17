<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/admin/layouts.css') }}">
</head>

<body>
    <header>
        <div class="logo">

        </div>
        <div class="search">
            <form action="">
                <input type="text" name="search" placeholder="Search.....">
                <button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </header>

    <div class="container-fluid mt-4">
        <nav class="slideBar">
            <ul>
                <li><a href="{{ route('home') }}">Dashboard</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="{{ route('admin.products') }}">Products</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Stocks</a></li>
                <li><a href="#">Vouchers</a></li>
            </ul>
        </nav>
    
        <div class="main">
            @yield('content')
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
