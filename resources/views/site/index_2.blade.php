<?php $user = Session::get('user'); ?>
@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<img src="../images/logo.png" width="100">
									</div>
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">คำอธิบายก่อนทำการทดสอบ</h1>
									</div>
									<div>
										แบบทดสอบนี้แบ่งการใช้งานออกเป็น 2 ประเภท ได้แก่ ผู้ใช้งานทั่วไป และเจ้าหน้าที่ดูแลระบบสารสนเทศองค์กร ผู้เข้ารับการทดสอบจะเลือกแบบทดสอบให้ตรงกับการปฏิบัติงานของตนเอง เพื่อผลการประเมินที่ถูกต้องเหมาะสมโดยผลการประเมินจากการทำแบบทดสอบจะมีแนวทางและข้อปฏิบัติทีเหมาะสมในการช่วยให้ลดระดับความเสี่ยงจากการใช้เทคโนโลยีสารสนเทศในองค์กรได้ ท่านสามารถกลับเข้ามาดูการทำแบบทดสอบได้โดยใช้ชื่อบัญชีและพาสเวิร์ดที่ท่านได้กำหนดไว้ในขั้นตอนการลงทะเบียนแล้ว
									</div>
									<div class="text-center">
										<br>
										<input type="checkbox" id="termsChkbx " onchange="isChecked(this,'sub1','sub2');"/>
										<label for="termsChkbx">เข้าใจและยอมรับในคำอธิบายรายละเอียดการจัดเก็บข้อมูลและผลการประเมินความเสี่ยงการใช้เทคโนโลยีสารสนเทศในองค์กร</label>
									</div>
									<div class="text-center">
										<br>
										<a href="question?email={{$user[0]->id}}&position_id=1"><button id="sub1" type="button" class="btn btn-primary btn-user" disabled="disabled">เจ้าหน้าที่ใช้งานทั่วไป</button></a>
										<a href="questionadmin?email={{$user[0]->id}}&position_id=2"><button id="sub2" type="button" class="btn btn-primary btn-user" disabled="disabled">เจ้าหน้าที่ดูแลระบบสารสนเทศ</button></a>
										<!--
										@if ($user[0]->position_id==1)
											<a href="question"><button id="button" type="button" class="btn btn-primary btn-user">หากพร้อมแล้วไปเริ่มทำแบบทดสอบกันเลย</button></a>
                                        @endif
										@if ($user[0]->position_id==2)
											<a href="questionadmin"><button id="button" type="button" class="btn btn-primary btn-user">หากพร้อมแล้วไปเริ่มทำแบบทดสอบกันเลย</button></a>
                                        @endif
										@if ($user[0]->position_id==3)
										    ...
                                        @endif
										-->
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
<script language="javascript">
	function isChecked(chk,sub1,sub2) {
    console.log(sub1);
    var myLayer = document.getElementById(sub1);
    var myLayer2 = document.getElementById(sub2);
    if (chk.checked == true) {
        myLayer.disabled = false;
        myLayer2.disabled = false;
    } else {
        myLayer.disabled = true;
        myLayer2.disabled = true;
    };
}
</script>
