@extends('frontend.home.layouts.master')
@section('contents')
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb">
                        <div class="bread-inner">
                            <div class="section-headline white-headline">
                                <h2>Our <span class="color">Projects</span></h2>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-area bg-color-2 area-padding">
        <div class="container">
            <div class="row">
                <div class="project-content">
                    @foreach($all_project as $project)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="{{ asset($project->image) }}" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <a class="venobox" data-gall="myGallery" href="{{  asset($project->image) }}">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <h4><a href="{{ route('project.details',$project->slug_title) }}"> {{ $project->title }}</a></h4>
                                <p>{{ $project->short_description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End main content -->
    </div>
@endsection
