@extends("layouts.app")

@section("page-title", "Manga")

@section("main-content")
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                MANGAS
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($mangas as $manga)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center">
                <div class="manga-cover">
                    <img class="border card-img-top" src="{{$manga["immagine"]}}" alt="icon">
                </div>
                <div class="card-body d-flex flex-column align-items-center">
                    <p>
                        <strong>Titolo:</strong> {{$manga["titolo"]}}
                    </p>
                    <p>
                        <strong>Autore:</strong> {{$manga["autore"]}}
                    </p>
                    <p>
                        <strong>Genere:</strong> {{$manga["genere"]}}
                    </p>
                    <p>
                        <strong>Editore:</strong> {{$manga["editore"]}}
                    </p>
                    <p>
                        <strong>Prezzo:</strong> {{$manga["prezzo"]}} <strong>€</strong>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
