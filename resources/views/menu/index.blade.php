<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KiKodiron - Menu</title>
</head>

<body>

    <h1>KiKodiron</h1>

    <h2>Our Menu</h2>

    @foreach ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>

            <p>
                Category:
                {{ $product->category->name }}
            </p>

            <p>
                {{ $product->description }}
            </p>

            <p>
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </p>
        </div>

        <hr>
    @endforeach

</body>

</html>