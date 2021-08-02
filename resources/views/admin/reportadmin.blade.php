@extends('layout.main')

@section('content')
					<div class="container" style="background-color: #FFFFFF">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">รายงานการประเมินความเสี่ยง</h1>

										@include('layout.flash-message')
										
									</div>
									<div class="table-responsive">    
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<td rowspan="2">No.</td>
												<td rowspan="2">ชื่อ - สกุล</td>
												<td rowspan="2">สังกัด</td>
												<td colspan="{{$questions->count()}}">คะแนน/ข้อคำถาม</td>
												<td rowspan="2">รวม</td>
												<td rowspan="2">เฉลี่ย</td>
												<td rowspan="2">ระดับความเสี่ยง</td>
											</tr>
											<tr>
												<?php $i = 0; ?>
												@while ($i < $questions->count())
													<td>{{$questions[$i]->no}}</td>
													<?php $i++; ?>
												@endwhile
											</tr>
											<?php $x=1; $sum_score=0; $y=0;?>
											@foreach ($users as $user)
											<tr>
												<td>{{$x}}</td>
												<td><a href="../informationUser?id={{$user->id}}">{{$user->prefixName}}{{$user->firstName}}  {{$user->lastName}}</a></td>
												<td>{{$user->schools->school}}</td>
													
													<?php 
														$j = 0; 
														$score = unserialize(base64_decode($user->answer));
														if($score != ''){
															foreach($score as $key => $value) {
																if(!empty($questions[$j]->id) && $questions[$j]->id==$key){
																	echo '<td>'.$value.'</td>';
																}
																$sum_score = $sum_score + $value;
																$j++;
																$y++;
															}
														}
													?>

													<?php
													/*
														foreach($score as $key => $value) {
															if($question->id==$key){
																echo '<td>'.$key.'</td>';
																$sum_score = $sum_score + $key;
																$y++;
															}
														}
														*/
                                                    ?>
												<td>
													@if($sum_score!='')
														{{$sum_score}}</td>
													@endif
												<td>
													@if($sum_score!='')
														{{$sum_score/$y}}
													@endif
												</td>
												<td>
												@if($sum_score!='')
													@if($sum_score<30)
														ความเสี่ยงต่ำ
													@elseif($sum_score<59)
														ความเสี่ยงปานกลาง
													@elseif($sum_score<88)
														ความเสี่ยงมาก
													@else
														ความเสี่ยงมากที่สุด
													@endif
												@endif
												</td>
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
						
@endsection
