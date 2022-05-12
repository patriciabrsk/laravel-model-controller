@extends ('layouts.main ')

@section('title', 'Movies')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase">Movies</h2>
                <p>
                    @dump($movies)
                </p>
            </div>
        </div>
    </div>
@endsection
