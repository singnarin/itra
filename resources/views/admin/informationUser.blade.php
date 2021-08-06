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

                                    @if($users->status=='OK' && $users->position_id==1)
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <?php
                                            $score = unserialize(base64_decode($users->answer));
                                        ?>
                                        @foreach ($sections as $section)
                                                <?php
                                                    $sum_score = 0 ;
                                                    $num_row = 0 ;
                                                ?>
                                                @foreach ($questions as $question)
                                                    
                                                    @if ($question->section_id==$section->id)
                                                        <?php
                                                            $num_row = $num_row + 1 ;
                                                            $sum_score = $sum_score + is_numeric($score[$question->id]); 
                                                        ?>
                                                    @endif

                                                @endforeach
                                                <thead>
                                                    <tr>
                                                        <th>ด้านที่ {{ $section->section }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$sum_score}}
                                                                @if($section->id==1)
                                                                    @if($sum_score<9)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @elseif($sum_score<17)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @elseif($sum_score28)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score<33)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @endif
                                                                     <!--<a href="../resultquestion/{{$section->id}}">ดูรายละเอียด</a> -->
                                                                @endif
                                                                @if($section->id==2)
                                                                    @if($sum_score<7)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @elseif($sum_score<13)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @elseif($sum_score<19)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score<25)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @endif
                                                                    <!--<a href="../resultquestion/{{$section->id}}">ดูรายละเอียด</a> -->
                                                                @endif
                                                                @if($section->id==3)
                                                                    @if($sum_score<17)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @elseif($sum_score<33)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @elseif($sum_score<49)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score<65)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @endif
                                                                    <!--<a href="../resultquestion/{{$section->id}}">ดูรายละเอียด</a> -->
                                                                @endif
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        @endforeach 
                                        <tr>
                                            <th>สรุปผลการประเมินภาพรวม</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php $sum_scr = 0 ; 
                                                foreach ($score as $scr){
                                                    $sum_scr = $sum_scr + is_numeric($scr);
                                                }
                                                ?>
                                                
                                                    @if($sum_scr<31)
                                                    <div class="alert alert-success">
                                                        ความเสี่ยงต่ำ
                                                    </div>
                                                    @elseif($sum_scr<61)
                                                    <div class="alert alert-info">
                                                        ความเสี่ยงปานกลาง
                                                    </div>
                                                    @elseif($sum_scr<94)
                                                    <div class="alert alert-warning">
                                                        ความเสี่ยงสูง
                                                    </div>
                                                    @elseif($sum_scr<121)
                                                    <div class="alert alert-danger">
                                                        ความเสี่ยงสูงมาก
                                                    </div>
                                                    @endif
                                                    <!--<a href="../resultchart">ดูรายละเอียด</a>   -->

                                            </td>
                                        </tr>
                                        </table>
                                        <hr>
                                        </form>
                                    </div>
                                    @endif

                                    <?php 
                                    $score = unserialize(base64_decode($users->answer));

                                    foreach($sections as $st){
                                                $sum_score = 0 ;
                                                $num_row = 0 ;
                                            foreach($questions as $question){
                                                
                                                if ($question->section_id==$st->id){
                                                        $num_row = $num_row + 1 ;
                                                        $sum_score = $sum_score + is_numeric($score[$question->id]); 
                                                }

                                            }
                                        $x[$st->id] = $sum_score;
                                    }
                                    ?>

                                    <div class="table-responsive">
                                        <canvas id="myChart" width="400" height="400"></canvas>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
                                        <script>
                                            var ctx = document.getElementById("myChart");
                                            var myChart = new Chart(ctx, {
                                                type: 'line',
                                                data: {
                                                    labels: {{$sections_arr}},
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
                                </div>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
