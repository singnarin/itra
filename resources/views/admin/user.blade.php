@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">จัดการผู้ใช้งาน</h1>

										@include('layout.flash-message')
										
									</div>
									 
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <td>No.</td>
                                            <td>ชื่อ - สกุล</td>
                                            <td>สังกัด</td>
                                            <td>ตำแหน่ง</td>
                                            <td>Action</td>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td><a href="../informationUser?id={{$user->id}}">{{$user->prefixName}}{{$user->firstName}}  {{$user->lastName}}</a></td>
                                                    <td>{{$user->schools->school}}</td>
                                                    <td>{{$user->positions->positionName}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger">ลบ</button>
                                                        <!--
                                                            <button type="button" class="btn btn-warning">แก้ไข</button>
                                                            <button type="button" class="btn btn-success">อนุมัติ</button>
                                                        -->
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            @endforeach

                                        </tbody>
                                    </table>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
