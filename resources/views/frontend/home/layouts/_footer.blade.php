<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="footer-content">
                    <div class="footer-head">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset($company->logo) }}" alt=""></a>
                        </div>
                        <p>
                            Are you looking for professional advice for your new business.Are you looking for professional advice for your new business.Are you looking for professional advice for your new business.
                        </p>

                    </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="footer-content">
                    <div class="footer-head">
                        <h4>Services Link</h4>
                        <ul class="footer-list">
                            @foreach($services as $service)
                                <li><a href="{{ route('services',$service->category) }}">{{ $service->category }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-2 hidden-sm col-xs-12">
                <div class="footer-content">
                    <div class="footer-head">
                        <h4>Tags</h4>
                        <ul class="footer-tags">
                            @foreach($blogs as $blog)
                                <li><a href="{{ route('blog',$blog->category) }}">{{ $blog->category }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="footer-content last-content">
                    <div class="footer-head">
                        <h4>Subscribe</h4>
                        <p>
                            Are you looking for professional advice for your new business.Are you looking for professional advice for your new business
                        </p>
                        <div class="subs-feilds">
                            <div class="suscribe-input">
                                <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-area-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="copyright">
                    <p>
                        Copyright © 2019
                        <a href="#">Mentos</a> All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
