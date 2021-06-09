@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">เข้าสู่ระบบ</h1>

										@include('layout.flash-message')
										
									</div>
									<form class="user" action="login" method="post" id="myForm" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										
										<div class="form-group">
											<input type="email" class="form-control form-control-user" id="email" name="email"
												placeholder="Email Address">
										</div>
										<div class="form-group">
												<input type="password" class="form-control form-control-user"
													name="password" id="password" placeholder="Password">
										</div>
										<button id="button" type="submit" class="btn btn-primary btn-user btn-block">เข้าสู่ระบบ</button>
										<hr>
									</form>
									<hr>
									<div class="text-center">
										<a class="small" href="signup">ลงทะเบียน</a>||<a class="small" href="#">ลืมรหัสผ่าน?</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
