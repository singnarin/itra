@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
							<div class="col-lg-9">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">ลงทะเบียน</h1>
									</div>
									<form class="user">
										<div class="form-group row">
											<div class="col-sm-2 mb-2 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="prefixName" name="prefixName"
													placeholder="คำนำหน้าชื่อ">
											</div>
											<div class="col-sm-5 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="firstName" name="firstName"
													placeholder="ชื่อ">
											</div>
											<div class="col-sm-5">
												<input type="text" class="form-control form-control-user" id="lastName" name="lastName"
													placeholder="นามสกุล">
											</div>
										</div>
										<div class="form-group row">											
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="phone" name="phone"
													placeholder="โทรศัพท์">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control form-control-user" id="userId" name="userId"
													placeholder="เลขบัตรประจำตัวประชาชน">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-4 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="school"
													placeholder="สถานศึกษา">
											</div>
											<div class="col-sm-3 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="province" name="province"
													placeholder="จังหวัด">
											</div>
											<div class="col-sm-5">
												<input type="text" class="form-control form-control-user" id="position" name="position"
													placeholder="ตำแหน่ง">
											</div>
										</div>
										<div class="form-group">
											<input type="email" class="form-control form-control-user" id="email" name="email"
												placeholder="Email Address">
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="password" class="form-control form-control-user"
													id="password" placeholder="Password">
											</div>
											<div class="col-sm-6">
												<input type="password" class="form-control form-control-user"
													id="repeatPassword" placeholder="Repeat Password">
											</div>
										</div>
										<a href="login.html" class="btn btn-primary btn-user btn-block">
											ลงทะเบียน
										</a>
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
										<a class="small" href="forgot-password.html">Forgot Password?</a>
									</div>
									<div class="text-center">
										<a class="small" href="login.html">Already have an account? Login!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection