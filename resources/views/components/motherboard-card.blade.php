<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top"
             alt="Motherboard" style="height: 225px; width: 100%; display: block;"
             src="/./img/products/motherboard.jpg"
             data-holder-rendered="true">
        <div class="card-body">
            <p class="card-text">Základní deska: {{$motherboard->name}}</p>
            <p class="card-text">Socket: {{$motherboard->socket}}</p>
            <p class="card-text">Velikost: {{$motherboard->type}}</p>
            <p class="card-text">Počet slotů na RAM: {{$motherboard->memorySlots}}</p>
            <p class="card-text">Podporovaná velikost RAM: {{$motherboard->maximumMemory}} GB</p>
            @if($motherboard->wifi == '1')
                <p class="card-text">Podpora WiFi</p>
            @endif
            <p class="card-text">Barva: {{$motherboard->color}}</p>
            <p class="card-text">
                @for($i = 0; $i < (($motherboard->rating)+2)/20 && $i < 5; $i++)
                    <img class="bigStar" src="/./img/star.svg" alt="Star">
                @endfor
            </p>
            <p class="card-text">Cena: {{$motherboard->price}} Kč</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('product', ['product'=>'motherboard', 'id'=>$motherboard->id])}}"
                       class="btn btn-sm btn-outline-primary">Zobrazit
                    </a>
                </div>
                <div>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{route('addProduct', ['product'=>'motherboard', 'id'=>$motherboard->id])}}">Přidat</a>
                </div>
            </div>
        </div>
    </div>
</div>