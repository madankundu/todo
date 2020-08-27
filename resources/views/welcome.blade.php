<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>To Do List</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/style.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<style>
	 body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }

 .pr-3,
 .px-3 {
     padding-right: 1rem !important
 }

 .card .card-body {
     padding: 1.25rem 1.75rem
 }

 .card-body {
     flex: 1 1 auto;
     padding: 1.25rem
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .add-items {
     margin-bottom: 1.5rem;
     overflow: hidden
 }

 .d-flex {
     display: flex !important
 }

 .add-items input[type="text"] {
     border-top-right-radius: 0;
     border-bottom-right-radius: 0;
     width: 100%;
     background: transparent
 }

 .form-control {
     border: 1px solid #f3f3f3;
     font-weight: 400;
     font-size: 0.875rem
 }

 .form-control {
     display: block;
     width: 100%;
     padding: 0.875rem 1.375rem;
     font-size: 1rem;
     line-height: 1;
     color: #495057;
     background-color: #ffffff;
     background-clip: padding-box;
     border: 1px solid #ced4da;
     border-radius: 2px;
     transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
 }

 .add-items .btn {
     margin-left: .5rem
 }

 .btn {
     font-size: 0.875rem;
     line-height: 1;
     font-weight: 400;
     padding: .7rem 1.5rem;
     border-radius: 0.1275rem
 }

 .list-wrapper {
     height: 100%;
     max-height: 100%
 }

 .add-items {
     margin-bottom: 1.5rem;
     overflow: hidden
 }

 .add-items input[type="text"] {
     border-top-right-radius: 0;
     border-bottom-right-radius: 0;
     width: 100%;
     background: transparent
 }

 .add-items .btn,
 .add-items .fc button,
 .fc .add-items button,
 .add-items .ajax-upload-dragdrop .ajax-file-upload,
 .ajax-upload-dragdrop .add-items .ajax-file-upload,
 .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled,
 .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled,
 .add-items .wizard>.actions a,
 .wizard>.actions .add-items a {
     margin-left: .5rem
 }

 .rtl .add-items .btn,
 .rtl .add-items .fc button,
 .fc .rtl .add-items button,
 .rtl .add-items .ajax-upload-dragdrop .ajax-file-upload,
 .ajax-upload-dragdrop .rtl .add-items .ajax-file-upload,
 .rtl .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled,
 .swal2-modal .swal2-buttonswrapper .rtl .add-items .swal2-styled,
 .rtl .add-items .wizard>.actions a,
 .wizard>.actions .rtl .add-items a {
     margin-left: auto;
     margin-right: .5rem
 }

 .list-wrapper {
     height: 100%;
     max-height: 100%
 }

 .list-wrapper ul {
     padding: 0;
     text-align: left;
     list-style: none;
     margin-bottom: 0
 }

 .list-wrapper ul li {
     font-size: .9375rem;
     padding: .4rem 0;
     border-bottom: 1px solid #f3f3f3
 }

 .list-wrapper ul li:first-child {
     border-bottom: none
 }

 .list-wrapper ul li .form-check {
     max-width: 90%;
     margin-top: .25rem;
     margin-bottom: .25rem
 }

 .list-wrapper ul li .form-check label:hover {
     cursor: pointer
 }

 .list-wrapper input[type="checkbox"] {
     margin-right: 15px
 }

 .list-wrapper .remove {
     cursor: pointer;
     font-size: 1.438rem;
     font-weight: 600;
     width: 1.25rem;
     height: 1.25rem;
     line-height: 20px;
     text-align: center
 }

 .list-wrapper .completed {
     text-decoration: line-through;
     text-decoration-color: #3da5f4
 }

 .list-wrapper ul li .form-check {
     max-width: 90%;
     margin-top: .25rem;
     margin-bottom: .25rem
 }

 .list-wrapper ul li .form-check,
 .list-wrapper ul li .form-check .form-check-label,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation,
 .email-wrapper .mail-list-container .mail-list .content .sender-name,
 .email-wrapper .message-body .attachments-sections ul li .details p.file-name,
 .settings-panel .chat-list .list .info p {
     text-overflow: ellipsis;
     overflow: hidden;
     max-width: 100%;
     white-space: nowrap
 }

 .form-check {
     position: relative;
     display: block;
     margin-top: 10px;
     margin-bottom: 10px;
     padding-left: 0
 }

 .list-wrapper ul li .form-check,
 .list-wrapper ul li .form-check .form-check-label,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation,
 .email-wrapper .mail-list-container .mail-list .content .sender-name,
 .email-wrapper .message-body .attachments-sections ul li .details p.file-name,
 .settings-panel .chat-list .list .info p {
     text-overflow: ellipsis;
     overflow: hidden;
     max-width: 100%;
     white-space: nowrap
 }

 .form-check .form-check-label {
     min-height: 18px;
     display: block;
     margin-left: 1.75rem;
     font-size: 0.875rem;
     line-height: 1.5
 }

 .form-check-label {
     margin-bottom: 0
 }

 .list-wrapper input[type="checkbox"] {
     margin-right: 15px
 }

 .form-check .form-check-label input {
     position: absolute;
     top: 0;
     left: 0;
     margin-left: 0;
     margin-top: 0;
     z-index: 1;
     cursor: pointer;
     opacity: 0;
     filter: alpha(opacity=0)
 }

 input[type="radio"],
 input[type="checkbox"] {
     box-sizing: border-box;
     padding: 0
 }

 .list-wrapper ul li .form-check,
 .list-wrapper ul li .form-check .form-check-label,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation,
 .email-wrapper .mail-list-container .mail-list .content .sender-name,
 .email-wrapper .message-body .attachments-sections ul li .details p.file-name,
 .settings-panel .chat-list .list .info p {
     text-overflow: ellipsis;
     overflow: hidden;
     max-width: 100%;
     white-space: nowrap
 }

 .form-check .form-check-label input[type="checkbox"]+.input-helper:before {
     content: "";
     width: 18px;
     height: 18px;
     border-radius: 2px;
     border: solid #405189;
     border-width: 2px;
     -webkit-transition: all;
     -moz-transition: all;
     -ms-transition: all;
     -o-transition: all;
     transition: all;
     transition-duration: 0s;
     -webkit-transition-duration: 250ms;
     transition-duration: 250ms
 }

 .form-check .form-check-label input[type="checkbox"]+.input-helper:before,
 .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
     position: absolute;
     top: 0;
     left: 0
 }

 .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
     -webkit-transition: all;
     -moz-transition: all;
     -ms-transition: all;
     -o-transition: all;
     transition: all;
     transition-duration: 0s;
     -webkit-transition-duration: 250ms;
     transition-duration: 250ms;
     font-family: Material Design Icons;
     opacity: 0;
     filter: alpha(opacity=0);
     -webkit-transform: scale(0);
     -ms-transform: scale(0);
     -o-transform: scale(0);
     transform: scale(0);
     content: '\F12C';
     font-size: .9375rem;
     font-weight: bold;
     color: #ffffff
 }

 .form-check .form-check-label input[type="checkbox"]+.input-helper:before,
 .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
     position: absolute;
     top: 0;
     left: 0
 }

 .form-check .form-check-label input[type="checkbox"]:checked+.input-helper:before {
     background: #405189;
     border-width: 0
 }

 .form-check .form-check-label input[type="checkbox"]+.input-helper:before {
     content: "";
     width: 18px;
     height: 18px;
     border-radius: 2px;
     border: solid #405189;
     border-width: 2px;
     -webkit-transition: all;
     -moz-transition: all;
     -ms-transition: all;
     -o-transition: all;
     transition: all;
     transition-duration: 0s;
     -webkit-transition-duration: 250ms;
     transition-duration: 250ms
 }

 .form-check .form-check-label input[type="checkbox"]+.input-helper:after {
     font-family: FontAwesome;
     content: "\f095";
     display: inline-block;
     padding-right: 3px;
     vertical-align: middle;
     color: #fff
 }

 .text-primary,
 .list-wrapper .completed .remove {
     color: #405189 !important
 }

 .list-wrapper .remove {
     cursor: pointer;
     font-size: 1.438rem;
     font-weight: 600;
     width: 1.25rem;
     height: 1.25rem;
     line-height: 20px;
     text-align: center
 }

 .ml-auto,
 .list-wrapper .remove,
 .mx-auto {
     margin-left: auto !important
 }

 .mdi-close-circle-outline:before {
     content: "\F15A"
 }

 .list-wrapper ul li {
     font-size: .9375rem;
     padding: .4rem 0;
     border-bottom: 1px solid #f3f3f3
 }

 .mdi:before {
     font-family: FontAwesome;
     content: "\f00d";
     display: inline-block;
     padding-right: 3px;
     vertical-align: middle;
     font-size: .756em;
     color: #405189
 }

 .list-wrapper ul {
     padding: 0;
     text-align: left;
     list-style: none;
     margin-bottom: 0
 }

 .flex-column-reverse {
     flex-direction: column-reverse !important
 }

 .d-flex,
 .loader-demo-box,
 .distribution-chart-legend .distribution-chart,
 .distribution-chart-legend .distribution-chart .item,
 .list-wrapper ul li,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a,
 .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user,
 .email-wrapper .mail-list-container .mail-list .details,
 .email-wrapper .message-body .attachments-sections ul li .thumb,
 .email-wrapper .message-body .attachments-sections ul li .details .buttons,
 .lightGallery .image-tile .demo-gallery-poster,
 .swal2-modal,
 .navbar .navbar-menu-wrapper .navbar-nav,
 .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile,
 .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
     display: flex !important
 }
	</style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>To Do List</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

             
                </div>
            </nav>

            <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="card px-3">
                    <div class="card-body">

                        <form action=""  method="POST" id="form" >
                            @csrf
                          <input type="hidden" value="" id="inputstatus" name="inputstatus">  
                          <input type="hidden" value="" id="onechec" name="onechec"> 
                          <input type="hidden" value="" id="removeid" name="removeid"> 
                          <input type="hidden" value="" id="valuechecone" name="valuechecone"> 
                          <input type="hidden" value="" id="valuecheconearray" name="valuecheconearray"> 
                        <div class="form-check "> <label class="form-check-label"> <input name="checklistall" id="checklistall" class="checkbox"  type="checkbox">Show All List<i class="input-helper"></i></label> </div>

                        <h4 class="card-title">Todo list</h4>
						
						
                        <div class="add-items d-flex"> 
						<input type="text" class="form-control todo-list-input" name="details" id="details" placeholder="What do you need to do today?"> 
						<button type="button"  class="add btn btn-primary font-weight-bold todo-list-add-btn newchange">Add</button> </div>
						
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list shortlist">
							@if(!$list->isEmpty())
                                @foreach($list as $key=>$value)
                                @php
                                    $checked="";
                                    if($value->checked)
                                    $checked="checked";

                                @endphp
                                <li>
                                <div class="form-check checklist"> <label class="form-check-label"> <input  value="{{$value->id}}"  {{$checked}} class="checkbox" type="checkbox">{{$value->details}}<i class="input-helper"></i></label> </div> <i data-id="{{$value->id}}" class="remove mdi mdi-close-circle-outline"></i>
                                </li>
								@endforeach
							@endif
                            </ul>
                        </div></form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            
        
        </div>
    </div>
    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
			

  
        });
        
        

        $('body').on('click','.remove',function(e){
            e.preventDefault();
            $("#inputstatus").val('delete');
            swal({
            title: "Are u sure to delete this task?",
            text: "Once deleted, you will not be able to recover this list!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $("#removeid").val($(this).attr("data-id"));
                
                var url = '{{ route("todo") }}';
				var data = $("#form").serialize();
				if(data)
				{
					$.post(url, data, function (data) {

                        $("#details").val('');
						$('.shortlist').html(data.html);
						
					}, "json");
                }
                


                swal("Poof! Your list has been deleted!", {
                icon: "success",
                });
            } 
            });


		
        });


		  $('.newchange').on('click', function(e) {
            $("#inputstatus").val('add');
			   e.preventDefault();
				 var url = '{{ route("todo") }}';
				var data = $("#form").serialize();
				if(data)
				{
					$.post(url, data, function (data) {
                        
                       if(data.errors)
                       {
                        swal("Errors", data.errors[0], "error");
                       }
                        $("#details").val('');
						$('.shortlist').html(data.html);
						
					}, "json");
				}
		
            });

            
            $('.checklist').on('click', ':checkbox', function() {
                
                
                $("#inputstatus").val('onchekbox');

                if($(this).is(':checked'))
                {
                    $("#valuechecone").val(1);
                    
                    
                }
                else
                $("#valuechecone").val(0);
                
                 $("#onechec").val($(this).val());
                
				 var url = '{{ route("todo") }}';
				var data = $("#form").serialize();
				if(data)
				{
					$.post(url, data, function (data) {
                       
                        
                        $("#details").val('');
						$('.shortlist').html(data.html);
						
					}, "json");
                }
                

            });


            


            


            $('#checklistall').change(function(e) {
                $("#inputstatus").val('checkall');
			   e.preventDefault();
				 var url = '{{ route("todo") }}';
				var data = $("#form").serialize();
				if(data)
				{
					$.post(url, data, function (data) {
                        
                      
                       
						$('.shortlist').html(data.html);
						
					}, "json");
				}
		
            });

  
    </script>
</body>

</html>