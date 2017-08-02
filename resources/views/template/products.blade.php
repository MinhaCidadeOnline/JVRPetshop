@extends('template.master.app')

@section('template')

    @include('template.includes.header')

    <div class="main-title" style="background-color: #f2f2f2">
        <div class="container">
            <h1 class="main-title__primary">Our Services</h1>
            <h3 class="main-title__secondary">WHAT WE CAN DO FOR YOU</h3>
        </div>
    </div>
   <div class="spacer"></div>
    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12 col-md-12" role="main">
                    <div class="row">

                        @for($i =  0;$i < 40; $i++)
                            <div class="col-md-4 page-box page-box--block">
                                <a class="page-box__picture" href="services-content/design-and-build.html">
                                    <img width="360" height="240" src="images/demo/content/content_1.jpg" alt="Content Image"/>
                                </a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title text-uppercase">
                                        <a href="services-content/design-and-build.html">Design and Build</a>
                                    </h5>
                                    We aim to eliminate the task of dividing your project between different architecture and construction company. We are a company
                                    that offers design and build services for you from initial sketches to the final construction.
                                    <p><a href="services-content/design-and-build.html" class="read-more read-more--page-box">Read more</a></p>
                                </div>
                            </div>
                        @endfor

                    </div>

                </main>

            </div>
        </div>
    </div>

    @include('template.includes.footer')

@endsection