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
										<h1 class="h4 text-gray-900 mb-4">ผลการทำแบบทดสอบ สำหรับผู้ใช้งานทั่วไป</h1>
                                        <h1 class="h6 text-gray-900 mb-4">{{$users[0]->prefixName}}{{$users[0]->firstName}} {{$users[0]->lastName}}</h1>
										<h1 class="h6 text-gray-900 mb-4">สังกัด {{$users[0]->Schools->school}}</h1>

										@include('layout.flash-message')
										
									</div>
                                    
                                    @if ($userdatas->status=='OK')
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <?php
                                            $score = unserialize(base64_decode($userdatas->answer));
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
                                                                    @if($sum_score<3)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @elseif($sum_score<5)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @elseif($sum_score<7)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score<9)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @endif
                                                                     <a href="../resultquestion/{{$section->id}}">ดูรายละเอียด</a> 
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
                                                                    @elseif($sum_score<17)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score<25)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @endif
                                                                    <a href="../resultquestion/{{$section->id}}">ดูรายละเอียด</a> 
                                                                @endif
                                                                @if($section->id==3)
                                                                    @if($sum_score<7)
                                                                    <div class="alert alert-success">
                                                                        ความเสี่ยงต่ำ
                                                                    </div>
                                                                    @elseif($sum_score<13)
                                                                    <div class="alert alert-info">
                                                                        ความเสี่ยงปานกลาง
                                                                    </div>
                                                                    @elseif($sum_score<17)
                                                                    <div class="alert alert-warning">
                                                                        ความเสี่ยงสูง
                                                                    </div>
                                                                    @elseif($sum_score<25)
                                                                    <div class="alert alert-danger">
                                                                        ความเสี่ยงสูงมาก
                                                                    </div>
                                                                    @endif
                                                                    <a href="../resultquestion/{{$section->id}}">ดูรายละเอียด</a> 
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
                                                
                                                    @if($sum_scr<68)
                                                    <div class="alert alert-success">
                                                        ความเสี่ยงต่ำ
                                                    </div>
                                                    @elseif($sum_scr<135)
                                                    <div class="alert alert-info">
                                                        ความเสี่ยงปานกลาง
                                                    </div>
                                                    @elseif($sum_scr<202)
                                                    <div class="alert alert-warning">
                                                        ความเสี่ยงสูง
                                                    </div>
                                                    @elseif($sum_scr<269)
                                                    <div class="alert alert-danger">
                                                        ความเสี่ยงสูงมาก
                                                    </div>
                                                    @endif
                                                    <a href="../resultchart">ดูรายละเอียด</a>   

                                            </td>
                                        </tr>
                                        </table>
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
