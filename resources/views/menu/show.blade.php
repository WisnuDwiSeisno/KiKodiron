<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->name }} - Brewly Coffee</title>
</head>

<body>

    <h1>Brewly Coffee</h1>

    <h2>{{ $product->name }}</h2>

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

    <a href="/menu/{{ $product->category->slug }}">
        ← Kembali ke {{ $product->category->name }}
    </a>

</body>

</html>