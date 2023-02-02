@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-3 px-4 py-3 h-100 d-none d-md-block">
                    <div class="row">                        
                        @foreach($messages as $message)
                            <div class="py-1 mb-2 rounded message-mini-menu">
                                {{$message->country}} - {{$message->created_at}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">            
                        <div class="col-12 px-4 py-3 "> 
                            <table class="table table-dark table-borderless table-responsive the-table"> 
                                <thead>
                                    <tr class="table-content">
                                        <th scope="col">Location</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                    </tr>
                                </thead>  
                                <tbody>                                                                                         
                                    @foreach($fullMessages as $message)
                                        <tr class="mb-2 table-row-content">
                                            <td class="td-content">{{$message->state}}, {{$message->country}}</td>
                                            <td class="td-content">{{$message->created_at}}</td>
                                            <td class="td-content">{{$message->name}}</td>
                                            <td class="td-content">{{$message->email}}</td>
                                            <td class="td-content">{{$message->message_content}}</td>
                                        </tr>
                                    @endforeach   
                                </tbody>                     
                            </table> 
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection