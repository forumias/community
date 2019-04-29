<div class="hn-widget">
    <div class="widget-header">
        <h3>Recent Posts</h3></div>
    <div class="widget-body recent-activity-body">
		@if($user_posts->count() > 0)
        @foreach($user_posts as $one_post)
        <div class="single-activity-row d-flex flex-row align-items-start">
            <a href="{{ URL::to('/post/detail/'.base64_encode(convert_uuencode($one_post->id))) }}" class="activity-icon">
                <svg viewBox="0 0 500 500"><g fill-rule="nonzero" fill="none"><path d="M358.9375 436.923942H78.8125c-34.2375 0-62.25-27.988011-62.25-62.195579V110.397152c0-18.6586732 12.45-31.0977889 31.125-31.0977889h342.375c18.675 0 31.125 12.4391157 31.125 31.0977889v264.331211c0 34.207568-28.0125 62.195579-62.25 62.195579z" fill="#E6EEFF"></path><path d="M374.5 63.7504683l62.25 62.1955787 37.35-37.3173471c12.45-12.4391158 12.45-31.0977894 0-43.5369052L455.425 26.433121c-12.45-12.4391158-31.125-12.4391158-43.575 0L374.5 63.7504683z" fill="#D92C48"></path><path fill="#FFDE33" d="M374.5 63.7504683l62.25 62.1955787-158.7375 158.598726-74.7 12.439116 12.45-74.634695z"></path><path d="M421.1875 219.239416c-9.3375 0-15.5625 6.219557-15.5625 15.548894v217.684526c0 9.329337-6.225 15.548895-15.5625 15.548895H47.6875c-9.3375 0-15.5625-6.219558-15.5625-15.548895V110.397152c0-9.329336 6.225-15.5488942 15.5625-15.5488942h217.875c9.3375 0 15.5625-6.2195579 15.5625-15.5488947 0-9.3293369-6.225-15.5488948-15.5625-15.5488948H47.6875C22.7875 63.7504683 1 85.5189209 1 110.397152v342.075684c0 24.878232 21.7875 46.646684 46.6875 46.646684h342.375c24.9 0 46.6875-21.768452 46.6875-46.646684V234.78831c0-9.329337-6.225-15.548894-15.5625-15.548894z" fill="#3E3643"></path><path d="M486.55 32.6526789l-18.675-18.6586737c-18.675-18.65867362-46.6875-18.65867362-65.3625 0L206.425 209.910079c-3.1125 3.109779-6.225 6.219558-6.225 9.329337l-12.45 74.634694c0 6.219558 0 9.329337 3.1125 12.439116 3.1125 3.109779 9.3375 6.219558 12.45 6.219558h3.1125l74.7-12.439116c3.1125 0 6.225-3.109779 9.3375-3.109779L486.55 101.067816C492.775 91.7384788 499 79.2993631 499 66.8602473c0-12.4391158-6.225-24.8782316-12.45-34.2075684zM271.7875 268.995879l-49.8 9.329336 9.3375-49.756463L374.5 85.5189209l40.4625 40.4271261-143.175 143.049832zm192.975-192.8062949L436.75 104.177595l-40.4625-40.4271267L424.3 35.7624578c6.225-6.2195578 15.5625-6.2195578 21.7875 0l18.675 18.6586737c0 3.109779 3.1125 9.3293368 3.1125 12.4391158 0 3.1097789-3.1125 6.2195579-3.1125 9.3293368z" fill="#3E3643"></path></g></svg>
            </a>
            <div class="activity-meta">
                <p><a href="{{ URL::to('/post/detail/'.base64_encode(convert_uuencode($one_post->id))) }}">{{$one_post->title}}</a></p>
                <p class="date-time">
				
				<a href="{{ URL::to('/post/detail/'.base64_encode(convert_uuencode($one_post->id))) }}">
				<?php 
					$then = $one_post->created_at;
					$then = new DateTime($then);
					 
					$now = new DateTime();
					 
					$sinceThen = $then->diff($now);
					 
					//Combined
					if($sinceThen->y > 0){
						echo $sinceThen->y . ' yesr(s) ago' ;
					}elseif($sinceThen->m > 0){
						echo $sinceThen->m . ' month(s) ago' ;
					}elseif($sinceThen->d > 0){
						echo $sinceThen->d . ' day(s) ago' ;
					}elseif($sinceThen->h > 0){
						echo $sinceThen->h . ' hours(s) ago' ;
					}elseif($sinceThen->i > 0){
						echo $sinceThen->i . ' minute(s) ago' ;
					}elseif($sinceThen->s > 0){
						echo $sinceThen->s . ' second(s) ago' ;
					}else{
						echo 'Just now';
					}


				?>
				
				</a></p>
            </div>
        </div>
        @endforeach
       @else
		    <div class="single-activity-row d-flex flex-row align-items-start">
				<label >No recent post found for this user </label>
			</div>
	   
	   @endif
    </div>
   <?php /* <div class="hn-widget-footer"><a href="#" class="d-flex flex-row align-items-center more-link"><span>More</span><svg viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path></svg></a></div>*/?>
</div>
<div class="hn-widget">
    <?php /*<div class="widget-header">
        <h3>My Skills</h3></div>
    <div class="widget-body profile-tags">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="/n/python" class="d-flex align-items-center justify-content-between"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1534512408213/rJeQpSNIX.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1534512408213/rJeQpSNIX.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="80" data-height="80" alt="" class="lazyautosizes lazyloaded" sizes="20px"><span class="tag-name">Python</span></a>
            </li>
            <li class="list-inline-item">
                <a href="/n/java" class="d-flex align-items-center justify-content-between"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1534512378322/H1gM-pH4UQ.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1534512378322/H1gM-pH4UQ.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="80" data-height="80" alt="" class="lazyautosizes lazyloaded" sizes="20px"><span class="tag-name">Java</span></a>
            </li>
            <li class="list-inline-item">
                <a href="/n/kotlin" class="d-flex align-items-center justify-content-between"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/fuo7n9epkkxyafihrlhz/1458728299.jpg?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/fuo7n9epkkxyafihrlhz/1458728299.jpg?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="80" data-height="80" alt="" class="lazyautosizes lazyloaded" sizes="20px"><span class="tag-name">Kotlin</span></a>
            </li>
            <li class="list-inline-item">
                <a href="/n/rust" class="d-flex align-items-center justify-content-between"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1534512703511/HJDSCr4UQ.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1534512703511/HJDSCr4UQ.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="80" data-height="80" alt="" class="lazyautosizes lazyloaded" sizes="20px"><span class="tag-name">Rust</span></a>
            </li>
            <li class="list-inline-item">
                <a href="/n/javascript" class="d-flex align-items-center justify-content-between"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/upload/v1513320898547/BJjpblWfG.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/upload/v1513320898547/BJjpblWfG.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="80" data-height="80" alt="" class="lazyautosizes lazyloaded" sizes="20px"><span class="tag-name">JavaScript</span></a>
            </li>
            <li class="list-inline-item">
                <a href="/n/mango" class="d-flex align-items-center justify-content-between"><img data-sizes="auto" src="https://hashnode.imgix.net/res/hashnode/image/hashnode-assets/misc/upload/v1520365384466/HJgUk_2uG.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-src="https://hashnode.imgix.net/res/hashnode/image/hashnode-assets/misc/upload/v1520365384466/HJgUk_2uG.png?w=80&amp;h=80&amp;fit=crop&amp;crop=entropy&amp;auto=format,enhance&amp;q=60" data-width="80" data-height="80" alt="" class="lazyautosizes lazyloaded" sizes="20px"><span class="tag-name">mango</span></a>
            </li>
        </ul>
    </div>*/?>
</div>