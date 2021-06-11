@extends('layout.main')

@section('content')
			<div class="card-body">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">รายงานการประเมินความเสี่ยง</h1>

										@include('layout.flash-message')
										
									</div>
									 
                                    กรุณาบอกฉันว่าคุณต้องการอะไร

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection
