<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <!-- 1. Div principal onde o carrosel vai ficar -->
<div class="carousel">

    <!-- 2.Div onde vai armazenar as imagens -->
    <div class="carousel-track">
    
        <!-- 3. Imagens -->
        <div class="carousel-item"><img src="foto1.jpg"></div>
        <div class="carousel-item"><img src="foto2.jpg"></div>
        <div class="carousel-item"><img src="foto3.jpg"></div>
        
    </div>

    <!-- 4. Botões para alterar as imagens -->
    <button class="btn-prev">⬅️</button>
    <button class="btn-next">➡️</button>

</div>

<h2>Nossa coleção</h2>

<!-- Exibição de perfumes-->
<section class="vitrine-perfumes">
    <h1>Perfumes Selecionados</h1>
    <h3>Alta perfumaria criada pra voce</h3>

    <!-- CARD 1 perfume eternell -->

<p class="fs-1"><strong>Nossos Perfumes</strong></p>

<!-- Linha que organiza e espaça os cards -->
<div class="row my-4 g-2">
    
    <!-- CARD 1: MAISON BLANCHE -->
    <div class="col-md-2 d-md-flex justify-content-center">
        <div class="card h-100 shadow-sm">
            <span class="badge bg-danger position-absolute m-2">Lançamento</span>
            <img src="https://fimgs.net/mdimg/secundar/o.92593.jpg" class="card-img-top" alt="perfume" style="height: 250px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">MAISON BLANCHE</h5>
                <p class="card-text">Rose Éternelle - 300ml</p>
                <div class="mt-auto">
                    <p class="card-text"><small class="text-body-secondary fw-bold fs-5">R$ 489,00</small></p>
                    <a href="#" class="btn btn-primary w-100">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CARD 2: FLORATTA RED PASSION -->
    <div class="col-md-2 d-md-flex d-flex justify-content-center">
        <div class="card h-100 shadow-sm">
            <span class="badge bg-danger position-absolute m-2">Lançamento</span>
            <img src="https://dcdn-us.mitiendanube.com/stores/005/031/830/products/90f863e45310a78db9720341360545f5-82db7f485100e5d0f017540554980731-640-0.webp" class="card-img-top" alt="perfume" style="height: 250px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">OBOTICARIO</h5>
                <p class="card-text">Floratta Red Passion - 75ml</p>
                <div class="mt-auto">
                    <p class="card-text"><small class="text-body-secondary fw-bold fs-5">R$ 229,90</small></p>
                    <a href="#" class="btn btn-primary w-100">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CARD 3: NATURA ESSENCIAL -->
    <div class="col-md-2 d-md-flex d-flex justify-content-center">
        <div class="card h-100 shadow-sm">
            <span class="badge bg-danger position-absolute m-2">Lançamento</span>
            <img src="https://m.media-amazon.com/images/I/61sxFMjeBSL.jpg" class="card-img-top" alt="perfume" style="height: 250px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">NATURA</h5>
                <p class="card-text">Deo Parfum Feminino Essencial - 100ml</p>
                <div class="mt-auto">
                    <p class="card-text"><small class="text-body-secondary fw-bold fs-5">R$ 167,90</small></p>
                    <a href="#" class="btn btn-primary w-100">Adicionar ao carrinho</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>