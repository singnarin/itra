@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">ลงทะเบียนการเข้าใช้งานระบบ</h1>

										@include('layout.flash-message')
										
									</div>
									<form class="user" action="regis" method="post" id="myForm" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group row">
											<div class="col-sm-2 mb-2 mb-sm-0">
												<input type="text" class="form-control " id="prefixName" name="prefixName"
													placeholder="คำนำหน้าชื่อ">
											</div>
											<div class="col-sm-4 mb-4 mb-sm-0">
												<input type="text" class="form-control " id="firstName" name="firstName"
													placeholder="ชื่อ">
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control " id="lastName" name="lastName"
													placeholder="นามสกุล">
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control " id="age" name="age" placeholder="อายุ">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2 mb-2 mb-sm-0">
												{!! Form::select('province_id',[null=>':: เพศ ::'] + \App\Provinces::pluck('name_th','id')->toArray(), null, array('class'=>'form-control')) !!} 
											</div>
											<div class="col-sm-2 mb-2 mb-sm-0">
												{!! Form::select('province_id',[null=>':: วุฒิการศึกษา ::'] + \App\Provinces::pluck('name_th','id')->toArray(), null, array('class'=>'form-control')) !!} 
											</div>
											<div class="col-sm-4 mb-4 mb-sm-0">
												{!! Form::select('school_id',[null=>':: สังกัด/ที่ทำงาน ::'] + \App\Schools::pluck('school','id')->toArray(), null, array('class'=>'form-control')) !!} 
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control " id="positionName" name="positionName" placeholder="ตำแหน่งปัจจุบัน">
												<!--
												{!! Form::select('position_id',[null=>':: ตำแหน่งปัจจุบัน ::'] + \App\Positions::pluck('positionName','id')->toArray(), null, array('class'=>'form-control')) !!} 
												-->
											</div>
										</div>
										<div class="form-group">
											<input type="email" class="form-control " id="email" name="email"
												placeholder="Email Address">
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="password" class="form-control "
													name="password" id="password" placeholder="Password">
											</div>
											<div class="col-sm-6">
												<input type="password" class="form-control "
													id="repeatPassword" name="repeatPassword" placeholder="Repeat Password">
											</div>
										</div>
										<button id="button" type="submit" class="btn btn-primary btn-user btn-block">เข้าใช้งาน</button>
										<hr>
										<!--
										<a href="index.html" class="btn btn-google btn-user btn-block">
											<i class="fab fa-google fa-fw"></i> Register with Google
										</a>
										<a href="index.html" class="btn btn-facebook btn-user btn-block">
											<i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
										</a>
									-->
									</form>
									<hr>
									<div class="text-center">
										<a class="small" href="loginForm">เข้าสู่ระบบ</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection

<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.min.js' crossorigin="anonymous"></script>
<script language="javascript">
	$(document).ready(function(){
		$('#userId').on('keyup',function(){
		  if($.trim($(this).val()) != '' && $(this).val().length < 14){
			id = $(this).val().replace(/-/g,"");
			var result = Script_checkID(id);
			const btn = document.getElementById("button");
			if(result === false){
				btn.disabled = true;
			}else{
				btn.disabled = false;
			}
		  }else{
			$('span.error').removeClass('true').text('');
		  }
		})
	  });
	  
	  function Script_checkID(id){
		  if(! IsNumeric(id)) return false;
		  if(id.substring(0,1)== 0) return false;
		  if(id.length != 13) return false;
		  for(i=0, sum=0; i < 12; i++)
			  sum += parseFloat(id.charAt(i))*(13-i);
		  if((11-sum%11)%10!=parseFloat(id.charAt(12))) return false;
		  return true;
	  }
	  function IsNumeric(input){
		  var RE = /^-?(0|INF|(0[1-7][0-7]*)|(0x[0-9a-fA-F]+)|((0|[1-9][0-9]*|(?=[\.,]))([\.,][0-9]+)?([eE]-?\d+)?))$/;
		  return (RE.test(input));
	  }
</script>