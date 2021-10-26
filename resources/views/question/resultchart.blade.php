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
                                                if($sum_score>7){
                                                    $x[$st->id]='ความเสี่ยงสูงมาก';
                                                }else if($sum_score>5){
                                                    $x[$st->id]='ความเสี่ยงสูง';
                                                }else if($sum_score>3){
                                                    $x[$st->id]='ความเสี่ยงปานกลาง';
                                                }else{
                                                    $x[$st->id]='ความเสี่ยงต่ำ';
                                                }
                                            }
                                            if($st->id==2){
                                                if($sum_score>17){
                                                    $x[$st->id]='ความเสี่ยงสูงมาก';
                                                }else if($sum_score>13){
                                                    $x[$st->id]='ความเสี่ยงสูง';
                                                }else if($sum_score>7){
                                                    $x[$st->id]='ความเสี่ยงปานกลาง';
                                                }else{
                                                    $x[$st->id]='ความเสี่ยงต่ำ';
                                                }
                                            }
                                            if($st->id==3){
                                                if($sum_score>17){
                                                    $x[$st->id]='ความเสี่ยงสูงมาก';
                                                }else if($sum_score>13){
                                                    $x[$st->id]='ความเสี่ยงสูง';
                                                }else if($sum_score>7){
                                                    $x[$st->id]='ความเสี่ยงปานกลาง';
                                                }else{
                                                    $x[$st->id]='ความเสี่ยงต่ำ';
                                                }
                                            }
                                            
                                            //$x[$st->id] = $sum_score;
                                        }
                                        ?>
                                        
										@include('layout.flash-message')
									</div>
                                    @if ($userdatas->status=='OK')
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-6 mb-sm-0">
                                            <div id="piechart" style="width: 500px; height: 300px;"></div>
                                        </div>
                                        <div class="col-sm-6 mb-6 mb-sm-0">
                                            @foreach ($section as $sectionname)
                                            {{$sectionname->id}}. {{$sectionname->section}}<a href="../resultquestion/{{$sectionname->id}}">คลิก</a><br/>
                                            @endforeach
                                            <br><br><br><br><br>
                                            <h1 class="h4 text-gray-900 mb-4">ระดับความเสี่ยงที่ได้อยู่ในระดับ</h1>
                                            <?php $sum_scr = 0 ; 
                                                foreach ($score as $scr){
                                                    $sum_scr = $sum_scr + is_numeric($scr);
                                                }
                                                ?>
                                                
                                                    @if($sum_scr<68)
                                                    <div class="alert alert-success">
                                                       {{$sum_scr}} : ความเสี่ยงต่ำ
                                                    </div>
                                                    @elseif($sum_scr<135)
                                                    <div class="alert alert-info">
                                                        {{$sum_scr}} : ความเสี่ยงปานกลาง
                                                    </div>
                                                    @elseif($sum_scr<202)
                                                    <div class="alert alert-warning">
                                                        {{$sum_scr}} : ความเสี่ยงสูง
                                                    </div>
                                                    @elseif($sum_scr<269)
                                                    <div class="alert alert-danger">
                                                        {{$sum_scr}} : ความเสี่ยงสูงมาก
                                                    </div>
                                                    @endif
                                        </div>
                                    </div>
                                    <hr>
                                </form>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['ด้านที่', 'ด้านที่ 1','ด้านที่ 2','ด้านที่ 3',],
  <?php
    echo '["ระดับความเสี่ยง",';
    foreach ($x as $item){
        echo '"'.$item.'",';
    }
    echo ']' ;
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {
    /*chart: {
      title: 'Company Performance',
      subtitle: 'Sales, Expenses, and Profit: 2014-2017',
    },*/
    bars: 'vertical' // Required for Material Bar Charts.
  };

  // Display the chart inside the <div> element with id="piechart"
    var chart = new google.charts.Bar(document.getElementById('piechart'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
