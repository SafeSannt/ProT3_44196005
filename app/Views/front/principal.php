<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php if(session()->getFlashdata('perfil')):?>
    <div class="alert alert-danger alert-dismissible">
        <?= session()->getFlashdata('perfil') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container-xl mb-3">
    <div class="row">
        <div class="col"></div>
        <div class="col-md-12">
            <h1>Bienvenidos</h1>
            <p> Les presentamos MyFitt, tu destino definitivo para equiparte y triunfar en el mundo del CrossFit.
                En nuestra tienda, no solo vendemos productos, 
                sino que ofrecemos una experiencia completa diseñada para potenciar tu rendimiento,
                comodidad y estilo en cada sesión de entrenamiento.
            </p>
        </div>
        <div class="col"></div>
    </div>
</div>

<div class="container-xl mb-3">
    <div class="row">
        <div class="col"></div>
        <div class="col-sm-12 col-md-12">
            <h2>Nuestros Productos</h2>
            <p>
                En MyFitt, ofrecemos una amplia gama de productos diseñados específicamente para las 
                necesidades de los practicantes de CrossFit. Desde equipos básicos como barras, discos y 
                cuerda de saltar, ademas de suplementos de primeras marcas ,hasta accesorios de alta calidad como calleras, tobilleras y rodilleras, 
                tenemos todo lo que necesitas para equipar tu gimnasio en casa o box de CrossFit.
            </p>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="container-xl mb-3">
    <div class="row">
        <div class="col-md-6">
            <h3>Equipamento</h3>
            <p>
                En nuestro catálogo encontrarás una amplia selección de artículos de equipamiento de crossfit 
                diseñados para llevar tus entrenamientos al siguiente nivel. Desde pesas y mancuernas de alta calidad 
                hasta discos olímpicos y racks robustos, ofrecemos todo lo que necesitas para construir tu propio 
                gimnasio en casa o equipar tu box de crossfit. Descubre la variedad, calidad y durabilidad que ofrecemos 
                para ayudarte a alcanzar tus metas de fitness y superar tus límites.
            </p>
        </div>
        <div class="col-md-6">
            <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/ball9kg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pelota de 9kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/rack.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Rack</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/sandbag15kg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Sanbag de 15kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/mancuerna10kg.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Mancuerna de 10kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/anillos.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Anillos</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/rusa.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Rusa de 20kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/soga9mts.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Soga de 9mts</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/barra20kg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Barra olímpica de 20kg</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
    
<div class="container-xl mb-3">
    <div class="row">
        <div class="col-md-6">
            <h3>Accesorios</h3>
            <p>
                Explora nuestra colección de accesorios especializados para crossfit, diseñados para 
                brindarte comodidad, protección y rendimiento durante tus entrenamientos. Desde calleras y
                rodilleras que protegen tus articulaciones y previenen lesiones, hasta muñequeras y 
                cinturones que te brindan soporte adicional durante levantamientos pesados, 
                cada uno de nuestros accesorios ha sido cuidadosamente seleccionado para ayudarte a 
                alcanzar tus objetivos de fitness con confianza y seguridad. 
                Descubre cómo nuestros accesorios pueden mejorar tu experiencia de entrenamiento y 
                llevarte más cerca de tu mejor versión.
            </p>
        </div>
        <div class="col-md-6">
            <div id="carouselAutoplaying2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/muñequera.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Muñequera</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/rodillera.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Rodillera</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/callera.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Calleras</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/cuerda.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Cuerda</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/cinturon.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Cinturón</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/magnesio.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Magnesio</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-xl mb-3">
    <div class="row">
        <div class="col-md-6">
            <h3>Suplementos</h3>
            <p>
                Descubre nuestra selección de suplementos especializados para crossfit, diseñados para 
                potenciar tu rendimiento y ayudarte a alcanzar tus objetivos de fitness de manera efectiva.
                Desde creatina para aumentar la fuerza y potencia muscular, hasta proteína para apoyar la 
                recuperación y el crecimiento muscular, y pre-entrenamientos para aumentar la energía y la 
                concentración durante tus sesiones de ejercicio. 
                Eleva tu rendimiento, acelera tu recuperación y alcanza nuevos niveles de éxito con nuestros 
                suplementos de crossfit de confianza.
            </p>
        </div>
        <div class="col-md-6">
            <div id="carouselAutoplaying3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/star-creatine.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Creatina</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/whey-protein.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Proteína</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item "> 
                        <div class="card rounded mx-auto d-block" style="width: 18rem;">
                            <img src="assets/img/pre-work.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pre entreno</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>