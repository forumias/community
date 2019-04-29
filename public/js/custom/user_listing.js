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
         //var follow_count =   $j.trim($j('.custom_follow_cnt_'+tg_id).data('follow_cnt'));
 
         if($this.hasClass('active')){
             $this.removeClass('active');
             var status = 0;
          
         // follow_count = parseInt(follow_count) - 1;
         // $j('.custom_follow_cnt_'+tg_id).text(follow_count);
          //$j('.custom_follow_cnt_'+tg_id).data('follow_cnt', follow_count);
          $this.text('Follow');
          //$this.text('Follow');
         }else{
             $this.addClass('active');
             var status = 1;
             //follow_count = parseInt(follow_count) + 1;
          //$j('.custom_follow_cnt_'+tg_id).text(follow_count);
          //$j('.custom_follow_cnt_'+tg_id).data('follow_cnt', follow_count);
          $this.text('Following');
          //$this.text('Following');
         }
         $j.ajax({
             url:base_url+'/follow_unfollow_tag',
             type:'POST',
             beforeSend:function(){
                 
                 
             },
             data:{tg_id:tg_id, act_type:act_type, status:status},
             success:function(resp){
                 //alert(resp)
                 
             }
         })
     })
     $j(document).on('click', '.log_uri_btn', function(){
        var login_uri = $j.trim($j('.log_uri').data('loguri'));
        window.location.href = login_uri;
     })
 })