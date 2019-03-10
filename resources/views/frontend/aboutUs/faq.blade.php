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
                                <h2><span class="color">{{ $title }}</span></h2>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>{{ $title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcumb Area -->
    <!-- Start FAQ area -->
    <div class="faq-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <!-- Start Column Start -->
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="company-faq">
                        <div class="sub-headline">
                            <h4>Important FAQ</h4>
                        </div>
                        <div class="faq-full">
                            <div class="faq-details">
                                <div class="panel-group" id="accordion">
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                    <span class="acc-icons"></span>How to successful our mission and vision
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                    <span class="acc-icons"></span>Clients satisfaction make company Value.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                    <span class="acc-icons"></span>World class creative design and development firm.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check3" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                    <span class="acc-icons"></span>We are the best online flatform
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check4" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                    <span class="acc-icons"></span>Clients satisfaction make company Value.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                </div>
                <!-- End Column -->
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="faq-content">
                        <h4>Have a any qustion?</h4>
                        <div class="faq-quote">
                            <div class="row">
                                <div style="background-color: skyblue;">@include('frontend.home.layouts._messages')</div>
                                @include('frontend.home.layouts._validation_messages')
                                <form  class="contact-form" action="{{ route('question.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="text" name="user_name" placeholder="Name" />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="email" name="user_email" placeholder="Email" />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="text" name="subject" placeholder="Subject" />
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <textarea class="form-control" id="message-box" cols="30" rows="6" name="message" placeholder="Message"></textarea>
                                            <br/>
                                            <input style="background-color: #80c32f" class="add-btn contact-btn" type="submit" value="Submit" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Column -->
            </div>
        </div>
    </div>
@endsection
