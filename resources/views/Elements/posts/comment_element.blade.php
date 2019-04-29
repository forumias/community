<div id="comment_html" style="display:none;">
<?php $auth_user = @Auth::user(); ?>
<div>
   <div class="post-card main-card response-card response-card " itemscope="" itemtype="http://schema.org/Comment" itemprop="comment" id="cjul7mmim0007xrs10v1pby16">
      <div class="post-card-data">
         <div class="post-card-details">
            <div class="post-card-header d-flex flex-row justify-content-between ">
               <div class="d-flex flex-row align-items-center" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                  <div>
                     <meta itemprop="image" content="{{ $auth_user->image}}">
                     <meta itemprop="name" content="{{ $auth_user->full_name}}}">
                     <a href="javascript:void(0);" class="profile-pic author-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="{{ $auth_user->image}}" data-src="{{ $auth_user->image}}" data-width="70" data-height="70" alt="Divyesh Joshi's photo" class="lazyautosizes lazyloaded" sizes="40px" style="height:40px; width:40px"></a>
                  </div>
                  <div class="author-name-meta d-flex flex-wrap align-items-center">
                     <p class="author-name"><a href="javascript:void(0);">{{ $auth_user->full_name}}</a></p>
                     <p>·</p>
                     <p class="date-time"><a href="{{url()->full()}}" title="2019-04-19 13:12:05" class="date-time">
                        just now											</a>
                     </p>
                  </div>
               </div>
               <meta itemprop="url" content="{{url()->full()}}">
            </div>
            <meta itemprop="dateCreated" content="2019-04-17T12:46:30.527Z">
            <div class="post-card-content " itemprop="text">
               <p class="text_description">content is loading...
               </p>
            </div>
         </div>
      </div>
      <div>
         <div class="post-card-footer d-flex flex-row justify-content-between">
            <div class="d-flex flex-row align-items-center">
               <div class="d-flex flex-row align-items-center flex-wrap multiple-reactions-wrap">
               </div>
            </div>
            <div class="d-flex flex-row align-items-center right-side-items">
               <div class="dropdown">
                  <a href="#" data-toggle="dropdown" class="hn-flat-btn d-flex flex-row align-items-center">
                     <svg viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                     </svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                     <a class="dropdown-item d-flex flex-row align-items-center" href="#">
                        <svg viewBox="0 0 24 24">
                           <path fill="none" d="M0 0h24v24H0V0z"></path>
                           <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
                           <circle cx="12" cy="16" r="1"></circle>
                           <path d="M11 7h2v7h-2z"></path>
                        </svg>
                        <span>Delete</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="replies-container">
            <div class="single-reply-card-wrapper">
               <div class="single-reply-card write-reply-card">
                  <div class="reply-header d-flex flex-row align-items-center justify-content-between">
                     <div class="d-flex flex-row align-items-center">
                        <a href="https://hashnode.com/@john123" class="profile-pic prof-pic drop-theme-arrows drop-target"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1543775253858/B1AzNobk4.png?w=70&amp;h=70&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1543775253858/B1AzNobk4.png?w=70&amp;h=70&amp;fit=crop&amp;crop=faces&amp;auto=format,enhance&amp;q=60" data-width="70" data-height="70" alt="john's photo" class="lazyautosizes lazyloaded" sizes="32px"></a><a href="/@john123" class="prof-name">john</a>
                     </div>
                  </div>
                  <div class="write-reply-placeholder custom_write">
                     <p>Reply to this…</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>