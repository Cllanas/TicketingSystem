@extends('layouts.app')


@section('content')



<contact csrf="{{csrf_token()}}" :valid_error="{{$errors}}">


</contact>


@endsection 

if ($errors->any())
div class="alert alert-danger">
    ul>
        foreach ($errors->all() as $error)
            li>error }}</
        endforeach
    /ul>
/div>