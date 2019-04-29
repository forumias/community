@extends('layouts.front_layout')

@section('content')
<ul class="tranding_select tabs">
        <li class="tab"><a href="#latest" class="waves-effect btn active">Latest</a></li>
        <li class="tab"><a href="#trending" class="waves-effect btn">Trending</a></li>
        <li class="tab"><a href="#featured" class="waves-effect btn">Featured</a></li>   
    </ul>
    <div class="banner_area">
        <img src="{{ asset('public/downloads/openlist-html/all-template/images/banner.jpg')}}" alt="" class="banner_img">
    </div>
    <!-- End Tranding Area -->  
    <!-- Min Container area -->
    <section class="min_container min_pages">
        <div class="section_row">
            <div class="middle_section col" id="infinite_scroll"> 
            <div id="latest"> 
                <!-- Post -->
                <div class="fast_post">
                    <div class="post">
                       <div class="post_content"> 
                            <a href="#" class="post_img">
                                <img src="{{ asset('public/downloads/openlist-html/all-template/images/post.jpg')}}" alt="">
                                <span><i class="ion-android-radio-button-off"></i>Photography</span>
                            </a>
                            <div class="row author_area">
                                <div class="col s4 author">
                                    <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                                    <div class="col s8 media_body">
                                        <a href="#">Masum Rana</a>
                                        <span>5 Minute ago</span>
                                    </div>
                                </div>
                                <div class="col s4 btn_floating"> 
                                    <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                                </div> 
                                <div class="col s4 like_user">
                                    <ul class="like_img">
                                       <li> 
                                            <ul class="hide_sm"> 
                                                <li><a href="#" class="single_l_1"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-1.png')}}" alt=""></a></li>
                                                <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-2.png')}}" alt=""></a></li>
                                                <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-3.png')}}" alt=""></a></li>
                                                <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-4.png')}}" alt=""></a></li>
                                                <li><a href="#" class="mor_like">+8 more</a></li> 
                                            </ul>
                                       </li>
                                        <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown"><i class="ion-android-more-vertical"></i></a>
                                            <!-- Dropdown Structure -->
                                            <ul id="post_dropdown" class="dropdown-content">
                                                <li><a href="#">Report as spam</a></li> 
                                                <li><a href="#">Read later</a></li> 
                                            </ul>
                                        </li>
                                    </ul>  
                                </div>
                            </div>
                            <a href="downloads/openlist-html/all-template/details.html" class="post_heding">Why Is It I Can Never Think Of Anything Good To Make For Supper</a>
                            <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                        </div>
                        <div class="like_comment_area row">
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                                <h6>128k</h6>
                            </div> 
                            <div class="col s4 updown_btn"> 
                                <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                                <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                                <a href="#" class="count_n">483</a>
                            </div>
                            <div class="col s4 updown_btn comment_c"> 
                                <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                                <a href="#" class="count_n">14</a>
                            </div>  
                        </div>
                        <a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>
                    </div><!-- End Post -->
                </div>
                <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="downloads/openlist-html/all-template/details-2.html" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-2.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason Borne</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div> 
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img"> 
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_2"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_2" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="downloads/openlist-html/all-template/details-2.html" class="post_heding">6 Powerful Tips To Creating Testimonials That Sell Your Products Fast</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                </div><!-- End Post --> 
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="downloads/openlist-html/all-template/details.html" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-3.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Masum Rana</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                            </div> 
                            <div class="col s4 like_user">
                                <ul class="like_img">
                                   <li> 
                                        <ul class="hide_sm"> 
                                            <li><a href="#" class="single_l_1"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-1.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-2.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-3.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-4.png')}}" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li> 
                                        </ul>
                                   </li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_3"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_3" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Choosing The Best Audio Player Software For Your Computer</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                    <a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>
                </div><!-- End Post -->
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-4.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason Borne</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div> 
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img"> 
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_4"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_4" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">The Best Way To Fight Poor Health Is To Make Home Cooking Fast And Easy</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                </div><!-- End Post --> 
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-5.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Masum Rana</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                            </div> 
                            <div class="col s4 like_user">
                                <ul class="like_img"> 
                                   <li> 
                                        <ul class="hide_sm"> 
                                            <li><a href="#" class="single_l_1"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-1.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-2.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-3.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-4.png')}}" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li> 
                                        </ul>
                                   </li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_5"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_5" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Get Around Easily With A New York Limousine Service</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div>
                    <a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>
                </div><!-- End Post -->
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-6.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason Borne</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div> 
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img"> 
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_6"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_6" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Skin Cancer Prevention 5 Ways To Protect Yourself From Uv Rays</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                </div><!-- End Post --> 
                <a href="index.html" class="load-mor"></a>
            </div>
            <div id="trending"> 
                <!-- Post -->
                <div class="fast_post"> 
                    <div class="post">
                       <div class="post_content"> 
                            <a href="#" class="post_img">
                                <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-2.jpg')}}" alt="">
                                <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                            </a>
                            <div class="row author_area">
                                <div class="col s4 author">
                                    <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                    <div class="col s8 media_body">
                                        <a href="#">Jason Borne</a>
                                        <span>5 Minute ago</span>
                                    </div>
                                </div> 
                                <div class="col s4 like_user offset-s4">
                                    <ul class="like_img"> 
                                        <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_2"><i class="ion-android-more-vertical"></i></a>
                                            <!-- Dropdown Structure -->
                                            <ul id="post_dropdown_2" class="dropdown-content">
                                                <li><a href="#">Report as spam</a></li> 
                                                <li><a href="#">Read later</a></li> 
                                            </ul>
                                        </li>
                                    </ul>  
                                </div>
                            </div>
                            <a href="#" class="post_heding">6 Powerful Tips To Creating Testimonials That Sell Your Products Fast</a>
                            <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                       </div>
                        <div class="like_comment_area row">
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                                <h6>128k</h6>
                            </div> 
                            <div class="col s4 updown_btn"> 
                                <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                                <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                                <a href="#" class="count_n">483</a>
                            </div>
                            <div class="col s4 updown_btn comment_c"> 
                                <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                                <a href="#" class="count_n">14</a>
                            </div>  
                        </div> 
                    </div><!-- End Post --> 
                </div>
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-3.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Masum Rana</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                            </div> 
                            <div class="col s4 like_user">
                                <ul class="like_img">
                                   <li> 
                                        <ul class="hide_sm"> 
                                            <li><a href="#" class="single_l_1"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-1.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-2.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-3.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-4.png')}}" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li> 
                                        </ul>
                                   </li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_3"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_3" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Choosing The Best Audio Player Software For Your Computer</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                    <a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>
                </div><!-- End Post -->
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-4.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason Borne</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div> 
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img"> 
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_4"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_4" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">The Best Way To Fight Poor Health Is To Make Home Cooking Fast And Easy</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                </div><!-- End Post --> 
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-5.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Masum Rana</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                            </div> 
                            <div class="col s4 like_user">
                                <ul class="like_img"> 
                                   <li> 
                                        <ul class="hide_sm"> 
                                            <li><a href="#" class="single_l_1"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-1.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-2.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-3.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-4.png')}}" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li> 
                                        </ul>
                                   </li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_5"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_5" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Get Around Easily With A New York Limousine Service</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div>
                    <a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>
                </div><!-- End Post -->
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-6.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason Borne</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div> 
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img"> 
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_6"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_6" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Skin Cancer Prevention 5 Ways To Protect Yourself From Uv Rays</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                </div><!-- End Post --> 
                <a href="index.html" class="load-mor"></a>
            </div>  
            <div id="featured"> 
                <!-- Post -->
                <div class="fast_post"> 
                   <!-- Post -->
                    <div class="post">
                       <div class="post_content"> 
                            <a href="#" class="post_img">
                                <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-3.jpg')}}" alt="">
                                <span><i class="ion-android-radio-button-off"></i>Technology</span>
                            </a>
                            <div class="row author_area">
                                <div class="col s4 author">
                                    <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                                    <div class="col s8 media_body">
                                        <a href="#">Masum Rana</a>
                                        <span>5 Minute ago</span>
                                    </div>
                                </div>
                                <div class="col s4 btn_floating"> 
                                    <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                                </div> 
                                <div class="col s4 like_user">
                                    <ul class="like_img">
                                       <li> 
                                            <ul class="hide_sm"> 
                                                <li><a href="#" class="single_l_1"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-1.png')}}" alt=""></a></li>
                                                <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-2.png')}}" alt=""></a></li>
                                                <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-3.png')}}" alt=""></a></li>
                                                <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-4.png')}}" alt=""></a></li>
                                                <li><a href="#" class="mor_like">+8 more</a></li> 
                                            </ul>
                                       </li>
                                        <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_3"><i class="ion-android-more-vertical"></i></a>
                                            <!-- Dropdown Structure -->
                                            <ul id="post_dropdown_3" class="dropdown-content">
                                                <li><a href="#">Report as spam</a></li> 
                                                <li><a href="#">Read later</a></li> 
                                            </ul>
                                        </li>
                                    </ul>  
                                </div>
                            </div>
                            <a href="#" class="post_heding">Choosing The Best Audio Player Software For Your Computer</a>
                            <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                       </div>
                        <div class="like_comment_area row">
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                                <h6>128k</h6>
                            </div> 
                            <div class="col s4 updown_btn"> 
                                <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                                <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                                <a href="#" class="count_n">483</a>
                            </div>
                            <div class="col s4 updown_btn comment_c"> 
                                <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                                <a href="#" class="count_n">14</a>
                            </div>  
                        </div> 
                        <a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>
                    </div><!-- End Post -->
                </div>
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-4.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason Borne</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div> 
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img"> 
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_4"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_4" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">The Best Way To Fight Poor Health Is To Make Home Cooking Fast And Easy</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                </div><!-- End Post --> 
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-5.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Masum Rana</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 btn_floating"> 
                                <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                            </div> 
                            <div class="col s4 like_user">
                                <ul class="like_img"> 
                                   <li> 
                                        <ul class="hide_sm"> 
                                            <li><a href="#" class="single_l_1"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-1.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-2.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-3.png')}}" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="{{ asset('public/downloads/openlist-html/all-template/images/like-client-4.png')}}" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li> 
                                        </ul>
                                   </li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_5"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_5" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Get Around Easily With A New York Limousine Service</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div>
                    <a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>
                </div><!-- End Post -->
               <!-- Post -->
                <div class="post">
                   <div class="post_content"> 
                        <a href="#" class="post_img">
                            <img src="{{ asset('public/downloads/openlist-html/all-template/images/post-6.jpg')}}" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-2.jpg')}}" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason Borne</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div> 
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img"> 
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_6"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_6" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li> 
                                            <li><a href="#">Read later</a></li> 
                                        </ul>
                                    </li>
                                </ul>  
                            </div>
                        </div>
                        <a href="#" class="post_heding">Skin Cancer Prevention 5 Ways To Protect Yourself From Uv Rays</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>
                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating"> 
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div> 
                        <div class="col s4 updown_btn"> 
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a> 
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c"> 
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                            <a href="#" class="count_n">14</a>
                        </div>  
                    </div> 
                </div><!-- End Post --> 
                <a href="index.html" class="load-mor"></a>
            </div>  
            </div>
            <!-- left side bar -->
           @include('../Elements/left_side_bar')
            <!-- Right side bar --> 
            @include('../Elements/rigth_side_bar')
        </div>
    </section>
    @endsection