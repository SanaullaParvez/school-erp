@extends('admin.master',['body_class' => 'blog-page blog-archive-page'])
@section('body')
        <!-- ******BLOG LIST****** -->
<div class="blog blog-category blog-archive container">
    <h2 class="page-title text-center"><i class="fa fa-archive"></i>Client Mail</h2>

    <!-- ******Contact Section****** -->
    {{--<section class="contact-section section section-on-bg">--}}
        <div class="container">
            {{--<h2 class="title text-center">Client Mail</h2>--}}
            {{--<p class="intro text-center">Use this form to send mail :</p>--}}
            {{Form::open(['route'=>'/save-client-mail-info','class'=>'contact-form','method'=>'POST','name'=>'registration'])}}
            <div class="row">
                <div class="contact-form-inner mr-lg-auto ml-lg-auto col-12 col-lg-8">

                    <div class="form-group row required">
                        {{Form::label('first_name','Customer Full Name',['class'=>"col-md-4 col-form-label"])}}
                        <div class="col-md-4">
                            {{Form::text('first_name',$customer->first_name,array('required' => 'required', 'placeholder' => 'Customer First Name', 'class' => 'form-control '.$errors->first('first_name','is-invalid')))}}
                            {{Form::hidden('customer_id',$customer->id,[])}}
                            <div class="invalid-feedback">{{$errors->has('first_name') ? $errors->first('first_name') : ''}}</div>
                        </div>
                        <div class="col-md-4">
                            {{Form::text('last_name',$customer->last_name,array('required' => 'required', 'placeholder' => 'Customer Last Name', 'class' => 'form-control '.$errors->first('first_name','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('first_name') ? $errors->first('first_name') : ''}}</div>
                        </div>
                    </div><!--//form-group-->
                    <div class="form-group row required">
                        {{Form::label('email_address','Customer E-main Address',['class'=>"col-md-4 col-form-label"])}}
                        <div class="col-md-8">
                            {{Form::text('email_address',$customer->email_address,array('required' => 'required', 'readonly'=>true, 'placeholder' => 'Your Last Name', 'class' => 'form-control '.$errors->first('last_name','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('last_name') ? $errors->first('last_name') : ''}}</div>
                        </div>
                    </div><!--//form-group-->
                    <div class="form-group row required">
                        {{Form::label('demo_url','Demo URL',['class'=>"col-md-4 col-form-label"])}}
                        <div class="col-md-6">
                            {{Form::url('demo_url','http://demo.edumanager.net',array('required' => 'required', 'placeholder' => 'Demo URL', 'class' => 'form-control '.$errors->first('demo_url','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('demo_url') ? $errors->first('demo_url') : ''}}</div>
                        </div>
                        <div class="col-md-2">
                        <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                GET URL
                            </button>

                            <!-- The Modal -->
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body hosts-cx">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div><!--//form-group-->
                    <div class="form-group row required">
                        {{Form::label('admin','Customer Admin Access',['class'=>"col-md-4 col-form-label"])}}
                        <div class="col-md-4">
                            {{Form::text('admin_id','administrator',array('required' => 'required', 'placeholder' => 'Admin ID', 'class' => 'form-control '.$errors->first('admin_id','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('admin_id') ? $errors->first('admin_id') : ''}}</div>
                        </div>
                        <div class="col-md-4">
                            {{Form::text('admin_pass','administrator123',array('required' => 'required', 'placeholder' => 'Admin Password', 'class' => 'form-control '.$errors->first('admin_pass','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('admin_pass') ? $errors->first('admin_pass') : ''}}</div>
                        </div>
                    </div><!--//form-group-->
                    <div class="form-group row required">
                        {{Form::label('employee','Customer Employee Access',['class'=>"col-md-4 col-form-label"])}}
                        <div class="col-md-4">
                            {{Form::text('employee_id','EMP-01',array('required' => 'required', 'placeholder' => 'Employee ID', 'class' => 'form-control '.$errors->first('employee_id','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('employee_id') ? $errors->first('employee_id') : ''}}</div>
                        </div>
                        <div class="col-md-4">
                            {{Form::text('employee_pass','EMP-0123',array('required' => 'required', 'placeholder' => 'Employee Password', 'class' => 'form-control '.$errors->first('employee_pass','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('employee_pass') ? $errors->first('employee_pass') : ''}}</div>
                        </div>
                    </div><!--//form-group-->
                    <div class="form-group row required">
                        {{Form::label('student','Customer Student Access',['class'=>"col-md-4 col-form-label"])}}
                        <div class="col-md-4">
                            {{Form::text('student_id','STD-01',array('required' => 'required', 'placeholder' => 'Student ID', 'class' => 'form-control '.$errors->first('student_id','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('student_id') ? $errors->first('student_id') : ''}}</div>
                        </div>
                        <div class="col-md-4">
                            {{Form::text('student_pass','STD-0123',array('required' => 'required', 'placeholder' => 'Student Password', 'class' => 'form-control '.$errors->first('student_pass','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('student_pass') ? $errors->first('student_pass') : ''}}</div>
                        </div>
                    </div><!--//form-group-->
                    <div class="form-group row required">
                        {{Form::label('parent','Customer Parent Access',['class'=>"col-md-4 col-form-label"])}}
                        <div class="col-md-4">
                            {{Form::text('parent_id','pSTD-01',array('required' => 'required', 'placeholder' => 'Parent ID', 'class' => 'form-control '.$errors->first('parent_id','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('parent_id') ? $errors->first('parent_id') : ''}}</div>
                        </div>
                        <div class="col-md-4">
                            {{Form::text('parent_pass','pSTD-0123',array('required' => 'required', 'placeholder' => 'Parent Password', 'class' => 'form-control '.$errors->first('parent_pass','is-invalid')))}}
                            <div class="invalid-feedback">{{$errors->has('parent_pass') ? $errors->first('parent_pass') : ''}}</div>
                        </div>
                    </div><!--//form-group-->
                    <div class="form-group row">
                        <div class="col-md-12">
                            {{Form::submit('Submit',['class'=>"btn btn-block btn-cta btn-cta-primary"])}}
                        </div>
                    </div>
                </div>
            </div><!--//row-->
            <div id="form-messages"></div>
            {{Form::close()}}<!--//contact-form-->
        </div><!--//container-->
    {{--</section><!--//contact-section-->--}}
</div>
    @endsection
    @section('scripts')
            <!-- contact page specific js starts -->
    <script type="text/javascript" src="{{asset('/')}}front/plugins/jquery.validate.min.js"></script>
    {{--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>--}}
    <script type="text/javascript" src="{{asset('/')}}front/js/contact.js"></script>
    <!-- contact page specific js ends-->
<script !src="">
    $(".hosts-cx").html('<object data="https://hosts.cx" width="780px" height="500px" style="overflow:auto;" />');
</script>
@endsection