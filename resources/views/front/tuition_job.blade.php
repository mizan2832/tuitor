@extends('front.master')
@section('content')
    <<div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-md-8">
                <h1 class="my-4">
                    Tuition
                    <small>Job</small>
                </h1>
                <!-- Blog post-->
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h3 class="card-title">Need a Female Tuitor for A level Student</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a class="btn btn-primary" href="#!">Apply →</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2021 
                    </div>
                </div>
                <!-- Blog post-->
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a class="btn btn-primary" href="#!">Apply →</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2021 
        
                    </div>
                </div>
                <!-- Blog post-->
                <div class="card mb-4">
                    
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a class="btn btn-primary" href="#!">Apply →</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2021 
                    </div>
                </div>
                <!-- Pagination-->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item"><a class="page-link" href="#!">← Older</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">Newer →</a></li>
                </ul>
            </div>
            <!-- Side widgets-->
            <div class="col-md-4">
                <!-- Search widget-->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for..." />
                            <span class="input-group-append"><button class="btn btn-secondary" type="button">Go!</button></span>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!</div>
                </div>
            </div>
        </div>
    </div>
@endsection