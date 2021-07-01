<?php $user = Session::get('user'); ?>
@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">การประเมินผู้ใช้งานทั่วไป</h1>
										@include('layout.flash-message')
									</div>
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>{{$questions[0]->sections->section}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($questions as $question)
                                                                <tr>
                                                                    <td>
                                                                        <p>{{$question->no}}.{{$question->question}}</p>
                                                                        ------>
                                                                        <?php
                                                                            $score = unserialize(base64_decode($userdatas->answer));
                                                                           
                                                                                foreach($score as $key => $value) {
                                                                                    if($question->id==$key){
                                                                                        switch($value){
                                                                                            case 1:
                                                                                                echo substr($question->answer1, 0, -2);
                                                                                                break;
                                                                                            case 2:
                                                                                                echo substr($question->answer2, 0, -2);
                                                                                                break;
                                                                                            case 3:
                                                                                                echo substr($question->answer3, 0, -2);
                                                                                                break;
                                                                                            case 4:
                                                                                                echo substr($question->answer4, 0, -2);
                                                                                                break;
                                                                                            default:
                                                                                                echo 'ไม่ได้ตอบคำถาม';
                                                                                        }
                                                                                    }
                                                                                }
                                                                            
                                                                         ?>
                                                                    </td>
                                                                </tr>                                    
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            <hr>
                                    </div>
                                </div>
						</div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">แนวทางการปฏิบัติ/คำแนะนำ</h1>
                                    @include('layout.flash-message')
                                </div>
                                ...................
                            </div>
                        </div>
					</div>
				</div>
			</div>
@endsection
