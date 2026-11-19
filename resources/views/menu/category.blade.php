<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $category->name }} - Brewly Coffee</title>
</head>

<body>

    <h1>Brewly Coffee</h1>

    <h2>{{ $category->name }}</h2>

    @forelse ($category->products as $product)

        <div>
            <h3><a href="/menu/{{ $category->slug }}/{{ $product->slug }}">{{ $product->name }}</a></h3>

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

    <a href="/menu">Kembali ke semua menu</a>

</body>

</html>