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
                                                    <td>1. ตำแหน่งงานปัจจุบันของคุณคือ : {{$positions->position}}</td>
                                                </tr>   
                                                <tr>
                                                    <td>2. ปัจจุบันคุณมีอายุ : {{$positions->age}}</td>
                                                </tr>
                                                <tr>
                                                    <td>3. เพศ : {{$positions->sex}}</td>
                                                </tr>
                                                <tr>
                                                    <td>4. วุฒิการศึกษาสูงสุด : {{$positions->education}}</td>
                                                </tr>
                                                <tr>
                                                    @if($user[0]->position_id==1)
                                                        <td>5. อายุการทำงานตำแหน่งปัจจุบันของคุณ : {{$positions->work}}</td>
												    @endif
												    @if($user[0]->position_id==2)
                                                        <td>5. ประสบการณ์ในการทำงานสายเทคโนโลยี : {{$positions->work}}</td>
												    @endif
                                                </tr>
                                                @if($user[0]->position_id==1)
                                                    <tr>
                                                        <td>6. คุณมีเครื่องคอมพิวเตอร์หรืออุปกรณ์อิเล็กทรอนิกส์ที่สามารถเชื่อมต่ออินเตอร์ใช้ในการทำงานประจำตำแหน่ง : {{$positions->computer}}</td>
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
