<!--projects carousels and descriptions -->
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="projects">
    <!-- projects -->
    <div class="w-75 projects mt-lg-4 mb-5">
        <h2 class="mb-5 section-header mt-lg-5">Projects</h2>

        <!-- project type tabs -->
        <div class="subheading">Project Type</div>
        <ul class="nav nav-pills nav-justified" id="tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="web-tab"
                   data-toggle="tab" href="#web" role="tab"
                   aria-controls="web" aria-selected="true">
                    Web Development
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="java-tab"
                   data-toggle="tab" href="#java" role="tab"
                   aria-controls="java" aria-selected="false">
                    Java Development
                </a>
            </li>
        </ul>
        <!-- project type tabs -->

        <!-- project tabs content -->
        <div class="tab-content pt-3" id="tabcontent">
            <?php include 'web.php' ?>
            <?php include 'java.php' ?>
        </div>
        <!-- project tabs content -->
    </div>
    <!-- projects -->
</section>
<!-- project carousels and descriptions-->