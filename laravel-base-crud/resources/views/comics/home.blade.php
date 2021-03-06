
@extends('comics.layout.default')

@section('title-home', 'home')

@section('hero')
@include('comics.partials.hero')

@endsection

@section('content')

<section class="comics home">
    <div class="container">
        <h3>CURRENT SERIES</h3>
        <div class="container-card">
            @foreach($comics as $comic)
            <div class="card">
                <a href="{{ route('comics.show', ['id' => $comic->id]) }}">
                    <div class="box-img">
                        <img src="{{ $comic->poster }}" alt="">
                    </div>
                    <h5>{{ $comic->series }}</h5>
                </a>
            </div>
            @endforeach
        </div>

        <div class="paginate">
        {!! $comics->links() !!}
        </div>

    </div>
</section>


@endsection

