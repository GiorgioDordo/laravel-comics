@extends("layouts.app")

@section("page-title", "Comic")

@section("main-content")
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                COMICS
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6 m-3 p-3 d-flex flex-column align-items-center">
                <div class="manga-cover">
                    <img class="border card-img-top" src="{{$comic["thumb"]}}" alt="icon">
                </div>
                <div class="card-body text-center d-flex flex-column justify-content-end mt-2">
                    <p>
                        <strong>{{$comic["title"]}}</strong>
                    </p>

                    <p>
                        {{$comic["description"]}}
                    </p>

                    <p>
                        {{$comic["series"]}}
                    </p>

                    <p>
                        {{$comic["type"]}}
                    </p>

                    <p>
                        {{$comic["sale_date"]}}
                    </p>

                    <p>
                        {{$comic["price"]}} €
                    </p>
                    <button type="button" class="btn btn-light"><strong>Aggiungi al carrello</strong></button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
