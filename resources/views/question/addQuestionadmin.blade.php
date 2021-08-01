@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">เพิ่มคำถาม</h1>
										@include('layout.flash-message')
									</div>
									<form class="user" action="addQuestionadmin" method="post" id="myForm" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="id" value="{{$questions->id ?? ''}}">
										<div class="form-group row">
											<div class="col-sm-2 mb-2 mb-sm-0">
												<input type="text" class="form-control" id="no" name="no" placeholder="ข้อที่" value="{{$questions->no ?? ''}}">
											</div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                @if(!empty($questions->section_id))
                                                    {!! Form::select('section_id',[$questions->section_id=>$questions->sections->section] + \App\Sectionadmins::pluck('section','id')->toArray(), null, array('class'=>'form-control')) !!}
                                                @else
                                                    {!! Form::select('section_id',[null=>':: ส่วนที่ ::'] + \App\Sectionadmins::pluck('section','id')->toArray(), null, array('class'=>'form-control')) !!}
                                                @endif
												 
											</div>
										</div>
                                        <div class="form-group row">
											<div class="col-sm-12 mb-12 mb-sm-0">
												<input type="text" class="form-control" name="question" placeholder="คำถาม" value="{{$questions->question ?? ''}}">
											</div>
										</div>
                                        <div class="form-group row">
											<div class="col-sm-10 mb-12 mb-sm-0">
												<input type="text" class="form-control" name="answer1" placeholder="คำตอบ" value="{{substr($questions->answer1,0,-2) ?? ''}}">
											</div>
                                            <div class="col-sm-2 mb-2 mb-sm-0">
												<input type="number" class="form-control" name="score1" placeholder="คะแนน" value="{{substr($questions->answer1,-1) ?? ''}}">
											</div>
										</div>
                                        <div class="form-group row">
											<div class="col-sm-10 mb-12 mb-sm-0">
												<input type="text" class="form-control" name="answer2" placeholder="คำตอบ" value="{{substr($questions->answer2,0,-2) ?? ''}}">
											</div>
                                            <div class="col-sm-2 mb-2 mb-sm-0">
												<input type="number" class="form-control" name="score2" placeholder="คะแนน" value="{{substr($questions->answer2,-1) ?? ''}}">
											</div>
										</div>
                                        <div class="form-group row">
											<div class="col-sm-10 mb-12 mb-sm-0">
												<input type="text" class="form-control" name="answer3" placeholder="คำตอบ" value="{{substr($questions->answer3,0,-2) ?? ''}}">
											</div>
                                            <div class="col-sm-2 mb-2 mb-sm-0">
												<input type="number" class="form-control" name="score3" placeholder="คะแนน" value="{{substr($questions->answer3,-1) ?? ''}}">
											</div>
										</div>
                                        <div class="form-group row">
											<div class="col-sm-10 mb-12 mb-sm-0">
												<input type="text" class="form-control" name="answer4" placeholder="คำตอบ" value="{{substr($questions->answer4,0,-2) ?? ''}}">
											</div>
                                            <div class="col-sm-2 mb-2 mb-sm-0">
												<input type="number" class="form-control" name="score4" placeholder="คะแนน" value="{{substr($questions->answer4,-1) ?? ''}}">
											</div>
										</div>
										<button id="button" type="submit" class="btn btn-primary btn-user btn-block">บันทึก</button>
										<hr>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
