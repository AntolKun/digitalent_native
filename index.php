<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- carousel start -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/gam1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/gam2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/gam3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel end -->

    <!-- navbar start -->
    <nav class="navbar px-5 navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/digitalent">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/digitalent/pesan.php">Pesan Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/digitalent/riwayat.php">Riwayat Pesan</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- card wisata start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pt-4 px-4">
                <div class="row mt-4">
                    <div class="col-lg-4 mt-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://asset.kompas.com/crops/ADE0-xNCNyAIvoRpndo5Oy7zE7k=/0x0:0x0/750x500/data/photo/2023/08/07/64d08ba053ec3.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Pulau Pahawang</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://asset.kompas.com/crops/ADE0-xNCNyAIvoRpndo5Oy7zE7k=/0x0:0x0/750x500/data/photo/2023/08/07/64d08ba053ec3.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Teluk Hantu</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://asset.kompas.com/crops/ADE0-xNCNyAIvoRpndo5Oy7zE7k=/0x0:0x0/750x500/data/photo/2023/08/07/64d08ba053ec3.jpg" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Teluk Hantu</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://asset.kompas.com/crops/JH2snjV8P4cK14NBik5YQMbiB3w=/15x153:704x613/750x500/data/photo/2023/06/24/64971eeb98ff8.jpeg" alt="Card image cap" />
                            <div class="card-body">
                                <h4 class="card-title">Pulau Tegal Mas</h4>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch mt-4 pt-4">
                <div id="videos" class="row">
                    <!-- YouTube videos will be inserted here -->
                </div>
            </div>
        </div>
    </div>
    <!-- card wisata end-->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('listMovies.json')
                .then(response => response.json())
                .then(data => {
                    const videosContainer = document.getElementById('videos');

                    data.forEach(video => {
                        const videoElement = document.createElement('div');
                        videoElement.classList.add('col-12', 'mb-4');
                        videoElement.innerHTML = `
                            <iframe width="100%" height="315" src="${video.link}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        `;
                        videosContainer.appendChild(videoElement);
                    });
                })
                .catch(error => console.error('Error loading the JSON file:', error));
        });
    </script>
</body>

</html>