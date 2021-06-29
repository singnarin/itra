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
                                                    <th>เกณฑ์การประเมิน</th>
                                                    <th>ผลการประเมินอยู่ในระดับ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.Confidential: การปกป้องสารสนเทศให้เข้าถึงได้เฉพาะผู้ที่มีสิทธิ (จำนวน 8 ข้อ)</td>
                                                    <td>Result</td>
                                                </tr>
                                                <tr>
                                                    <td>2.Integrity: ปกป้องความถูกต้องสมบูรณ์ของสารสนเทศไม่ให้ถูกแก้ไขเปลี่ยนแปลงผิดไปจากความเป็นจริง (จำนวน 6 ข้อ)</td>
                                                    <td>Result</td>
                                                </tr>
                                                <tr>
                                                    <td>3.Availability : สร้างความเชื่อมั่นว่าระบบสารสนเทศพร้อมใช้งาน (จำนวน 15 ข้อ)</td>
                                                    <td>Result</td>
                                                </tr>
                                                <tr>
                                                    <td>สรุปผลการประเมินภาพรวม การใช้งานเทคโนโลยีสารสนเทศในองค์กร</td>
                                                    <td>Result</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">ดูรายละเอียดข้อควรปรับปรุงเพื่อลดความเสี่ยงให้น้อยลง</td>
                                                </tr>
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
