@extends('layouts.app')

@section('content')
    <body>
        <div class="container">
                <h1><br><br></h1>
            <section>       
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            {!! Form::open(['route' => 'password.email']) !!}
                                <h1>Reset User Password Here</h1> 
                                <div>
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                <p> 
                                    {{ Form::label('email', 'Enter Email:') }}
                                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => " mymail@mail.com"]) }}                                    
                                </p>
                                @if ($errors->has('email'))
                                  <p class="help is-danger">{{$errors->first('email')}} </p>
                                @endif
                            </div><br>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>  
            </section>
        </div>
@endsection
