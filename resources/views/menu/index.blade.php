<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Brewly Coffee - Menu</title>
</head>

<body>

    <h1>Brewly Coffee</h1>

    <h2>Our Menu</h2>

    @foreach ($categories as $category)

        <h3>{{ $category->name }}</h3>

        @forelse ($category->products as $product)

            <div>
                <h4>{{ $product->name }}</h4>

                <p>
                    {{ $product->description }}
                </p>

                <p>
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>
            </div>

            <hr>

        @empty

            <p>Belum ada menu di kategori ini.</p>

        @endforelse

    @endforeach

</body>

</html>