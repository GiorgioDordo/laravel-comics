@extends("layouts.app")

@section("page-title", "Comics")

@section("main-content")
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                COMICS
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($comics as $id => $comic)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center border rounded">
                <div class="manga-cover">
                    <img class="border card-img-top" src="{{$comic["thumb"]}}" alt="icon">
                </div>
                <div class="card-body text-center d-flex flex-column justify-content-end mt-2">
                    <a href="{{route("comics.show", $id)}}">
                        <strong>{{$comic["title"]}}</strong>
                    </a>


                    <p>
                        {{$comic["series"]}}
                    </p>

                    <p>
                        {{$comic["price"]}} €
                    </p>
                    <button type="button" class="btn btn-light"><strong>Aggiungi al carrello</strong></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
