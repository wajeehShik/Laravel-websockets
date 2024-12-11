@extends('layouts.app')
@section('content')



@endsection
@push('js')

<script>
    // window.Echo.channel("events").listen('Event',(e)=>alert('The Event '+e.message))
    // window.Echo.private("events").listen('TestEvent',(e)=>alert('The Event '+e.message))
    // window.Echo.private("App.Models.User.1").notification((notification)=>{
    //     alert(notification.message)
    // })
    let userId=document.getElementsByName("userId")[0]['content'];
    window.Echo.private("events."+userId).listen('TestEvent',(e)=>alert('The Event '+e.message +" for you"))
    
    </script>
@endpush