<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
</head>

<body>
    <div class="header">
        <header class="header-logo">
            <img class="image-logo" src="{{ asset('images/logo.png') }}" alt="Company Logo">
            <h1 class="title-icon">Rese</h1>
        </header>
        <form class="search-form" action="/" method="get">
            @csrf
            <select name="select-area" id="area" aria-label="Select Area">
                <option value="">ALL area</option>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                @endforeach
            </select>
            <select name="select-genre" id="genre" aria-label="Select Genre">
                <option value="">All Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
            <button type="submit" aria-label="Submit search">🔍</button>
            <input type="text" name="search" placeholder="Search..." aria-label="Search field" />
        </form>
    </div>

    <main>
        <div class="card">
            <div class="card-img">
                @foreach ($images as $image)
                    <img src="{{ $image->id }}" alt="">{{ $image->image }}
                @endforeach
            </div>
            <div class="card__content">
                <div class="card__shop">
                    @foreach ($shops as $shop)
                        <p class="card__shop-name">{{ $shop->name }}</p>
                    @endforeach
                </div>
                <div class="card__area card__genre">
                    @foreach ($areas as $area)
                        <h2 class="card__area-name">#{{ $area->name }}</h2>
                    @endforeach
                    @foreach ($genres as $genre)
                        <h2 class="card__genre-name">#{{ $genre->name }}</h2>
                    @endforeach
                </div>
                <div class="card-btn">
                    <button class="shop__detail-btn">詳しくみる</button>
                    <p class="heart" id="heart">&#9829;</p>

                    <script>
                        const heart = document.getElementById('heart');

                        heart.addEventListener('click', () => {
                        heart.classList.toggle('active');
                        });
                    </script>
                </div>
            </div>
        </div>
    </main>
</body>
</html>