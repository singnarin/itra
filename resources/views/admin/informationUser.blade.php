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
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ตอนที่ 1 ข้อมูลทั่วไปของผู้ตอบแบบสอบถาม</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.ชื่อ : {{$users->prefixName}}{{$users->firstName}}  {{$users->lastName}}</td>
                                                </tr>
                                                <tr>
                                                    <td>2. ตำแหน่งงาน : {{$users->positions->positionName}}</td>
                                                </tr>   
                                                <tr>
                                                    <td>3. ปัจจุบันอายุ : {{$users->age}}</td>
                                                </tr>
                                                <tr>
                                                    <td>4. เพศ : {{$users->sex}}</td>
                                                </tr>
                                                <tr>
                                                    <td>5. วุฒิการศึกษาสูงสุด : {{$users->education}}</td>
                                                </tr>
                                                <tr>
                                                    @if($users->position_id==1)
                                                        <td>6. อายุการทำงานตำแหน่งปัจจุบัน : {{$users->work}}</td>
												    @endif
												    @if($users->position_id==2)
                                                        <td>6. ประสบการณ์ในการทำงานสายเทคโนโลยี : {{$users->work}}</td>
												    @endif
                                                </tr>
                                                @if($users->position_id==1)
                                                    <tr>
                                                        <td>6. มีเครื่องคอมพิวเตอร์หรืออุปกรณ์อิเล็กทรอนิกส์ที่สามารถเชื่อมต่ออินเตอร์ใช้ในการทำงานประจำตำแหน่ง : {{$users->computer}}</td>
                                                    </tr>
												@endif
                                            </tbody>
                                        </table>
                                     <hr>
                                    </div>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
