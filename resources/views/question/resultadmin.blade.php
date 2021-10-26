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

										@include('layout.flash-message')
										
									</div>
                                    @if (isset($userdatas) && $userdatas->status=='OK')
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <?php
                                            $score = unserialize(base64_decode($userdatas->answeradmin));
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
                                                            $sum_score = $sum_score + $score[$question->id]; 
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
                                                                    @if($sum_score>6)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>4)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>2)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif
                                                                
                                                                @if($section->id==2)
                                                                    @if($sum_score>18)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>12)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>6)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==3)
                                                                    @if($sum_score>18)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>12)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>6)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==4)
                                                                    @if($sum_score>21)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>14)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>7)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==5)
                                                                    @if($sum_score>21)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>14)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>7)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==6)
                                                                    @if($sum_score>3)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>2)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>1)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==7)
                                                                    @if($sum_score>27)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>18)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>9)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==8)
                                                                    @if($sum_score>21)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>14)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>7)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==9)
                                                                    @if($sum_score>9)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>6)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>3)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==10)
                                                                    @if($sum_score>15)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>10)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>5)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==11)
                                                                    @if($sum_score>9)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>6)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>3)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==12)
                                                                    @if($sum_score>12)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>8)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>4)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==13)
                                                                    @if($sum_score>6)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>4)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>2)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif

                                                                @if($section->id==14)
                                                                    @if($sum_score>15)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @elseif($sum_score>10)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score>5)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @else($sum_score)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultadminquestion/{{$section->id}}">ดูรายละเอียด</a> 
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
                                                    $sum_scr = $sum_scr + $scr;
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
                                                    <a href="../resultadminchart">ดูรายละเอียด</a>   

                                            </td>
                                        </tr>

                                        </table>
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
			</div>
@endsection
