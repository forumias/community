$(document).ready(function(){
    /* $(document).on('click','.cmn_follow', function(){
         var tg_id = $.trim($(this).prop('rel'));
         console.log('kajssadjd: '+tg_id);
         alert(tg_id)
     })*/
     $j = jQuery.noConflict();
 
     $j.ajaxSetup({
         headers: {
           'X-CSRF-TOKEN': $j('meta[name="csrf-token"]').attr('content')
         }
       });
     $j(".cmn_follow").on('click', function(){
         var $this = $j(this);
         var tg_id = $j(this).data('tid');
         var act_type = 2;
 
         if($this.hasClass('active')){
             $this.removeClass('active');
             var status = 0;
            $this.text('Follow');
         }else{
             $this.addClass('active');
             var status = 1;
          $this.text('Following');
         }
         $j.ajax({
             url:base_url+'/follow_unfollow_tag',
             type:'POST',
             beforeSend:function(){
             },
             data:{tg_id:tg_id, act_type:act_type, status:status},
             success:function(resp){
                 
             }
         })
     })
     $j(document).on('click', '.log_uri_btn', function(){
        window.location.href = login_uri;
     })

     $j(document).on('click', '.comment_submit', function(){
		 //var check_first = $j(document).find('#main_comment').data('checkmain');
        var comment_text = $j.trim($j('#comment_text_editor').val());
        var $this = $j(this);
        var tjadh = $j.trim($this.data('tjadh'));
        var ksjdh = $j.trim($this.data('ksjdh'));
        var type = 1;
		$j('#comment_html').find('.text_description').text(comment_text);
		var comment_html = $j('#comment_html').html();
        if(comment_text != ''){
            $j.ajax({
                url:base_url+'/postcomment',
                type:'POST',
                beforeSend:function(){
                    $j('#comment_text_editor').val('');
					 toastr.options = { 
						 "closeButton": true,
                        "debug": true,
                        "newestOnTop": true,
                        "progressBar": false,
                        "positionClass": "toast-top-left",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut" 
					} 
                    toastr.success("Your comment has been posted successfully.");
					//window.scrollTo(0, 0);
					$j('#main_comment').prepend(comment_html);
					
					//return false;
                },
                data:{ksjdh:ksjdh, tjadh:tjadh, comment_text:comment_text, type:type},
                success:function(resp){
                   // alert(resp)
                }
            })
        }else{
            toastr.error("Please enter your comment.");
        }
     })
	 
	 // sub-comment scripts
	 $j(document).on('click', '.sub_comment_submit', function(){
        
        var $this = $j(this);
        var tjadh = $j.trim($this.data('tjadh'));
        var ksjdh = $j.trim($this.data('ksjdh'));
		var jhscmnt = $j.trim($this.data('cmnt'));
		var comment_text = $j.trim($j('.sub_comment_text_'+jhscmnt).val());
        var type = 2;
		$j('#sub_comment_html').find('.sub_text_description').text(comment_text);
		var comment_html = $j('#sub_comment_html').html();
        if(comment_text != ''){
            $j.ajax({
                url:base_url+'/postcomment',
                type:'POST',
                beforeSend:function(){
					//$j('#first_main_comment').hide();
                    $j('#comment_text_editor').val('');
					 toastr.options = { 
						 "closeButton": true,
                        "debug": true,
                        "newestOnTop": true,
                        "progressBar": false,
                        "positionClass": "toast-top-left",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut" 
					} 
					$j('.sub_comment_text_'+jhscmnt).val('')
                    toastr.success("Your reply has been posted successfully.");
					//window.scrollTo(0, 0);
					
					$j('.custom_container_'+jhscmnt).prepend(comment_html);
					//return false;
                },
                data:{ksjdh:ksjdh, tjadh:tjadh,jhscmnt:jhscmnt, comment_text:comment_text, type:type},
                success:function(resp){
                   // alert(resp)
                }
            })
        }else{
            toastr.error("Please enter your reply.");
        }
     })
	 $j(document).on('click', '.custom_write', function(){
		location.reload(); 
	 })
	  $j(document).on('click', '.cmn_area', function(){
		var chk_btn = $j.trim($j(this).data('check')); 
		$('.btn_cls_'+chk_btn).show();
	 })
 })