@extends('Layouts.Master')

@section('content')

<div id="respond" class="container">
    <form method="POST" action="{{route('employe.update',$employe->id)}}" >
    @csrf
    @method('PUT')
    <div class="form-group">
        <h1><i class="fa fa-id-card"></i> Update Employee Information :</h1>
        <h3>Nom Complet</h3> 

        @if ($errors->has('full_name'))
            <span class="text-danger">{{ $errors->first('full_name') }}</span>
        @endif
            <input type="text" class="form-control" name="full_name" value="{{$employe->full_name}}">
            <i class="fa fa-user"></i>
            <br>
        <h3>Date d'embauche</h3> 

        @if ($errors->has('hire_date'))
            <span class="text-danger">{{ $errors->first('hire_date') }}</span>
        @endif
            <input type="date" class="form-control" name="hire_date" value="{{$employe->hire_date}}">
            <i class="fa fa-calendar"></i>
            <br>
        <h3>Numero CNSS</h3> 

        @if ($errors->has('cnss_info'))
            <span class="text-danger">{{ $errors->first('cnss_info') }}</span>
        @endif
            <input type="text" class="form-control" name="cnss_info" value="{{$employe->cnss_info}}">
            <i class="fa fa-file"></i>
            <br>
        <h3>Date de Naissance</h3> 

        @if ($errors->has('birth_date'))
            <span class="text-danger">{{ $errors->first('birth_date') }}</span>
        @endif
            <input type="date" class="form-control" name="birth_date" value="{{$employe->birth_date}}">
            <i class="fa fa-calendar"></i>
            <br>
        <h3>Email</h3> 

        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
            <input type="email" class="form-control" name="email" value="{{$employe->email}}">
            <i class="fa fa-at"></i>
            <br>
        <h3>Numero Telephone</h3> 

        @if ($errors->has('phone_number'))
            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
        @endif
            <input type="text" class="form-control" name="phone_number" value="{{$employe->phone_number}}">
            <i class="fa fa-phone"></i>
            <br>
        <div class="radiobox">
        <h3>Qualification</h3> 

        @if ($errors->has('skills'))
            <span class="text-danger">{{ $errors->first('skills') }}</span> <br><br>
        @endif
            <input type="radio" name="skills" value="TeamLeader"> TeamLeader<br>
            <input type="radio" name="skills" value="Mailer"> Mailer<br>
            <input type="radio" name="skills" value="IT"> IT<br>
        </div>
        <hr>
        <div class="radiobox">
        <h3>Gender</h3> 

        @if ($errors->has('gender'))
            <span class="text-danger">{{ $errors->first('gender') }}</span> <br><br>
        @endif

            <input type="radio" name="gender" value="Female"> Female<br>
            <input type="radio" name="gender" value="Male"> Male<br>
        </div>
        <hr>
        <div class="radiobox">
        <h3>Entity</h3>
            
        @if ($errors->has('entity'))
            <span class="text-danger">{{ $errors->first('entity') }}</span> <br><br>
        @endif

            <input type="radio" name="entity" value="IT TEAM"> IT TEAM<br>
            <input type="radio" name="entity" value="Support"> Support<br>
            <input type="radio" name="entity" value="HM1"> TEAM 1<br>
            <input type="radio" name="entity" value="HM2"> TEAM 2<br>
            <input type="radio" name="entity" value="HM3"> TEAM 3<br>
        </div>
        <hr>
        <br>

    </div>
    <button type="submit" name="submit" class="btn btn-info">Valid</button>
    </form>
</div> 

@endsection