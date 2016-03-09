@extends('layouts.main')

@section('title',' My Acedamics | New Academy')

@section('content')
<div class="container">
  <h3 class="center" >Create New Academy</h3>
  <div class="row">
      {!! Form::open(array('route' => 'academics.store','files' => true,'class' => 'col s12')) !!}
        <div class="row">
          <div class="input-field col s6">
            {{Form::text('user_name',null,array('class' => 'validate', 'required' => ''))}}
            {{Form::label('user_name', 'User Name')}}
          </div>
          <div class="input-field col s6">
            {{Form::text('academic_name',null,array('class' => 'validate', 'required' => ''))}}
            {{Form::label('academic_name', 'Academy Name')}}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            {{Form::email('email',null,array('class' => 'validate', 'required' => ''))}}
            {{Form::label('email', 'Email')}}
          </div>
          <div class="input-field col s6">
            {{Form::text('phone',null,array('class' => 'validate', 'required' => ''))}}
            {{Form::label('phone', 'Phone')}}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s3">
            {!!Form::selectRange('opening_time',0, 12)!!}
            {{Form::label('opening_time', 'Opening time')}}
          </div>
          <div class="input-field col s2">
            {{Form::select('opening_time_period', array('AM' => 'AM', 'PM' => 'PM'), 'AM')}}
          </div>
          <div class="input-field col s3 offset-s1">
            <!-- Form::text('closing_time',null,array('class' => 'validate', 'required' => ''))}} -->
            {!!Form::selectRange('closing_time',0, 12)!!}
            {{Form::label('closing_time', 'closing Time')}}
          </div>
          <div class="input-field col s2">
            {{Form::select('closing_time_period', array('AM' => 'AM', 'PM' => 'PM'), 'AM')}}
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                {{Form::textarea('description',null,array('class' => 'materialize-textarea', 'required' => ''))}}
                {{Form::label('description', 'Description')}}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                {{Form::text('latitude',null,array('class' => 'validate', 'required' => ''))}}
                {{Form::label('latitude', 'Latitude')}}
            </div>
            <div class="input-field col s6">
                {{Form::text('longitude',null,array('class' => 'validate', 'required' => ''))}}
                {{Form::label('longitude', 'Longitude')}}
            </div>
        </div>
        <div class="row">
          <div class="file-field input-field">
            <div class="btn">
              <span>Upload Images</span>
              {{Form::file('images',null,array('multiple' => true))}}
            </div>
            <div class="file-path-wrapper">
              {{Form::text('images',null,array('class' => 'file-path validate', 'placeholder'=>'Upload one or more files'))}}
            </div>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                    <!-- <div class="chip">Acedamy<i class="material-icons">close</i></div> -->
                {{Form::text('tags',null,array('class' => 'validate'))}}
                {{Form::label('tags', 'Tags')}}
            </div>
        </div>
        <!-- images, tags(Multiple) -->
        <!-- //Form::submit('Submit',array("class"=>"btn waves-effect waves-light right"))}} -->
      <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
      </button>
      {!! Form::close() !!}
  </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    $('select').material_select();
  });

</script>

@endsection