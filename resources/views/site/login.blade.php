@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<img src="../images/logo.png" width="100">
									</div>
									<div class="text-center">
										<h1 class="h5 text-gray-900 mb-4">ลงชื่อเข้าใช้งาน</h1>
									</div>
									<div class="text-center">
										<h1 class="h6 text-gray-900 mb-4">ระบบประเมินความเสี่ยงการใช้งานระบบเทคโนโลยีสารสนเทศในองค์กร</h1>

										@include('layout.flash-message')
										
									</div>
									<form class="user" action="login" method="post" id="myForm" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group row">
											<div class="col-sm-4 mb-4 mb-sm-0"></div>
											<div class="col-sm-4 mb-4 mb-sm-0">
												<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
											</div>
											<div class="col-sm-4 mb-4 mb-sm-0"></div>
										</div>
										<div class="form-group row">
											<div class="col-sm-4 mb-4 mb-sm-0"></div>
											<div class="col-sm-4 mb-4 mb-sm-0">
												<input type="password" class="form-control" name="password" id="password" placeholder="Password">
											</div>
											<div class="col-sm-4 mb-4 mb-sm-0"></div>
										</div>
										<div class="form-group row">
											<div class="col-sm-4 mb-4 mb-sm-0"></div>
											<div class="col-sm-4 mb-4 mb-sm-0">
												<button id="button" type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
											</div>
											<div class="col-sm-4 mb-4 mb-sm-0"><a href="#">ลืมรหัสผ่าน?</a></div>
										</div>
									</form>
									<div class="text-center">
										หากไม่มีบัญชีกรุณา <a href="signup">ลงทะเบียน</a></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
