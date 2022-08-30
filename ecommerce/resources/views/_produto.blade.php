@if (isset($lista))
    @foreach ($lista as $prod)
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card">
                <img src="images/product/brita.jpg" alt="" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title" style="font-size: 0.8rem;">{{ $prod->nome }} - R$ {{ $prod->preco }}</h6>
                    <a href="#" class="btn btn-sm btn_secondary">Adicionar Item</a>
                </div>
            </div>
        </div>
    @endforeach
@endif
