@extends ('layouts.main ')

@section('title', 'Movies')

@section('main-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase">Movies</h2>
            </div>
            <div class="row row-cols-4 g-4">
                @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="https://dummyimage.com/300x350/b0b0b0/ffffff&text=Image+Not+Availables" class="card-img-top img-fluid" alt="placeholder">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <h5 class="card-title">{{ $movie->original_title }}</h5>
                            <p class="card-text">
                                <strong>Nationality:</strong> {{ $movie->nationality }}<br>
                                <strong>Release date:</strong> {{ $movie->date }}<br>
                                <strong>Rating:</strong> {{ $movie->vote }}<br>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
