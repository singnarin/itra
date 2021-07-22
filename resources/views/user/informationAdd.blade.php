<?php $user = Session::get('user'); ?>
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
										<h1 class="h4 text-gray-900 mb-4">ข้อมูลทั่วไปของผู้ตอบแบบสอบถาม</h1>

										@include('layout.flash-message')
										
									</div>
									<form class="user" action="informationAdd" method="post" id="myForm" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="id" value="{{$user[0]->id}}">
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<strong>1. ตำแหน่งงานปัจจุบันของคุณคือ</strong>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="position" value="เจ้าหน้าที่ดูแลเกี่ยวกับระบบสารสนเทศองค์กร">
													<label class=" form-check-label" >เจ้าหน้าที่ดูแลเกี่ยวกับระบบสารสนเทศองค์กร</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="position" value="เจ้าหน้าที่ปฏิบัติงานทั่วไปในองค์กร/หรือสำนักงาน">
													<label class="form-check-label" >เจ้าหน้าที่ปฏิบัติงานทั่วไปในองค์กร/หรือสำนักงาน </label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="position" value="ครู-อาจารย์">
													<label class=" form-check-label" >ครู-อาจารย์</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="position" value="อื่นๆ">
													<label class="form-check-label" >อื่นๆ</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<strong>2. ปัจจุบันคุณมีอายุ</strong>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="age" value="ระหว่าง 20-30 ปี">
													<label class=" form-check-label" >ระหว่าง 20-30 ปี</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="age" value="ระหว่าง 31-40 ปี">
													<label class="form-check-label" >ระหว่าง 31-40 ปี</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="age" value="ะหว่าง 41-50 ปี">
													<label class=" form-check-label" >ระหว่าง 41-50 ปี</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="age" value="ระหว่าง 51-60 ปี">
													<label class="form-check-label" >ระหว่าง 51-60 ปี</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<strong>3. เพศ</strong>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-2 mb-1 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="sex" value="ชาย">
													<label class=" form-check-label" >ชาย</label>
												</div>
											</div>
											<div class="col-sm-1 mb-2 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="sex" value="หญิง">
													<label class="form-check-label" >หญิง</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<strong>4. วุฒิการศึกษาสูงสุด</strong>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="education" value="ต่ำกว่าปริญญาตรี">
													<label class=" form-check-label" >ต่ำกว่าปริญญาตรี</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="education" value="ระดับปริญญาตรี">
													<label class="form-check-label" >ระดับปริญญาตรี </label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="education" value="ระดับปริญญาโท">
													<label class=" form-check-label" >ระดับปริญญาโท</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="education" value="ระดับปริญญาเอก">
													<label class="form-check-label" >ระดับปริญญาเอก</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												@if($user[0]->position_id==1)
												<strong>5. อายุการทำงานตำแหน่งปัจจุบันของคุณ</strong>
												@endif
												@if($user[0]->position_id==2)
												<strong>5. ประสบการณ์ในการทำงานสายเทคโนโลยี</strong>
												@endif
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="work" value="น้อยกว่าสามปี">
													<label class=" form-check-label" >น้อยกว่าสามปี</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="work" value="5-10 ปี">
													<label class="form-check-label" >5-10 ปี </label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="work" value="16-20 ปี">
													<label class=" form-check-label" >16-20 ปี</label>
												</div>
											</div>
											<div class="col-sm-12 mb-6 mb-sm-0">
												<div class="form-check">
													<input class=" form-check-input" type="radio" name="work" value="มากกว่า 20 ปีขึ้นไป">
													<label class="form-check-label" >มากกว่า 20 ปีขึ้นไป</label>
												</div>
											</div>
										</div>
										@if($user[0]->position_id==1)
											<div class="form-group row">
												<div class="col-sm-12 mb-6 mb-sm-0">
													<strong>6. คุณมีเครื่องคอมพิวเตอร์หรืออุปกรณ์อิเล็กทรอนิกส์ที่สามารถเชื่อมต่ออินเตอร์ใช้ในการทำงานประจำตำแหน่งหรือไม่และเป็นของใคร</strong>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-12 mb-6 mb-sm-0">
													<div class="form-check">
														<input class=" form-check-input" type="radio" name="computer" value="มี ของที่ทำงาน">
														<label class=" form-check-label" >มี ของที่ทำงาน</label>
													</div>
												</div>
												<div class="col-sm-12 mb-6 mb-sm-0">
													<div class="form-check">
														<input class=" form-check-input" type="radio" name="computer" value="มี ของส่วนตัว">
														<label class="form-check-label" >มี ของส่วนตัว </label>
													</div>
												</div>
												<div class="col-sm-12 mb-6 mb-sm-0">
													<div class="form-check">
														<input class=" form-check-input" type="radio" name="computer" value="มี ของที่ทำงานและส่วนตัว">
														<label class=" form-check-label" >มี ของที่ทำงานและส่วนตัว</label>
													</div>
												</div>
												<div class="col-sm-12 mb-6 mb-sm-0">
													<div class="form-check">
														<input class=" form-check-input" type="radio" name="computer" value="ไม่มี">
														<label class="form-check-label" >ไม่มี</label>
													</div>
												</div>
											</div>
										@endif
										<button id="button" type="submit" class="btn btn-primary btn-user btn-block">บันทึก</button>
										<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
