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
    <div class="perfume-card">

        <div class="perfume-badge">Lançamento</div>

        <img src="imagens\heart.png" alt="">
        <img src="imagens\Rose Éternelle.webp" alt="Perfume Eternelle">
        <div class="perfume-info">

            <span class="marca">MAISON BLANCHE</span>
            <h3 class="nome">Rose Éternelle</h3>
            <p class="volumetria">300ml </p>

            <div class="preco-container">
                <span class="preco-antigo">R$ 489,00</span>
                

            </div>
            <button class="btn-comprar">Adicionar ao Carrinho</button>
            
        </div>

    </div>

    <!-- CARD 2 perfume Floaratta red passion -->

    <div class="perfume-card">

        <div class="perfume-badge">Lançamento</div>

        <img src="imagens\heart.png" alt="">
        <img src="imagens\Floratta Red Passion Eau de Parfum.webp" alt="Perfume Floratta red passion Eau de Parfum">
        <div class="perfume-info">

            <span class="marca">OBOTICARIO</span>
            <h3 class="nome">Floratta Red Passion Eau de Parfum</h3>
            <p class="volumetria">75ml </p>

            <div class="preco-container">
                <span class="preco-antigo">R$ 229,90</span>
                

            </div>
            <button class="btn-comprar">Adicionar ao Carrinho</button>
            
        </div>

    </div>

    <!-- CARD 3 perfume Feminino essencial atrai  -->
    <div class="perfume-card">

        <div class="perfume-badge">Lançamento</div>

        <img src="imagens\heart.png" alt="">
        <img src="imagens\Deo Parfum Feminino Essencial Atrai.webp" alt="Perfume Deo perfum essencial atrai">
        <div class="perfume-info">

            <span class="marca">NATURA</span>
            <h3 class="nome">Deo Parfum Feminino Essencial Atrai</h3>
            
            <p class="volumetria">100ml </p>

            <div class="preco-container">
                <span class="preco-antigo">R$ 167,90</span>
                

            </div>
            <button class="btn-comprar">Adicionar ao Carrinho</button>
            
        </div>

    </div>




</section>

</body>
</html>