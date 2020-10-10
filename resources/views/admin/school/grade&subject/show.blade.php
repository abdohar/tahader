@extends('layout')
@section('content')

<div class="row">
<div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Show Grade In School</h4>
                        <p class="card-description"> Select School To Show Grade </p>
                        <form class="forms-sample" action="{{ route('admin.school.show.grade.post') }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                          <div class="row">
                         <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">School's</label>
                            <div class="col-sm-8">
                              <select name="school_id" class="form-control">
                               @foreach($schools as $school)
                               <option value="{{ $school->id }}">{{ $school->school_name }}
                               </option>
                               @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection