@extends('template.master.app')

@section('template')

    @include('template.includes.header')

    <div class="main-title" style="background-color: #f2f2f2">
        <div class="container">
            <h1 class="main-title__primary">About Us</h1>
            <h3 class="main-title__secondary">A LITTLE SOMETHING ABOUT US</h3>
        </div>
    </div>
   <div class="spacer"></div>
    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12" role="main">
                    <div class="row">
                        <div class="col-md-6">
                            <p>BuildPress Inc traces its roots back to 1989 in Colorado and since then have never looked back. With thousands of
                                successful projects under our belt, we can proudly say that we are one of the most trusted construction companies in
                                Colorado performing both domestic and international construction work.</p>
                            <p>For more than 25 years, Construction has offered a wide range of construction services in Colorado, many other cities
                                of United States and around the world. We strive to maintain the highest standards while exceeding client’s expectations
                                at all levels. We not only honor commitments, but are known for meeting tough deadlines while delivering nothing but the
                                best. We aim to create a responsive client relationship that allows us to meet and even exceed the goals of each of our
                                projects.</p>
                            <p>BuildPress Inc is well known for its innovation and by collaborating successfully with our customers, designers,
                                sub-contractors, consultants as well as suppliers; we have been able to provide more specialized level of services.
                                We are continuously evolving and understand the different aspects of delivering high value construction and complex
                                projects with ease.</p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <a href="images/demo/projects/project1.jpg" data-rel="prettyPhoto" title="Project Image">
                                    <img src="images/demo/projects/medium1.jpg" class="alignnone" alt="Project Image"/>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="spacer"></div>
                </main>
            </div>
        </div><!-- /container -->
    </div>

    @include('template.includes.footer')

@endsection