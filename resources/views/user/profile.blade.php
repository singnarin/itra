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
										<h1 class="h4 text-gray-900 mb-4">User Profile</h1>

										@include('layout.flash-message')
										
									</div>
									 
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Profile</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>คำนำหน้าชื่อ : {{$user[0]->prefixName}}</td>
                                                </tr>   
                                                <tr>
                                                    <td>ชื่อ : {{$user[0]->firstName}}</td>
                                                </tr>
                                                <tr>
                                                    <td>นามสกุล : {{$user[0]->lastName}}</td>
                                                </tr>
                                                <tr>
                                                    <td>สังกัดสถานศึกษา : {{$user[0]->schools->school}}</td>
                                                </tr>
                                                <tr>
                                                    <td>จังหวัด : {{$user[0]->provinces->name_th}}</td>
                                                </tr>
                                                <tr>
                                                    <td>ตำแหน่ง : {{$user[0]->positions->positionName ?? ''}}</td>
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
