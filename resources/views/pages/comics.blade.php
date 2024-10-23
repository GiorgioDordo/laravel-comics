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
            @foreach ($comics as $comic)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center">
                <div class="manga-cover">
                    <img class="border card-img-top" src="{{$comic["thumb"]}}" alt="icon">
                </div>
                <div class="card-body text-center">
                    <p>
                        <strong>Titolo:</strong> {{$comic["title"]}}
                    </p>

                    <p>
                        <strong>Genere:</strong> {{$comic["series"]}}
                    </p>

                    <p>
                        <strong>Prezzo:</strong> {{$comic["price"]}} <strong>€</strong>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
