/*$(function () {
    $("#global_search").autocomplete({
          source: all_tags,
          select: function (event, ui) { 
            console.log(ui.item);
            //alert(ui.item.id); 
            var selected_tag = ui.item.value;
            var selected_tag_id = ui.item.id;
            
            
          }
    });
  
  })*/
   /******************Scroll pagination***********************/
	 $(window).on("scroll", function() {
           if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
			   var empty_page = $('.hn-post-card').length;
			   if(empty_page > 1){ //for landing page
					   var flag = 1;
					   var page = $.trim($('.main_append').data('page'));
					   var acttype = $.trim($('.main_append').data('acttype'));
					   if(acttype <= 3){
						   $('.feed_loader').show();
						   $j.ajax({
								url:base_url+'/get_post',
								type:'get',
								beforeSend:function(){
									
								},
								data:{flag:flag, page:page, acttype:acttype},
								success:function(resp){
									//alert(resp)
									if(resp == ''){
										$('.feed_loader').html('No result found.');
									}else if(resp != 'error'){
										$('.feed_loader').hide();
										page = parseInt(page) + 1;
										$('.main_append').data('page', page);
										$('.main_append').append(resp);
									}
								}
							})
					   }else if(acttype == 4){ //for user detail page
							$('.feed_loader').show();
							var ulksjjdfy = check_app; 
						   $j.ajax({
								url:base_url+'/detail_post',
								type:'get',
								beforeSend:function(){
									
								},
								data:{flag:flag, page:page, acttype:acttype, ulksjjdfy:ulksjjdfy},
								success:function(resp){
									//alert(resp)
									if(resp == ''){
										$('.feed_loader').html('No result found.');
									}else if(resp != 'error'){
										$('.feed_loader').hide();
										page = parseInt(page) + 1;
										$('.main_append').data('page', page);
										$('.main_append').append(resp);
									}
								}
							})
						   
					   }else if(acttype == 5){ // for groups detail page
						   $('.feed_loader').show();
						   $j.ajax({
								url:base_url+'/detail_post',
								type:'get',
								beforeSend:function(){
									
								},
								data:{flag:flag, page:page, acttype:acttype},
								success:function(resp){
									//alert(resp)
									if(resp == ''){
										$('.feed_loader').html('No result found.');
									}else if(resp != 'error'){
										$('.feed_loader').hide();
										page = parseInt(page) + 1;
										$('.main_append').data('page', page);
										$('.main_append').append(resp);
									}
								}
							})
					   }
			   }else{
				   $('.feed_loader').hide();
			   }
           }
       });
	 /******************end Scroll pagination***********************/
 $(document).ready(function(){
	 $j = jQuery.noConflict();
	  $j.ajaxSetup({
         headers: {
           'X-CSRF-TOKEN': $j('meta[name="csrf-token"]').attr('content')
         }
       });
	  var wdthh = $(window).width();
	 $(document).on('click', '#action-link-mobile', function(){
		 if (wdthh < 767) {
			$('#global-sidebar').css('display', 'block');
		 }
	 })
	 
	 $(document).click(function(e) {
	  if (wdthh < 767) {
		  if(e.target.id == 'global-sidebar'){
			 $('#global-sidebar').css('display', 'none');
		  }
	  }
	});
	$(document).on('click', '.like_btn', function(){
		var $this = $(this);
		var pyfdhh = $.trim($this.data('pyfdhh'));
		var like_count = $.trim($this.data('likecount'));
		var data_case = 1;
		var act_type = '';
		if($.trim(check_app) != ''){
			if($this.hasClass('active')){
				act_type = 2;
				like_count = parseInt(like_count) - 1;
				$this.removeClass('active');
			}else{
				act_type = 1;
				like_count = parseInt(like_count) + 1;
				$this.addClass('active');
			}
			$this.data('likecount', like_count)
			
			$j.ajax({
				url:base_url+'/like_unlike',
				type:'POST',
				beforeSend:function(){
					
					$this.children('.like_count').text(like_count);
					
				},
				data:{pyfdhh:pyfdhh, ujdhfgd:check_app, act_type:act_type, data_case:data_case},
				success:function(resp){
					//alert(resp)
					
				}
			})
		}else{
			window.location.href = login_uri;
		}
	})
	$(document).on('click','.init_like_pop', function(){
		$('.pop_listing').html('');
		$('.pop_title').text('');
		var $this = $(this);
		var pjhfd = $.trim($this.data('pjhfd'));
		var unique_like = $('.unique_like_'+pjhfd).data('likecount');
		$('.pop_title').text(unique_like+' Likes');
		if(pjhfd != ''){
			$j.ajax({
				url:base_url+'/user_likes',
				type:'POST',
				beforeSend:function(){
					
					
				},
				data:{pjhfd:pjhfd},
				success:function(resp){
					if(resp != 'error'){
						$('.pop_listing').html(resp)
					}else{
						$('.pop_listing').text();
					}
					
				}
			})
		}else{
			return false;
		}
	})
	
	/***********************************/
	$j(".user_follow").on('click', function(){
         var $this = $j(this);
         var tg_id = $j(this).data('tid');
		 var follow_cnt = $j.trim($j('.follow_cnt').data('followcnt'));
         var act_type = 2;
 
         if($this.hasClass('active')){
             $this.removeClass('active');
             var status = 0;
            $this.children('span').text('Follow');
			follow_cnt = parseInt(follow_cnt) - 1;
         }else{
             $this.addClass('active');
             var status = 1;
            $this.children('span').text('Following');
		    follow_cnt = parseInt(follow_cnt) + 1;
         }
		 $j('.follow_cnt').data('followcnt', follow_cnt);
		 $j('.follow_cnt').text(follow_cnt);
         $j.ajax({
             url:base_url+'/follow_unfollow_tag',
             type:'POST',
             beforeSend:function(){
             },
             data:{tg_id:tg_id, act_type:act_type, status:status},
             success:function(resp){
                 
             }
         })
     })//
	 // report acript 
	 $j('#savereport').validate();
	 $(document).on('click', '.show_op_btn', function(){
		var post_id = $.trim($(this).data('postid'));
		$('#reportModal').find('.post_id').val(post_id);;
	})
	$(document).on('click', '.cmn_report', function(){
		var user_id = check_app; 
		if(user_id != ''){
			var post_id = $.trim($(this).data('postid'));
			$('#reportModal').find('.post_id').val(post_id);;
		}else{
			window.location.href = login_uri;
		}
	})
	$(document).on('click', '.cmn_report_inp', function(){
		var report_option = $.trim($(this).val());
		if(report_option == 5){
			$('#reportModal').find('.report_desc').addClass('required');
			$('#reportModal').find('.report_desc').prop("disabled", false);
			$('#reportModal').find('#other-textfield-error').show();
			
		}else{
			$('#reportModal').find('.report_desc').prop("disabled", true);
			$('#reportModal').find('.report_desc').val('');
			$('#reportModal').find('#other-textfield-error').hide();
		}
	})
	
	$j(".group_follow").on('click', function(){
		if($j.trim(check_app) != ''){
			 var $this = $j(this);
			 var tg_id = $j(this).data('tid');
			 var follow_cnt = $j.trim($j('.follow_cnt').data('followcnt'));
			 var act_type = 1;
	 
			 if($this.hasClass('active')){
				 $this.removeClass('active');
				 var status = 0;
				$this.text('Follow');
				follow_cnt = parseInt(follow_cnt) - 1;
			 }else{
				 $this.addClass('active');
				 var status = 1;
				$this.text('Following');
				follow_cnt = parseInt(follow_cnt) + 1;
			 }
			 $j('.follow_cnt').data('followcnt', follow_cnt);
			 $j('.follow_cnt').text(follow_cnt);
			 $j.ajax({
				 url:base_url+'/follow_unfollow_tag',
				 type:'POST',
				 beforeSend:function(){
				 },
				 data:{tg_id:tg_id, act_type:act_type, status:status},
				 success:function(resp){
					 
				 }
			 })
		}else{
			window.location.href = login_uri;
		}
     })//
 })
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 