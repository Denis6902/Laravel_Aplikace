<div class="col-md-4 ">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="{{$illustrationImage["alt"]}}"
             style="height: 225px; width: 100%; display: block;"
             src="{{$illustrationImage["src"]}}"
             data-holder-rendered="true">
        <p class="small text-center mt-2 mb-0">Ilustrační foto</p>
        <div class="card-body">
            <p class="card-text">Zdroj: {{$psu->name}}</p>
            <p class="card-text">Velikost: {{$psu->formFactor}}</p>
            <p class="card-text">Certifikace: 80+ {{$psu->efficiencyRating}}</p>
            <p class="card-text">Výkon: {{$psu->wattage}} W</p>
            <p class="card-text">{{$psu->modular}} modularní</p>
            <p class="card-text">
                @if($psu->rating < 20)
                    <img class="bigStar" src="/./img/halfstar.svg" alt="nostar">
                @else
                    @for($i = 1; $i < ($psu->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                @endif
            </p>
            <p class="card-text">Cena: {{$psu->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'psu', 'id'=>$psu->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    @if(\Illuminate\Support\Facades\Route::is("products") || \Illuminate\Support\Facades\Route::is("brand"))
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'psu', 'id'=>$psu->id])}}">Přidat</a>
                    @else
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('deleteProduct', ['product'=>'psu'])}}">Smazat</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
