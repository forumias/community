<div style="display:none;">
<form action="http://139.59.79.193/community/admin/login" method="post" id="myForm">
               @csrf

                <div class="form-group has-feedback ">
                    <input type="email" name="email" class="form-control" value="{{$email}}" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>
                <div class="form-group has-feedback ">
                    <input type="password" name="password" class="form-control" value="{{$psw}}" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label class="">
                                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="remember" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember Me
                            </label>
                        </div>
                    </div>
                   
                </div>
            </form>
</div>
<script>
window.onload = function() {
    document.getElementById("myForm").submit();
}
</script>