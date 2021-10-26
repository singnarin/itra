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
                                        $score = unserialize(base64_decode($userdatas->answeradmin));

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
                                                    if($sum_score>6){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>4){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>2){
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
                                                if($st->id==4){
                                                    if($sum_score>21){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>14){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>7){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==5){
                                                    if($sum_score>21){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>14){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>7){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==6){
                                                    if($sum_score>3){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>2){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>1){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==7){
                                                    if($sum_score>27){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>18){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>9){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==8){
                                                    if($sum_score>21){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>14){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>7){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==9){
                                                    if($sum_score>9){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>6){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>3){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==10){
                                                    if($sum_score>15){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>10){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>5){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==11){
                                                    if($sum_score>9){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>6){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>3){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==12){
                                                    if($sum_score>12){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>8){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>4){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==13){
                                                    if($sum_score>6){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>4){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>2){
                                                        $x[$st->id]='ความเสี่ยงปานกลาง';
                                                    }else{
                                                        $x[$st->id]='ความเสี่ยงต่ำ';
                                                    }
                                                }
                                                if($st->id==14){
                                                    if($sum_score>15){
                                                        $x[$st->id]='ความเสี่ยงสูงมาก';
                                                    }else if($sum_score>10){
                                                        $x[$st->id]='ความเสี่ยงสูง';
                                                    }else if($sum_score>5){
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
                                            <div id="piechart" style="width: 500px; height: 500px;"></div>
                                        </div>
                                        <div class="col-sm-6 mb-6 mb-sm-0">
                                            @foreach ($section as $sectionname)
                                                {{$sectionname->section}}<a href="../resultadminquestion/{{$sectionname->id}}">คลิก</a><br/>
                                            @endforeach
                                            <br><br>
                                            <h1 class="h4 text-gray-900 mb-4">ระดับความเสี่ยงที่ได้อยู่ในระดับ</h1>

                                                <?php 
                                                    $sum_scr = 0 ; 
                                                    foreach ($score as $scr){
                                                        $sum_scr = $sum_scr + is_numeric($scr);
                                                    }
                                                ?>
                                                
                                                @if($sum_scr>201)
                                                <div class="alert alert-danger">
                                                    ความเสี่ยงสูงมาก
                                                </div>
                                                @elseif($sum_scr>134)
                                                <div class="alert alert-warning">
                                                    ความเสี่ยงสูง
                                                </div>
                                                @elseif($sum_scr>67)
                                                <div class="alert alert-info">
                                                    ความเสี่ยงปานกลาง
                                                </div>
                                                @else
                                                <div class="alert alert-success">
                                                    ความเสี่ยงต่ำ
                                                </div>
                                                @endif
                                        </div>
                                    </div>	
                                    <hr>
                                </form>
                            </div>
                            @else
                                <div class="alert alert-warning alert-block">
                                    <a href="../questionadmin"><button type="button" class="close" data-dismiss="alert"></button>
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
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['หัวข้อที่', '1','2','3','4','5','6','7','8','9','10','11','12','13','14'],
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