  @if ($message = Session::get('success'))
    <div class="alert alert-success">
       <strong>{{ $message }}</strong>
    </div>
  @endif

    @if ($message = Session::get('alert'))
    <div class="alert alert-warning">
       <strong>{{ $message }}</strong>
    </div>
  @endif

  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>
  @endif