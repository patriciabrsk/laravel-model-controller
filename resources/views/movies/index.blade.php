@extends ('layouts.main ')

@section('title', 'Movies')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase">Movies</h2>
            </div>
            <div class="row row-cols-3 g-4">
                @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="http://placehold.jp/100x200.png" class="card-img-top img-fluid" alt="placeholder">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <h5 class="card-title">{{ $movie->original_title }}</h5>
                            <p class="card-text">
                                Nationality: {{ $movie->nationality }}
                                Release date: {{ $movie->date }}
                                Rating: {{ $movie->vote }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection
