<?php $users = Session::get('user'); ?>
@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">ผลการทดสอบสำหรับผู้ดูใช้งานทั่วไป</h1>
										<h1 class="h6 text-gray-900 mb-4">{{$users[0]->prefixName}}{{$users[0]->firstName}} {{$users[0]->lastName}}</h1>
										<h1 class="h6 text-gray-900 mb-4">สังกัด {{$users[0]->Schools->school}}</h1>
                                        
                                        <?php 
                                        $score = unserialize(base64_decode($userdatas->answer));

                                        foreach($section as $st){
                                                    $sum_score = 0 ;
                                                    $num_row = 0 ;
                                                foreach($questions as $question){
                                                    
                                                    if ($question->section_id==$st->id){
                                                            $num_row = $num_row + 1 ;
                                                            $sum_score = $sum_score + $score[$question->id]; 
                                                    }

                                                }
                                            $x[$st->id] = $sum_score;
                                        }
                                        ?>
                                        
										@include('layout.flash-message')
										
									</div>
                                    @if ($userdatas->status=='OK')
                                    <div class="table-responsive">
                                        <canvas id="myChart" width="400" height="400"></canvas>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
                                        <script>
                                            var ctx = document.getElementById("myChart");
                                            var myChart = new Chart(ctx, {
                                                type: 'line',
                                                data: {
                                                    labels: {{$sections}},
                                                    datasets: [{
                                                        label: 'ค่าการประเมินในด้านที่',
                                                        data: {{json_encode(array_values($x))}},
                                                        fill: false,
                                                        borderColor: 'rgb(75, 192, 192)',
                                                        tension: 0.1
                                                    }]
                                                }
                                            });
                                            </script>	
                                    <hr>
                                </form>
                            </div>
                            @else
                                <div class="alert alert-warning alert-block">
                                    <a href="../question"><button type="button" class="close" data-dismiss="alert"></button>
                                        <div align='center'>
                                            <strong>ยังไม่ได้ทำแบบประเมินความเสี่ยง กลับไปทำแบบประเมิน</strong>
                                        </div>
                                    </a>
                                </div>
                            @endif
                                    

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
