@extends('frontend.home.layouts.master')
@section('contents')
    <div class="single-services-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="row">

                        <!-- single-well start-->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-well">
                                <a href="#">
                                    <h3>{{ $services->title }}</h3>
                                </a>
                                <p>{{ $services->short_description }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-page single-well">
                                <div class="page-img elec-page">
                                    <img src="{{ asset($services->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- End single page -->

                    </div>
                    <!-- end Row -->
                    <div class="row mar-row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-well">
                                <a href="#">
                                    <h4>What kind of business you have could investment</h4>
                                </a>
                                <p>{{ $services->description }}</p>
                            </div>
                        </div>
                        <!-- End single page -->
                    </div>

                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="page-head-left">
                        <!-- strat single area -->
                        <div class="single-page-head">
                            <div class="left-menu">
                                <ul>
                                    @foreach($all_service as $service)
                                    <li><a href="{{ route('service.details',$service->slug_title) }}">{{ $service->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
