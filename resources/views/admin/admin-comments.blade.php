@extends('adminLayout')

@section('content')

    <section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <h3>Comments
                        <small>and reviews</small>
                    </h3>
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="with_border with_padding">

                        <div class="row admin-table-filters">
                            <div class="col-lg-9">

                                <form action="./" class="form-inline filters-form">
											<span>
												<label class="grey" for="with-selected">With Selected:</label>
												<select class="form-control with-selected" name="with-selected" id="with-selected">
													<option value="">-</option>
													<option value="approve">Approve</option>
													<option value="publish">Publish</option>
													<option value="delete">Delete</option>
												</select>
											</span>

                                    <span>
												<label class="grey" for="orderby">Sort By:</label>
												<select class="form-control orderby" name="orderby" id="orderby">
													<option value="date" selected>Date</option>
													<option value="user">User</option>
													<option value="title">Title</option>
													<option value="title">Rating</option>
													<option value="status">Status</option>
												</select>
											</span>

                                    <span>
												<label class="grey" for="showcount">Show:</label>
												<select class="form-control showcount" name="showcount" id="showcount">
													<option value="10" selected>10</option>
													<option value="20">20</option>
													<option value="30">30</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
											</span>
                                </form>

                            </div>
                            <!-- .col-* -->
                            <div class="col-lg-3 text-lg-right">
                                <div class="widget widget_search">

                                    <form method="get" class="searchform" action="./">
                                        <!-- <div class="form-group-wrap"> -->
                                        <div class="form-group">
                                            <label class="sr-only" for="widget-search">Search for:</label>
                                            <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                                        </div>
                                        <button type="submit" class="theme_button color1">Search</button>
                                        <!-- </div> -->
                                    </form>
                                </div>

                            </div>
                            <!-- .col-* -->
                        </div>
                        <!-- .row -->


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <th>Comment:</th>
                                    <th>Rating:</th>
                                    <th>Date:</th>
                                    <th>User:</th>
                                    <th>Status:</th>
                                </tr>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_comment.html">
                                                Consectetur adipisicing elit...
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="media-middle">
                                        <div class="star-rating" title="Rated 4.00 out of 5">
													<span style="width:80%">
														<strong class="rating">4.50</strong> out of 5
													</span>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">Alex Walker</a>
                                                </h5>
                                                &lt;email@example.com&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        Published
                                    </td>
                                </tr>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_comment.html">
                                                Inventore accusamus illo...
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="media-middle">
                                        <div class="star-rating" title="Rated 2.50 out of 5">
													<span style="width:50%">
														<strong class="rating">2.50</strong> out of 5
													</span>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">Janet C. Donnalds</a>
                                                </h5>
                                                &lt;newemail@example.com&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        Published
                                    </td>
                                </tr>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_comment.html">
                                                Cadipisicing elit...
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="media-middle">
                                        <div class="star-rating" title="Rated 1.00 out of 5">
													<span style="width:20%">
														<strong class="rating">1.50</strong> out of 5
													</span>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">Victoria Grow</a>
                                                </h5>
                                                &lt;anotheremail@example.com&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        Review
                                    </td>

                                </tr>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_comment.html">
                                                Consectetur adipisicing elit...
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="media-middle">
                                        <div class="star-rating" title="Rated 4.50 out of 5">
													<span style="width:90%">
														<strong class="rating">4.50</strong> out of 5
													</span>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/01.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">Alex Walker</a>
                                                </h5>
                                                &lt;email@example.com&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        Published
                                    </td>
                                </tr>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_comment.html">
                                                Inventore accusamus illo...
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="media-middle">
                                        <div class="star-rating" title="Rated 5.00 out of 5">
													<span style="width:100%">
														<strong class="rating">5.00</strong> out of 5
													</span>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/02.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">Janet C. Donnalds</a>
                                                </h5>
                                                &lt;newemail@example.com&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        Draft
                                    </td>
                                </tr>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="admin_comment.html">
                                                Cadipisicing elit...
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="media-middle">
                                        <div class="star-rating" title="Rated 4.50 out of 5">
													<span style="width:90%">
														<strong class="rating">4.50</strong> out of 5
													</span>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/team/03.jpg" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a href="admin_profile.html">Victoria Grow</a>
                                                </h5>
                                                &lt;anotheremail@example.com&gt;
                                            </div>
                                        </div>
                                    </td>
                                    <td class="media-middle">
                                        Published
                                    </td>

                                </tr>
                            </table>
                        </div>
                        <!-- .table-responsive -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="pagination highlightlinks">
                                <li class="disabled">
                                    <a href="#">
                                        <span class="sr-only">Prev</span>
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>
                                    <a href="#">
                                        <span class="sr-only">Next</span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-md-right">
                            Showing 1 to 6 of 12 items
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row main columns -->
        </div>
        <!-- .container -->
    </section>
@endsection
