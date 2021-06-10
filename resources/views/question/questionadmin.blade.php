@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">การประเมินผู้ใช้งานผู้ดูแลระบบสารสนเทศ</h1>
										@include('layout.flash-message')
									</div>
                                    <div class="text-left">
										<a href="addQuestionadmin"><button id="button" type="button" class="btn btn-success">เพิ่มคำถาม</button></a> 
									</div>
									<form class="user" action="answeradmin" method="post" id="myForm" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>1.Confidential: การปกป้องสารสนเทศให้เข้าถึงได้เฉพาะผู้ที่มีสิทธิ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($questions as $question)
                                                        <tr>
                                                            <td>
                                                                <p>{{$question->no}}.{{$question->question}}</p>
                                                                <div class="radio">
                                                                    <label><input type="radio" name="{{$question->id}}" value="{{$question->id.'='.substr($question->answer1,-1)}}">{{substr($question->answer1,0,-2)}}</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label><input type="radio" name="{{$question->id}}" value="{{$question->id.'='.substr($question->answer2,-1)}}">{{substr($question->answer2,0,-2)}}</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label><input type="radio" name="{{$question->id}}" value="{{$question->id.'='.substr($question->answer3,-1)}}">{{substr($question->answer3,0,-2)}}</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label><input type="radio" name="{{$question->id}}" value="{{$question->id.'='.substr($question->answer4,-1)}}">{{substr($question->answer4,0,-2)}}</label>
                                                                </div>
                                                                <div class="text-left">
                                                                    <a href="../editQuestionadmin?id={{$question->id}}"><button id="button" type="button" class="btn btn-warning">แก้ไข</button></a> 
                                                                    <a href="../deleteQuestionadmin?id={{$question->id}}"><button id="button" type="button" class="btn btn-danger">ลบ</button></a>
                                                                </div>
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
