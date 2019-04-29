<div id="trending"> 
@foreach($questions as $post)
        <div class="post">
            <div class="post_content"> 
                @if($post->img != '')
                <a href="#" class="post_img">
                    
                    <img src="{{ asset('public/images/posts/original/'.$post->img )}}" alt="">
                    <span><i class="ion-android-radio-button-off"></i>Story</span>
                </a>
                @endif
                <div class="row author_area">
                    <div class="col s5 author">
                        <div class="col s4 media_left"><img src="{{ asset('public/downloads/openlist-html/all-template/images/author-1.jpg')}}" alt="" class="circle"></div>
                        <div class="col s8 media_body">
                            <a href="#">Masum Rana</a>
                            <span>5 Minute ago</span>
                        </div>
                    </div>
                    
                </div>
                <a href="#" class="post_heding">{{$post->title}}</a>
                <p><?php echo nl2br($post->description);?></p>
            </div>
            <div class="like_comment_area row">
                <div class="col s4 btn_floating"> 
                    <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                    <h6>128k</h6>
                </div> 
                <div class="col s4 updown_btn"> 
                    
                </div>
                <div class="col s4 updown_btn comment_c"> 
                    <a href="#"><i class="ion-ios-chatboxes-outline"></i></a> 
                    <a href="#" class="count_n">14</a>
                </div>  
            </div>
            <?php /*<a href="#post_modal" class="submit_open_list modal-trigger">Submit Open List</a>*/?>
        </div><!-- End Post -->
    @endforeach
</div>  