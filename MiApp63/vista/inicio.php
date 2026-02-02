<?php include __DIR__ . '/layout/header.php'; ?>
<div class="container mt-5 text-center">
    <h2>Bienvenidos al Sistema de Gestion Academica</h2>
    <p class="lead">Gestion de Alumnos, docentes y cursos de forma eficiente y centralizada</p>
    <a class="btn btn-outline-primary" href="index.php?accion=login">Iniciar Sesión</a>
     <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/img1.jpeg" class="d-block mx-auto" alt="Descripción de la imagen 1" style="max-height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/img2.jpeg" class="d-block mx-auto" alt="Descripción de la imagen 2" style="max-height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/img3.jpeg" class="d-block mx-auto" alt="Descripción de la imagen 3" style="max-height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/img4.jpg" class="d-block mx-auto" alt="Descripción de la imagen 4" style="max-height: 500px;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/img5.png" class="d-block mx-auto" alt="Descripción de la imagen 5" style="max-height: 500px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/layout/footer.php'; ?>