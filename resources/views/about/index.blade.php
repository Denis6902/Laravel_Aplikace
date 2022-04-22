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
    <h1>Stránka o konfigurátoru</h1>
    <p>
        Jedná se o konfigurátor PC
    </p>
    <a href="https://github.com/Denis6902/Laravel_Aplikace">Odkaz na GitHub</a>

</main>
    @include("footer")
@endsection