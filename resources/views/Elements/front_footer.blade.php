<script>
    var current_url = '<?php echo Request::url();?>';
    var base_url = '<?php echo url('/');?>';
    var public_url = '<?php echo url('public/');?>';
	var login_uri = '<?php echo Config::get('constants.login_url');?>';
	var check_app = '<?php echo @Auth::user()->id;?>';
</script>
<script src="{{ asset('public/js/toastr.min.js')}}"></script>  
	 <script>
         toastr.options = { 
        "positionClass": "toast-top-full-width", 
        } 
       @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
       @endif

       @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
       @endif
   </script>

<?php /*<script src="{{ asset('public/js/frontend/app.bundle.min.js')}}" >
</script> */?>
