<?php
	include "./include/header2.php";
?>
 <!-- page output -->
    <div class="padding-tb-40px background-light-grey">
        <div class="container">

            <div class="row">

                <!-- Sidebar -->
                <div class="col-lg-3 sticky-sidebar">
                    <!-- Hotels Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>flight  Search</span></h4>
                        <div class="search-filter">
                            <div class="form-group margin-bottom-5px">
                                <label>From</label>
                                <div class="destination"><input type="text" class="input-text full-width" placeholder="Saudi Arabia"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>To</label>
                                <div class="destination"><input type="text" class="input-text full-width" placeholder="United States , United States"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Departing On</label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Arriving On</label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017"></div>
                            </div>
                            <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> flight  Search</a>
                        </div>
                    </div>
                    <!-- //  Hotels Search -->

                    <!-- Price Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>Price</span></h4>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                $0 - $50
                              </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                $50 - $100
                              </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                $100 - $500
                              </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                $500 - $1000
                              </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                $1000 - $10,000
                              </label>
                        </div>
                        <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Refresh  Search</a>
                    </div>
                    <!-- Price Search -->

                    <!-- Price Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>Flight Type</span></h4>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                $0 - $50
                              </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                Business
                              </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                First class
                              </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                Economy
                              </label>
                        </div>
                        <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Refresh  Search</a>
                    </div>
                    <!-- Price Search -->

                </div>
                <!-- //  Sidebar -->

                <!-- Content -->
                <div class="col-lg-9">

                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->


                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->


                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->


                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->


                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->


                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->


                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->


                    <!-- flight post -->
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x200" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-20px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark"><span class="margin-right-30px">from: Riyadh</span>to: Paris</a></h3>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-grey-1 text-grey-2 text-center text-uppercase pull-top-30px">Booking Now </a>
                                    <small class="text-uppercase text-extra-small margin-right-30px">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-up margin-right-5px"></i>
                                            Desparture :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <small class="text-uppercase text-extra-small">
                                            <a href="#" class="text-grey-4"><i class="fa fa-chevron-down margin-right-5px"></i>
                                            Return :  <span class="text-third-color margin-right-5px">28/3/2017</span> </a>
                                        </small>
                                    <div class="claerfix"></div>
                                    <div class="margin-top-8px padding-top-8px text-uppercase text-extra-small border-top-1 border-grey-1">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="margin-right-40px">Oneway flight</span> 2 Sotp</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // flight post -->

                    <ul class="pagination pagination-md ">
                        <li class="page-item disabled"><a class="page-link rounded-0" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
                    </ul>
                </div>
                <!-- //  Content -->

            </div>
            <!--// row -->

        </div>
    </div>
    <!-- //  page output -->


 
<?php
	include "./include/footer.php";
?>