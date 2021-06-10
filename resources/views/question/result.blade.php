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
										<h1 class="h4 text-gray-900 mb-4">ผลการประเมินความเสี่ยง</h1>

										@include('layout.flash-message')
										
									</div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">1.Confidential: การปกป้องสารสนเทศให้เข้าถึงได้เฉพาะผู้ที่มีสิทธิ</th>
                                                </tr>
                                                <tr>
                                                    <th>ปัจจัยเสี่ยง</th>
                                                    <th>ผลการประเมินความเสี่ยง</th>
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
                                                                echo $score[$question->id];
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
