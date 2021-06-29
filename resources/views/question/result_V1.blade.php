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
										<h1 class="h6 text-gray-900 mb-4">แบบสอบถามชุดนี้ประกอบด้วย 3 เกณฑ์ประกอบหลักในการประเมินความปลอดภัยจากการใช้เทคโนโลยีสารสนเทศ</h1>

										@include('layout.flash-message')
										
									</div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>1.Confidential: การปกป้องสารสนเทศให้เข้าถึงได้เฉพาะผู้ที่มีสิทธิ (จำนวน 8 ข้อ)</th>
                                                    <th>ผลการประเมินอยู่ในระดับ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach ($questions as $question)
                                                    <tr>
                                                        <td>
                                                            <p>{{$question->no}}.{{$question->question}}</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $score = unserialize(base64_decode($users[0]->answer));
                                                                //echo $score[$question->id];
                                                                
                                                                switch ($score[$question->id]) {
                                                                    case 1:
                                                                      echo "1 = ความเสี่ยงต่ำ";
                                                                      break;
                                                                    case 2:
                                                                      echo "2 = ความเสี่ยงปานกลาง";
                                                                      break;
                                                                    case 3:
                                                                      echo "3 = ความเสี่ยงสูง";
                                                                      break;
                                                                    case 4:
                                                                      echo "4 = ความเสี่ยงสูงมาก";
                                                                      break;
                                                                    default:
                                                                      echo "ไม่ทราบผล";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>                                                       
                                                @endforeach

                                            </tbody>
                                        </table>
                                    <hr>
                                </form>
                            </div>
                                    

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
