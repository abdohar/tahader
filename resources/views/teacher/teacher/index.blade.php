@extends('teacher.layout')
@section('content')


<div class="row">
<div class="col-md-12 grid-margin stretch-card">
                <div class="card">

                  <div class="card-body" style="padding: 15px;text-align: center;">
                    <h4 class="card-title" style="margin: 0; line-height: 28px;">To Access File Please Register in google Drive With Your Email : <br><span style="font-size: 18px;">{{ $user->email }}</span></h4>
                  </div>
                </div>
              </div>
          </div>

<div class="row">
                 <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="font-size: 30px;text-align: center;">Grades</h4>
                    <div class="media">
                     {{--  <i class="mdi mdi-earth icon-md text-info d-flex align-self-start mr-3"></i> --}}
                      <div class="media-body">
                        <p class="card-text" style="text-align: center;font-size: 50px;font-weight: bold">{{ $grades }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="font-size: 30px;text-align: center;">Subjects</h4>
                    <div class="media">
                     {{--  <i class="mdi mdi-earth icon-md text-info d-flex align-self-start mr-3"></i> --}}
                      <div class="media-body">
                        <p class="card-text" style="text-align: center;font-size: 50px;font-weight: bold">{{ $subjects }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

@endsection