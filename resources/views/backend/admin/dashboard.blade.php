@extends('backend.admin.layouts.master')
@section('contentBody')
    <div class="row gutter-20">
        <div class="col-md-4">
            <div class="panel">
                <!-- Mini Stats Panel Start -->
                <div class="miniStats--panel">
                    <div class="miniStats--header bg-darker">
                        <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#2bb3c0">5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6</p>

                    </div>

                    <div class="miniStats--body">
                        <i class="miniStats--icon fa fa-sort-numeric-down text-blue"></i>

                        <h3 class="miniStats--title h4"></h3>
                        <p class="miniStats--num text-blue"></p>
                    </div>
                </div>
                <!-- Mini Stats Panel End -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <!-- Mini Stats Panel Start -->
                <div class="miniStats--panel">
                    <div class="miniStats--header bg-darker">
                        <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#e16123">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>


                    </div>

                    <div class="miniStats--body">
                        <i class="miniStats--icon fa fa-sort-numeric-down  text-orange"></i>


                        <h3 class="miniStats--title h4"></h3>
                        <p class="miniStats--num text-orange"></p>
                    </div>
                </div>
                <!-- Mini Stats Panel End -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel">
                <!-- Mini Stats Panel Start -->
                <div class="miniStats--panel">
                    <div class="miniStats--header bg-darker">
                        <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>


                    </div>

                    <div class="miniStats--body">
                        <i class="miniStats--icon fa fa-sort-numeric-up text-green"></i>


                        <h3 class="miniStats--title h4"></h3>
                        <p class="miniStats--num text-green"></p>
                    </div>
                </div>
                <!-- Mini Stats Panel End -->
            </div>
        </div>

        <div class="col-xl-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-success">Companies</h3>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table style--2">
                            <thead>
                            <tr>
                                <th class="text-info">#</th>
                                <th class="text-info">Name</th>
                                <th class="text-info">Status</th>
                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <a href="#" class="addProduct btn btn-lg btn-rounded btn-success">
                        View All</a>
                </div>


            </div>
        </div>
        <div class="col-xl-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-success"></h3>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table style--2">
                            <thead>
                            <tr>
                                <th class="text-info">#</th>
                                <th class="text-info">Name</th>
                                <th class="text-info"></th>
                                <th class="text-info">Status</th>
                            </tr>
                            </thead>
                            <tbody>



                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <a href="#" class="addProduct btn btn-lg btn-rounded btn-success">
                        View All </a>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title text-success"></h3>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table style--2">
                            <thead>
                            <tr>
                                <th class="text-info">#</th>
                                <th class="text-info"></th>
                                <th class="text-info"></th>
                                <th class="text-info"></th>
                                <th class="text-info"></th>
                                <th class="text-info"></th>
                                <th class="text-info"></th>
                                <th class="text-info"></th>
                            </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <a href="#" class="addProduct btn btn-lg btn-rounded btn-success">View All</a>
                </div>
            </div>
        </div>

    </div>
@endsection

