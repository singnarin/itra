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
										<h1 class="h4 text-gray-900 mb-4">คำอธิบายก่อนทำการทดสอบ</h1>

										@include('layout.flash-message')
										
									</div>
									<div class="text-center">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/bCeNAiyOPPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="text-center">
										@if ($user[0]->position_id==1)
											<a href="question"><button id="button" type="button" class="btn btn-primary btn-user">หากพร้อมแล้วไปเริ่มทำแบบทดสอบกันเลย</button></a>
                                        @endif
										@if ($user[0]->position_id==2)
											<a href="questionadmin"><button id="button" type="button" class="btn btn-primary btn-user">หากพร้อมแล้วไปเริ่มทำแบบทดสอบกันเลย</button></a>
                                        @endif
										@if ($user[0]->position_id==3)
										    ...
                                        @endif
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
