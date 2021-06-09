@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">การประเมินผู้ใช้งานทั่วไป</h1>

										@include('layout.flash-message')
										
									</div>
									<form class="user" action="login" method="post" id="myForm" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>1.Confidential: การปกป้องสารสนเทศให้เข้าถึงได้เฉพาะผู้ที่มีสิทธิ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>1.ระบบเครือข่ายอินเตอร์เน็ตในองค์กรกำหนดให้ท่านต้อง Login ด้วย User name Password ทุกครั้งที่มีการเชื่อมต่อหรือไม่</p> 
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio" >ใช่ ต้องทำการ Login ก่อนทุกครั้ง และต้อง Login ใหม่เมื่อ Session หมดอายุ</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio" >ใช่ ต้องทำการ Login ก่อนทุกครั้ง และต้อง Login ใหม่เมื่อ Session หมดอายุ</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio" >ใช่ ต้องทำการ Login ก่อนทุกครั้ง และต้อง Login ใหม่เมื่อ Session หมดอายุ</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio" >ใช่ ต้องทำการ Login ก่อนทุกครั้ง และต้อง Login ใหม่เมื่อ Session หมดอายุ</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @foreach ($questions as $question)
                                                        <tr>
                                                            <td>
                                                                <p>{{$question->no}}.{{$question->question}}</p>
                                                            </td>
                                                        </tr>                                                       
                                                    @endforeach
                                                </tbody>
                                            </table>
										 
										<button id="button" type="submit" class="btn btn-primary btn-user btn-block">ส่งคำตอบ</button>
										<hr>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
