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
										<h1 class="h4 text-gray-900 mb-4">รายงานผล</h1>
										<h1 class="h4 text-gray-900 mb-4">การวัดระดับความเสี่ยงการใช้เทคโนโลยีสารสนเทศในองค์กร</h1>
										<h1 class="h6 text-gray-900 mb-4">{{$users[0]->prefixName}}{{$users[0]->firstName}} {{$users[0]->lastName}} ประเภท {{$users[0]->Positions->positionName}}</h1>
                                        <hr>                                        
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
                                                
                                            if($st->id==1){
                                                if($sum_score>27){
                                                    $x[$st->id]='ความเสี่ยงสูงมาก';
                                                }else if($sum_score>16){
                                                    $x[$st->id]='ความเสี่ยงสูง';
                                                }else if($sum_score>8){
                                                    $x[$st->id]='ความเสี่ยงปานกลาง';
                                                }else{
                                                    $x[$st->id]='ความเสี่ยงต่ำ';
                                                }
                                            }
                                            if($st->id==2){
                                                if($sum_score>18){
                                                    $x[$st->id]='ความเสี่ยงสูงมาก';
                                                }else if($sum_score>12){
                                                    $x[$st->id]='ความเสี่ยงสูง';
                                                }else if($sum_score>6){
                                                    $x[$st->id]='ความเสี่ยงปานกลาง';
                                                }else{
                                                    $x[$st->id]='ความเสี่ยงต่ำ';
                                                }
                                            }
                                            if($st->id==3){
                                                if($sum_score>48){
                                                    $x[$st->id]='ความเสี่ยงสูงมาก';
                                                }else if($sum_score>32){
                                                    $x[$st->id]='ความเสี่ยงสูง';
                                                }else if($sum_score>16){
                                                    $x[$st->id]='ความเสี่ยงปานกลาง';
                                                }else{
                                                    $x[$st->id]='ความเสี่ยงต่ำ';
                                                }
                                            }
                                            
                                            $x[$st->id] = $sum_score;
                                        }
                                        ?>
										@include('layout.flash-message')
                                        {{json_encode(array_values($x))}}
									</div>
                                    @if ($userdatas->status=='OK')
                                    <div class="table-responsive">
                                        <canvas id="myChart" width="400" height="400"></canvas>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
                                        <script>
                                            var ctx = document.getElementById("myChart");
                                            var myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: {{$sections}},
                                                    datasets: [{
                                                        label: 'ค่าการประเมินในด้านที่',
                                                        data: {{json_encode(array_values($x))}},
                                                        fill: false,
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(255, 206, 86, 0.2)'
                                                        ],
                                                        borderColor: [
                                                            'rgba(255,99,132,1)',
                                                            'rgba(54, 162, 235, 1)',
                                                            'rgba(255, 206, 86, 1)'
                                                        ],
                                                        borderWidth: 1
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
                            <div id="piechart"></div>
                                    

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
