@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add File form</h4>
                        {{-- <p class="card-description"></p> --}}
                        <form class="forms-sample" action="{{ route('admin.school.grade.subject.file.store',['school' => $school->id,'grade'=>$grade->id,'subject'=>$subject->id]) }}" method="POST">
                  {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleInputEmail1">File name</label>
                            <input type="text" name="file_name" class="form-control" id="exampleInputEmail1" placeholder="Enter File Name">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Drive URL</label>
                            <input type="text" name="drive_url" class="form-control" id="exampleInputEmail1" placeholder="Enter File Name">
                          </div>
                        {{--  <div class="form-group">
                        <label>File upload</label>
                        <input type="file" id="file" name="file" class="file-upload-default" onchange="readURL(this);">
                        <div class="input-group col-xs-12">
                          <input id="text_file" name="file2" type="text" class="form-control file-upload-info" disabled="" value="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button onclick="document.getElementById('file').click()" class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                        </div>
                      </div> --}}
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
                         
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          {{--   <script type="text/javascript">
   function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#text_file')
                        .attr('value', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script> --}}
@endsection