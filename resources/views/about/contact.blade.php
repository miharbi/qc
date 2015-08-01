@extends('app')

@section('content')
{!! Form::close() !!}
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="jumbotron">
        @if(Session::has('message'))
            <div class="alert alert-info">
              {{Session::get('message')}}
            </div>
        @endif
        @if($errors->all())  

          <div class="alert alert-warning">
            <ul>
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>
            @endforeach
          </ul>
          </div>
          @endif

          {!! Form::open(array('route' => 'contact_store', 'class' => 'form-horizontal')) !!}
          <fieldset>
          <legend>{{trans('about.contact')}}</legend>
          <div class="form-group">
              {!! Form::label(trans('about.name')) !!}
              {!! Form::text('name', null, 
                  array('required', 
                        'class'=>'form-control', 
                        'placeholder'=>trans('about.name_placeholder'))) !!}
          </div>

          <div class="form-group">
              {!! Form::label(trans('about.email')) !!}
              {!! Form::text('email', null, 
                  array('required', 
                        'class'=>'form-control', 
                        'placeholder'=>trans('about.email_placeholder'))) !!}
          </div>

          <div class="form-group">
              {!! Form::label(trans('about.message')) !!}
              {!! Form::textarea('message', null, 
                  array('required', 
                        'class'=>'form-control',
                        'rows'=>'3', 
                        'placeholder'=>trans('about.message_placeholder'))) !!}
          </div>

          <div class="form-group">
              {!! Form::submit(trans('about.contact_us'), 
                array('class'=>'btn btn-primary')) !!}
          </div>
          </fieldset>
        </from>  

      </div>
    </div>
  </div>
</div>
@endsection