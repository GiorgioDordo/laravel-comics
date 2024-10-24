@extends("layouts.app")

@section("page-title", "Gadgets")

@section("main-content")
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">
                GADGETS
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach ($gadgets as $gadget)
            <div class="col-3 m-3 p-3 d-flex flex-column align-items-center border rounded">
                <div class="manga-cover img-fluid">
                    <img class="card-img-top" src="{{$gadget["url_immagine"]}}" alt="icon">
                </div>
                <div class="card-body text-center d-flex flex-column justify-content-end mt-2">
                    <p>
                        <strong>{{$gadget["nome"]}}</strong>
                    </p>

                    <p>
                        {{$gadget["categoria"]}}
                    </p>

                    <p>
                        {{$gadget["prezzo"]}} €
                    </p>
                    <button type="button" class="btn btn-light"><strong>Aggiungi al carrello</strong></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
