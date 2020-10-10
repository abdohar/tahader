@extends('layout')
@section('content')

<div class="col-12 grid-margin">
                <div class="card">
                  @include('messages')
                  <div class="card-body">
                    <h4 class="card-title">Add Grade and Subject to {{ $school->school_name }}</h4>
                    <form class="form-sample"action="{{ route('admin.school.store.grade.sub',['school' => $school->id]) }}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}

                      <p class="card-description"> Grade info </p>                      
                   <div class="row">
  <div class="col-lg-12">
    <div class="checkbox">
      <label>
        <input id="magic_checkbox" type="checkbox" name="something" value="a_value"> Do you want more Grade?<br>
         <div><input id="unmber_group" hidden="" type="integer" value="1" name="number_group"></div>
      </label>
    </div>
  </div>
</div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Grade</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="school_grade1">
                              	@foreach($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Subject</label>
                            <div class="col-sm-9">
                            	<input type="text" name="subject_name1" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                       <div id="add_to_me" class="form-group" hidden=""></div>
                      <div id="add_to_me_grade" class="form-group" hidden=""></div>

                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>

<script type="text/javascript">
            document.getElementById('magic_checkbox').addEventListener('change', function(){
              $("#magic_checkbox").prop("checked", false);
              function insertAfter(el, referenceNode) {
    referenceNode.parentNode.insertBefore(el, referenceNode.nextSibling);
}
              var newElement = document.createElement("div");
               newElement.classList.add('form-group');
                  newElement.innerHTML = "<div class=\"row\"><div class=\"col-md-6\"><div class=\"form-group row\"><label class=\"col-sm-3 col-form-label\">Grade</label><div class=\"col-sm-9\"> <select id=\"grade_name\" name=\"school_grade\" class=\"form-control\" name=\"school_country\">@foreach($grades as $grade)<option value=\"{{ $grade->id }}\">{{ $grade->name }}</option> @endforeach </select></div></div></div></div><div class=\"row\"><div class=\"col-md-6\"><div class=\"form-group row\"> <label class=\"col-sm-3 col-form-label\">Subject</label><div class=\"col-sm-9\"><input id=\"subject_name\" type=\"text\" name=\"subject_name\" class=\"form-control\"></div></div></div></div>";
            var myCurrentElement= document.getElementById("add_to_me");  
                insertAfter(newElement,myCurrentElement);
                
                let val = document.getElementById('unmber_group').value
                val=parseInt(val)+1;
                val.toString();
               
               let grade_name="school_grade"+val;
               let subject_name="subject_name"+val;

               document.getElementById("grade_name").setAttribute("name",grade_name);
               document.getElementById("subject_name").setAttribute("name",subject_name);
               document.getElementById("unmber_group").setAttribute("value",val);
        }, false);
    </script>
                 
@endsection