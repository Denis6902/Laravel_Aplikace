@extends("app")

@push("styles")
    <style>
        main {
            padding: 0 10%;
        }
    </style>
@endpush

@section("content")
    @include("header")
    <main>
        <h1>Vyberte si zdroj</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Název</th>
                <th scope="col">Velikost</th>
                <th scope="col">Účinnost</th>
                <th scope="col">Počet W</th>
                <th scope="col">Modulárnost</th>
                <th scope="col">Hodnocení</th>
                <th scope="col">Cena</th>
                <th scope="col">Vytvořeno</th>
                <th scope="col">Aktualizováné</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($allPsu as $psu)
                <tr>
                    <th scope="row">{{$psu->id}}</th>
                    <th scope="row">{{$psu->name}}</th>
                    <th scope="row">{{$psu->formFactor}}</th>
                    <th scope="row">{{$psu->efficiencyRating}}</th>
                    <th scope="row">{{$psu->wattage}}</th>
                    <th scope="row">{{$psu->modular}}</th>
                    <th scope="row">@for($i = 0; $i < $psu->rating; $i++) * @endfor</th>
                    <th scope="row">{{$psu->price}} Kč</th>
                    <th scope="row">{{$psu->created_at}}</th>
                    <th scope="row">{{$psu->updated_at}}</th>
                    <th scope="row"><a href="{{route('pc-configurator')}}">Přidat</a></th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
    @include("footer")
@endsection
