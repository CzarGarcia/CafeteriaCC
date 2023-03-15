<div class="container-products">
    <!-- Producto 1 -->
    @foreach ($producto as $pr) 
    <div class="card-product">
        <div class="container-img">
            <img src="/imagen/{{$pr->imagen}}" alt="Cafe Irish" />
            <span class="discount">-13%</span>
            <div class="button-group">
                <span>
                    <i class="fa-regular fa-eye"></i>
                </span>
                <span>
                    <i class="fa-regular fa-heart"></i>
                </span>
                <span>
                    <i class="fa-solid fa-code-compare"></i>
                </span>
            </div>
        </div>
        <div class="content-card-product">
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <h3>{{$pr['nombre']}}</h3>
            <span class="add-cart">
                <i class="fa-solid fa-basket-shopping"></i>
            </span>
            <p class="price">Precio: ${{$pr['precio']}} USD</p>
        </div>
    </div>
    @endforeach
</div>
</section>
