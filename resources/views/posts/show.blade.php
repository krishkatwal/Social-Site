@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-6">
     <img src="/storage/{{$post->image}}" class="w-100">
    </div>
        <div classs="col-6 ">
           <div>
               <div class="d-flex align-items-center" >
                   <div >
                       <img src="/storage/{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:43px;">
                   </div>
                   <div class="pl-3">
                    <div class="font-weight-bold">{{$post->user->username}}</div>
                   </div>
                   <a href="#" class='pl-3'>Follow</a>
               </div>
               
           </div>
           <hr>
            <p><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span class='text-dark pr-3'>{{$post->user->username}}</span></a></span>{{$post->caption}}</p>
        </div>
    </div>

</div>
  
@endsection
