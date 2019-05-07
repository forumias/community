<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Auth;

use App\User;
use App\Follow;
use DB;

class FollowsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function follow_unfollow_tag(Request $request) {
        $auth_id = @Auth::user()->id;
        //echo '<pre>';print_r($request->all());die;
        if(@$auth_id != ''){
            if($request->act_type == 1){
                $follow_info = Follow::where('tag_id',$request->tg_id )->first();
            }elseif($request->act_type == 2){
                $follow_info = Follow::where('user_id',$request->tg_id )->first();
            }else{
                echo 'This type of follow action is not implemented';die;
            }
            if($follow_info){
                if($follow_info->follow_by != ''){
                    $follow_arr = explode(',',$follow_info->follow_by);
                    if(in_array($auth_id, $follow_arr)){
                        $pos = array_search($auth_id, $follow_arr);
                        unset($follow_arr[$pos]);
                        $follow_str = implode(',',$follow_arr);
                    }else{
                        array_push($follow_arr, $auth_id);
                        $follow_str = implode(',',$follow_arr);
                    }
                    $follow_info->update(['follow_by'=> $follow_str]);
                }else{
                    $follow_info->update(['follow_by'=> $auth_id]);
                }
                echo 'follow';die;
            }else{
                if($request->act_type == 1){
                    $follow_status = Follow::create([
                        'type' => 1,
                        'tag_id' => $request->tg_id,
                        'follow_by'=> $auth_id
                    ]);
                }elseif($request->act_type == 2){
                    $follow_status = Follow::create([
                        'type' => 2,
                        'user_id' => $request->tg_id,
                        'follow_by'=> $auth_id
                    ]);
                }else{
                    echo 'This type of follow action is not implemented';die;
                }
                
                if($follow_status){
                    echo 'follow';die;
                }else{
                    echo 'error';die;
                }
            }
        }else{
            echo 'log_err';die;
        }
    }
}
