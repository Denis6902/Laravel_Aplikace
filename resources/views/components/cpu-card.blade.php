    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top"
                 alt="CPU" style="height: 225px; width: 100%; display: block;"
                 src="/./img/products/cpu.jpg"
                 data-holder-rendered="true">
            <div class="card-body">
                <p class="card-text">Procesor: {{$cpu->name}}</p>
                <p class="card-text">Takt: {{$cpu->clock}} GHz</p>
                <p class="card-text">Počet jader: {{$cpu->cores}}</p>
                <p class="card-text">TDP: {{$cpu->tdp}} W</p>
                <p class="card-text">Integrovaná grafická karta: {{$cpu->i_gpu}}</p>
                @if($cpu->smt_or_ht == '1')
                    <p class="card-text">Podpora SMT/HT</p>
                @endif
                <p class="card-text">
                    @for($i = 1; $i < ($cpu->rating)/20; $i++)
                        <img class="bigStar" src="/./img/star.svg" alt="Star">
                    @endfor
                </p>
                <p class="card-text">Cena: {{$cpu->price}} Kč</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{route('product', ['product'=>'cpu', 'id'=>$cpu->id])}}"
                           class="btn btn-sm btn-outline-primary">Zobrazit
                        </a>
                    </div>
                    <div
                        class="text-muted">
                        <a class="btn btn-sm btn-outline-primary"
                           href="{{route('addProduct', ['product'=>'cpu', 'id'=>$cpu->id])}}">Přidat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
