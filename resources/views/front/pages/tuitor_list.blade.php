@extends('front.master')
@section('content')
    <div class="container mt-2">
        @foreach ($tuitorList as $tuitor)
        <div class="row col-sm-12 col-md-12">
            <div class="col-sm-3">
                <img src="{{ asset('images/nijerchobi/') }}/{{$tuitor->profile}}" width="200px" height="200px">
            </div>
            <div class="col-sm-8 aboutTuitor">
                <p>{{ $tuitor->name }}</p> 
                <p><span> Interested Subjects:</span>{{ $tuitor->subject}}</p>
                <p><span>Location:</span> {{ $tuitor->district }}</p>
                <p>Graduated from <span>{{ $tuitor->institution }}</span> with a  </p>
                <a href="{{ route('about_tuitor', ['id'=>$tuitor->id]) }}" class="btn btn-success">Details</a>
            </div>
        </div>
        @endforeach
       
          
    </div>
@endsection