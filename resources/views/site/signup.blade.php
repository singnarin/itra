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
									<form class="user" action="regis" method="post" id="myForm" enctype="multipart/form-data" OnSubmit="return validateForm();">
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
												<input type="number" class="form-control " id="age" name="age" placeholder="อายุ">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2 mb-2 mb-sm-0">
												<select id="sex" name="sex" class="form-control ">
													<option value="">:: เพศ ::</option>
													<option value="ชาย">ชาย</option>
													<option value="หญิง">หญิง</option>
												</select>
											</div>
											<div class="col-sm-2 mb-2 mb-sm-0">
												<select id="education" name="education" class="form-control ">
													<option value="">:: วุฒิการศึกษาสูงสุด ::</option>
													<option value="ต่ำกว่าปริญญาตรี">ต่ำกว่าปริญญาตรี</option>
													<option value="ระดับปริญญาตรี">ระดับปริญญาตรี</option>
													<option value="ระดับปริญญาโท">ระดับปริญญาโท</option>
													<option value="ระดับปริญญาเอก">ระดับปริญญาเอก</option>
												</select>
											</div>
											<div class="col-sm-4 mb-4 mb-sm-0">
												{!! Form::select('school_id',[null=>':: สังกัด/ที่ทำงาน ::'] + \App\Schools::pluck('school','id')->toArray(), null, array('class'=>'form-control')) !!} 
											</div>
											<div class="col-sm-4">
												<select id="position" name="position" class="form-control ">
													<option value="">:: ตำแหน่งงานปัจจุบันของคุณคือ ::</option>
													<option value="เจ้าหน้าที่ดูแลเกี่ยวกับระบบสารสนเทศองค์กร">เจ้าหน้าที่ดูแลเกี่ยวกับระบบสารสนเทศองค์กร</option>
													<option value="เจ้าหน้าที่ปฏิบัติงานทั่วไปในองค์กร/หรือสำนักงาน">เจ้าหน้าที่ปฏิบัติงานทั่วไปในองค์กร/หรือสำนักงาน</option>
													<option value="ครู-อาจารย์">ครู-อาจารย์</option>
													<option value="อื่นๆ">อื่นๆ</option>
												</select>
												<!--
												{!! Form::select('position_id',[null=>':: ตำแหน่งปัจจุบัน ::'] + \App\Positions::pluck('positionName','id')->toArray(), null, array('class'=>'form-control')) !!} 
												-->
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="email" class="form-control " id="email" name="email" placeholder="Email Address">
											</div>
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="password" class="form-control " id="password" name="password" placeholder="กำหนดรหัสผ่าน">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-5 mb-5 mb-sm-0"></div>
											<div class="col-sm-2 mb-2 mb-sm-0">
												<button id="button" type="submit" class="btn btn-primary btn-block">เข้าใช้งาน</button>
											</div>
											<div class="col-sm-5 mb-5 mb-sm-0"></div>
										</div>
										
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
</script>