<!-- java projects -->
<div class="tab-pane fade" id="java" role="tabpanel" aria-labelledby="java-tab">
    <h3 class="mb-2 mt-5">Maze Generator</h3>
    <p class="lead">
        <a data-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false"
           aria-controls="multiCollapseExample5">Description <i class="fas fa-level-down-alt"></i></a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample5">
                <div class="card card-body">
                    Generates a maze with a user-specified number of cells(up to 1 million), using an adjacency
                    list
                    based directed graph class and disjoint sets class(optimized with union-by-rank
                    and path compression). After generation, the user is provided with the option to solve with
                    either a breadth-first or depth-first search routine and highlights the route.
                    Code can be provided on request.
                </div>
            </div>
        </div>
    </div>

    <div class="bd-example mt-2">
        <div id="carouselExampleCaptions5" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions5" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions5" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions5" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions5" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions5" data-slide-to="4"></li>
                <li data-target="#carouselExampleCaptions5" data-slide-to="5"></li>
                <li data-target="#carouselExampleCaptions5" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/maze/start.png" class="d-block w-100" alt="start">
                </div>
                <div class="carousel-item">
                    <img src="images/maze/solve_start.png" class="d-block w-100" alt="solve start">
                </div>
                <div class="carousel-item">
                    <img src="images/maze/mid.png" class="d-block w-100" alt="mid">
                </div>
                <div class="carousel-item">
                    <img src="images/maze/solve_mid.png" class="d-block w-100" alt="solve mid">
                </div>
                <div class="carousel-item">
                    <img src="images/maze/full.png" class="d-block w-100" alt="full">
                </div>
                <div class="carousel-item">
                    <img src="images/maze/solve_full1.png" class="d-block w-100" alt="solve full 1">
                </div>
                <div class="carousel-item">
                    <img src="images/maze/solve_full2.png" class="d-block w-100" alt="solve full 2">
                </div>
            </div>
            <a class="carousel-control-prev prev-dark" href="#carouselExampleCaptions5" role="button"
               data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next next-dark" href="#carouselExampleCaptions5" role="button"
               data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="mb-5">
            <p>
                Built using: Java, Maven, JavaFX, and CSS.

            </p>
        </div>
    </div>


    <h3 class="mb-2">Web Crawler</h3>

    <p class="lead">
        <a data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false"
           aria-controls="multiCollapseExample2">Description <i class="fas fa-level-down-alt"></i></a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    GUI that gives a user the ability to create runnable threads that download and analyze web
                    pages. The threads follow
                    the producer/consumer pattern, with the downloading thread producing HTML pages for the
                    analyzer to consume by finding other
                    links on the page as well as commonly used words through each. The threads are managed in a
                    thread pool using an executor object, once
                    the "Stop All Runnable's" button is pressed, the pool is shut down. Code can be provided on
                    request.
                </div>
            </div>
        </div>
    </div>

    <div class="bd-example mt-2">
        <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/web-crawler/before.png" class="d-block w-100" alt="login">
                </div>
                <div class="carousel-item">
                    <img src="images/web-crawler/running.png" class="d-block w-100" alt="teacher">
                </div>
                <div class="carousel-item">
                    <img src="images/web-crawler/end.png" class="d-block w-100" alt="speakers">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="mb-5">
            <p>
                Built using: Java, Maven, JavaFX, and jsoup.
            </p>
        </div>
    </div>
</div>
<!-- java projects -->