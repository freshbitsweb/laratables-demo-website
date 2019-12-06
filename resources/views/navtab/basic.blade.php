<nav>
    <div class="nav nav-tabs" id="nav-tab-basic" role="tablist">

        <a class="nav-item nav-link active"
            id="nav-image-tab-basic"
            data-toggle="tab"
            href="#nav-image-basic"
            role="tab"
            aria-controls="nav-image"
            aria-selected="false"
        >
            Screenshots
        </a>

        <a class="nav-item nav-link"
            id="nav-client-tab-basic"
            data-toggle="tab"
            href="#nav-client-basic"
            role="tab"
            aria-controls="nav-client"
            aria-selected="false"
        >
            Client Side
        </a>

        <a class="nav-item nav-link"
            id="nav-Controller-tab-basic"
            data-toggle="tab"
            href="#nav-controller-basic"
            role="tab"
            aria-controls="nav-controller"
            aria-selected="false"
        >
            Controller
        </a>

        <a class="nav-item nav-link"
            id="nav-output-tab-basic"
            data-toggle="tab"
            href="#nav-output-basic"
            role="tab"
            aria-controls="nav-output"
            aria-selected="false"
        >
            Output
        </a>

    </div>
</nav>
<div class="tab-content" id="nav-tabContent-basic">

    <div class="tab-pane fade show active"
        id="nav-image-basic"
        role="tabpanel"
        aria-labelledby="nav-image-tab-basic"
    >

        @include('navtab.screenshots.basic.images')

    </div>

    <div class="tab-pane fade"
        id="nav-client-basic"
        role="tabpanel"
        aria-labelledby="nav-client-tab-basic"
    >

        @include('navtab.codes.basic.client')

    </div>

    <div class="tab-pane fade"
        id="nav-controller-basic"
        role="tabpanel"
        aria-labelledby="nav-controller-tab-basic"
    >

        @include('navtab.codes.basic.controller')

    </div>

    <div class="tab-pane fade"
        id="nav-output-basic"
        role="tabpanel"
        aria-labelledby="nav-output-tab-basic"
    >
        <br>
        @include('navtab.output.basic.laratable')

    </div>

</div>
