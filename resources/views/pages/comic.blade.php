@extends('../layout/wrapper', ['active' => 'comic'])

@section('title', 'comic')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/comic.style.css') }}" />
@endsection

@section('content')
    <!-- body ---------------------------------------->
    <div class="container-sm card-popular" style="margin-top: 10px">
        <div class="row">
            <div class="body-area col-lg-9 col-sm-12 col-12">
                <!-- <div class="container-sm"> -->
                <div class="section-comic-menu">
                    <h4 class="mt-1 mb-1">
                        <a href="/menuComic.html" class="text-decoration-none btn-color-orange">⮞Comic </a>
                    </h4>
                </div>
                <div class="section-comic-menu">
                    <div class="row row-dropdown">
                        <div class="col-dropdown col-lg-3 col-6">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle btn-gendre" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Gendre
                                </button>
                                <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item font" href="#">All Gendre</a>
                                    </li>
                                    <li><a class="dropdown-item font" href="#">Action</a></li>
                                    <li>
                                        <a class="dropdown-item font" href="#">Mistery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-dropdown col-lg-3 col-6">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle btn-gendre" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Studio
                                </button>
                                <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item font" href="#">Marverl</a>
                                    </li>
                                    <li><a class="dropdown-item font" href="#">DC</a></li>
                                    <li><a class="dropdown-item font" href="#">Disney</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-dropdown col-lg-3 col-6">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle btn-gendre" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Status
                                </button>
                                <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item font" href="#">Ongoing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item font" href="#">Complete</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item font" href="#">Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-dropdown col-lg-3 col-6">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle btn-gendre" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Order By
                                </button>
                                <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item font" href="#">A-Z</a></li>
                                    <li><a class="dropdown-item font" href="#">Z-A</a></li>
                                    <li>
                                        <a class="dropdown-item font" href="#">Popolar</a>
                                    </li>
                                    <li><a class="dropdown-item font" href="#">Added</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <!-- card popular -->
                <div class="box-popular-menu">
                    <section>Popular</section>
                    <!-- <h1 style="border: 1px solid #fff;">Popular</h1> -->
                    <div class="row row-card">
                        @include('../components/card-comic-component', [
                            'title' => 'Deadpool',
                            'thumbnail' =>
                                'https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261617/Universe%20Of%20Hero/Resource/deadpool.jpg',
                        ])
                        @include('../components/card-comic-component', [
                            'title' => 'Panji',
                            'thumbnail' =>
                                'https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261611/Universe%20Of%20Hero/Resource/image-24.png',
                        ])
                    </div>
                </div>
                <!-- end body -->
                <!-- end body -->
            </div>
            <!-- section area -->
            <div class="section-area col-lg-3 col-sm-12 col-12">
                <div class="section-area">
                    <!-- recom area -->
                    <div class="rec-area">
                        <section class="rec-area-section">Recomend</section>
                        <a href="/comic.html" style="text-decoration: none" class="rec-area-com">
                            <div class="rec-area-img col-4">
                                <img src="https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261617/Universe%20Of%20Hero/Resource/deadpool.jpg"
                                    alt="" />
                            </div>
                            <div class="rec-area-des col-8">
                                <h5>Deadpool (2018)</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec aliquet, nisi vel consectetur egestas, nisi nisi
                                    consectetur ipsum, eget consectetur nisl nisi velit.
                                </p>
                            </div>
                        </a>
                        <a href="/comic.html" style="text-decoration: none" class="rec-area-com">
                            <div class="rec-area-img col-4">
                                <img src="https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261617/Universe%20Of%20Hero/Resource/deadpool.jpg"
                                    alt="" />
                            </div>
                            <div class="rec-area-des col-8">
                                <h5>Deadpool (2018)</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec aliquet, nisi vel consectetur egestas, nisi nisi
                                    consectetur ipsum, eget consectetur nisl nisi velit.
                                </p>
                            </div>
                        </a>
                        <a href="/comic.html" style="text-decoration: none" class="rec-area-com">
                            <div class="rec-area-img col-4">
                                <img src="https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261617/Universe%20Of%20Hero/Resource/deadpool.jpg"
                                    alt="" />
                            </div>
                            <div class="rec-area-des col-8">
                                <h5>Deadpool (2018)</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec aliquet, nisi vel consectetur egestas, nisi nisi
                                    consectetur ipsum, eget consectetur nisl nisi velit.
                                </p>
                            </div>
                        </a>
                        <a href="/comic.html" style="text-decoration: none" class="rec-area-com">
                            <div class="rec-area-img col-4">
                                <img src="https://res.cloudinary.com/dhuvbrmgg/image/upload/v1656261617/Universe%20Of%20Hero/Resource/deadpool.jpg"
                                    alt="" />
                            </div>
                            <div class="rec-area-des col-8">
                                <h5>Deadpool (2018)</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Donec aliquet, nisi vel consectetur egestas, nisi nisi
                                    consectetur ipsum, eget consectetur nisl nisi velit.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end section area -->
        </div>
    </div>
@endsection
