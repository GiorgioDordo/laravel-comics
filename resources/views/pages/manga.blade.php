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
            <div class="col-3 card m-3">
                <ul class="list-unstyled">
                    <li>
                        <img src="{{$manga["immagine"]}}" alt="">
                    </li>
                    <li>
                        <strong>Titolo:</strong> {{$manga["titolo"]}}
                    </li>
                    <li>
                        <strong>Autore:</strong> {{$manga["autore"]}}
                    </li>
                    <li>
                        <strong>Genere:</strong> {{$manga["genere"]}}
                    </li>
                    <li>
                        <strong>Editore:</strong> {{$manga["editore"]}}
                    </li>
                    <li>
                        <strong>Prezzo:</strong> {{$manga["prezzo"]}} <strong>€</strong>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
