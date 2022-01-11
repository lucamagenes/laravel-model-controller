@extends('layouts.app')

@section('content')

    <div class="title">
        <h1>
            Movies
        </h1>
    </div>

    <div class="container">
        @foreach ($movies as $movie)

            <div class="card">
                <h3>
                    Title: {{ $movie->title }}
                </h3>
                <h4>
                    Original title: {{ $movie->original_title }}
                </h4>
                <p>
                    Nationality: {{ $movie->nationality }}
                </p>
                <p>
                    Date: {{ $movie->date }}
                </p>
                <p>
                    Vote: {{ $movie->vote }}
                </p>
            </div>

            <hr>

        @endforeach
    </div>


@endsection
