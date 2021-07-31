@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">รายงานการประเมินความเสี่ยง</h1>

										@include('layout.flash-message')
										
									</div>
									 
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<td rowspan="2">No.</td>
												<td rowspan="2">ชื่อ - สกุล</td>
												<td colspan="{{$questions->count()}}">คะแนน/ข้อคำถาม</td>
											</tr>
											<tr>
												<?php $i = 0; ?>
												@while ($i < $questions->count())
													<td>{{$questions[$i]->no}}</td>
													<?php $i++; ?>
												@endwhile
											</tr>
											<?php $i=1; ?>
											@foreach ($users as $user)
											<tr>
												<td>{{$i}}</td>
												<td>{{$user->prefixName}}{{$user->firstName}}  {{$user->lastName}}</td>

													<?php
													if(!empty($user->answer)){
                                                        $score = unserialize(base64_decode($user->answer));
														foreach ($questions as $question) {
                                                            foreach($score as $key => $value) {
																echo '<td>';
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
																	echo '</td>';
                                                                }
                                                            }
														}
                                                    }
                                                     ?>
													 
											</tr>
											<?php $i++; ?>
											@endforeach
										</thead>
									</table>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
