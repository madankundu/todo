<?php

use Illuminate\Support\Facades\Route;
use App\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
	
	ToDo::query()->update(['hidden' => 0]);
	$data = [];
	$list = ToDo::orderBy('created_at', 'desc')->get();
	$data['list'] = $list;
		return view('welcome',$data);

	
	
	
   
});

Route::any('/ajax', function (Request $request) {
	
	$data = [];
	$list = ToDo::orderBy('created_at', 'desc')->get();
	$data['list'] = $list;
	if($request->ajax() )
	{
		if($request->inputstatus=="add")
		{
			ToDo::query()->update(['hidden' => 0]);
			if($request->details)
			{
			$messages = array();
			$validatonreturn= Validator::make($request->all(), [
				'details' => ['required', 'unique:to_dos'],
			],$messages);
			
			if ($validatonreturn->fails())
			{
				return response()->json(['errors'=>$validatonreturn->errors()->all()]);
			}
			

			$html="<script type='text/javascript'>$('.checklist').on('click', ':checkbox', function() {
                
                
                $('#inputstatus').val('onchekbox');

                if($(this).is(':checked'))
                {
                    $('#valuechecone').val(1);
                    
                    
                }
                else
                $('#valuechecone').val(0);
                
                 $('#onechec').val($(this).val());
                
				 var url = 'ajax';
				var data = $('#form').serialize();
				if(data)
				{
					$.post(url, data, function (data) {
                       
                        
                        $('#details').val('');
						$('.shortlist').html(data.html);
						
					}, 'json');
                }
                

			});
			
			</script>";
			$list= new ToDo;
			
			$list->details = $request->details;
			$list->save();
			$list = ToDo::orderBy('created_at', 'desc')->get();
			foreach($list as $key=>$value)
			{
				$checked="";
				if($value->checked)
				$checked="checked";

				$html.='<li>
				<div class="form-check checklist"> <label class="form-check-label"> <input value='.$value->id.' '.$checked.' class="checkbox" type="checkbox">'.$value->details.'<i class="input-helper"></i></label> </div> <i data-id="'.$value->id.'"class="remove mdi mdi-close-circle-outline"></i>
			</li>';

			}
					$datajax['html'] =  $html;
					return response(json_encode($datajax))->header('Content-Type', 'application/json');

			}
			else
			{
				$messages = array();
				$validatonreturn= Validator::make($request->all(), [
					'details' => ['required', 'unique:to_dos'],
				],$messages);
				
				if ($validatonreturn->fails())
				{
					return response()->json(['errors'=>$validatonreturn->errors()->all()]);
				}
			}
		}

		if($request->inputstatus=="checkall")
		{
			ToDo::query()->update(['hidden' => 0]);
			$html="<script type='text/javascript'>$('.checklist').on('click', ':checkbox', function() {
                
                
                $('#inputstatus').val('onchekbox');

                if($(this).is(':checked'))
                {
                    $('#valuechecone').val(1);
                }
                else
                $('#valuechecone').val(0);
                
                 $('#onechec').val($(this).val());
                
				 var url = 'ajax';
				var data = $('#form').serialize();
				if(data)
				{
					$.post(url, data, function (data) {
                       
                        
                        $('#details').val('');
						$('.shortlist').html(data.html);
						
					}, 'json');
                }
                

			});
			
			</script>";

			if($request->checklistall)
			{
				ToDo::query()->update(['checked' => 1]);

			}
			else
			{
				ToDo::query()->update(['checked' => 0]);
			}

			$list = ToDo::orderBy('created_at', 'desc')->get();
			foreach($list as $key=>$value)
			{
				$checked="";
				if($value->checked)
				$checked="checked";

				$html.='<li>
				<div class="form-check checklist"> <label class="form-check-label"> <input value='.$value->id.' '.$checked.' class="checkbox" type="checkbox">'.$value->details.'<i class="input-helper"></i></label> </div> <i data-id="'.$value->id.'" class="remove mdi mdi-close-circle-outline"></i>
			</li>';

			}
					$datajax['html'] =  $html;
					return response(json_encode($datajax))->header('Content-Type', 'application/json');


		}
		if($request->inputstatus=="onchekbox")
		{
			$html="<script type='text/javascript'>$('.checklist').on('click', ':checkbox', function() {
                
                
                $('#inputstatus').val('onchekbox');

                if($(this).is(':checked'))
                {
                    $('#valuechecone').val(1);
                }
                else
                $('#valuechecone').val(0);
                
                 $('#onechec').val($(this).val());
                
				 var url = 'ajax';
				var data = $('#form').serialize();
				if(data)
				{
					$.post(url, data, function (data) {
                       
                        
                        $('#details').val('');
						$('.shortlist').html(data.html);
						
					}, 'json');
                }
                

			});
			
			</script>";
			ToDo::whereId($request->onechec)->update(['checked' =>$request->valuechecone]);
			$ar=array();
			if($request->valuechecone)
			{
					ToDo::whereId($request->onechec)->update(['hidden' =>1]);
					
					$listcheck = ToDo::where('hidden','=',1)->orderBy('created_at', 'desc')->get();
				
					foreach($listcheck as $key=>$value)
					{
						$ar[]=$value->id;
					}
					
					
					
			}
			else
			{
				ToDo::whereId($request->onechec)->update(['hidden' =>0]);

				$listcheck = ToDo::where('hidden','=',1)->orderBy('created_at', 'desc')->get();
				
					foreach($listcheck as $key=>$value)
					{
						$ar[]=$value->id;
					}

			
				
			}
			$list = ToDo::whereNotIn('id',$ar)->orderBy('created_at', 'desc')->get();
			foreach($list as $key=>$value)
			{
				$checked="";
				if($value->checked)
				$checked="checked";

				$html.='<li>
				<div class="form-check checklist"> <label class="form-check-label"> 
				<input value='.$value->id.' '.$checked.' class="checkbox" type="checkbox">'.$value->details.'<i class="input-helper"></i></label> </div> <i data-id="'.$value->id.'" class="remove mdi mdi-close-circle-outline"></i>
			</li>';

			}
					$datajax['html'] =  $html;
					return response(json_encode($datajax))->header('Content-Type', 'application/json');
					

		}

		if($request->inputstatus=="delete")
		{
			ToDo::query()->update(['hidden' => 0]);
			$html="<script type='text/javascript'>$('.checklist').on('click', ':checkbox', function() {
                
                
                $('#inputstatus').val('onchekbox');

                if($(this).is(':checked'))
                {
                    $('#valuechecone').val(1);
                }
                else
                $('#valuechecone').val(0);
                
                 $('#onechec').val($(this).val());
                
				 var url = 'ajax';
				var data = $('#form').serialize();
				if(data)
				{
					$.post(url, data, function (data) {
                       
                        
                        $('#details').val('');
						$('.shortlist').html(data.html);
						
					}, 'json');
                }
                

			});
			
			
			
			</script>";

			
			ToDo::whereId($request->removeid)->delete();
			$list = ToDo::orderBy('created_at', 'desc')->get();
			foreach($list as $key=>$value)
			{
				$checked="";
				if($value->checked)
				$checked="checked";

				$html.='<li>
				<div class="form-check checklist"> <label class="form-check-label"> <input value='.$value->id.' '.$checked.' class="checkbox" type="checkbox">'.$value->details.'<i class="input-helper"></i></label> </div> <i data-id="'.$value->id.'" class="remove mdi mdi-close-circle-outline"></i>
			</li>';

			}
					$datajax['html'] =  $html;
					return response(json_encode($datajax))->header('Content-Type', 'application/json');

		}
		
		
	}
	
	
	
	
   
}) -> name('todo');

