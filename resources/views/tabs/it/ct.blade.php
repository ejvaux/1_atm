@extends('layouts.app2')

@section('pageTitle','Ticket | ATMS - Primatech')

@section('content')
@include('inc.messages')
<div class="container admincreateticket_container" >
    <div class='row mb-1'>
        <div class='col-md'>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/1_atms/public/it/lt">My Tickets</a></li>
                    <li class="breadcrumb-item">Create Ticket</li>
                    {{-- <li class="breadcrumb-item">Data</li> --}}
                </ol>
            </nav>
        </div>
    </div>
    <div class="row pt-1">
        <div class="col-md-12">
            <form class='form_to_submit' id='createticketform' method='POST' action='/1_atms/public/tickets' enctype="multipart/form-data">                
                @csrf
                <input name="userid" type="hidden" value="{{ Auth::user()->id }}">                
                <input type="hidden" id="username" name="username" placeholder="" value="{{ Auth::user()->name }}">
                <input type='hidden' id="createticket_message" name="message">
                <input type='hidden' name="mod" value='default'>
                <input type='hidden' name="ticket_id" value='{{ CustomFunctions::generateTicketNumber() }}'>
                <div class="form-group row">
                    <div class="col-md-5">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="" required>
                    </div>                    
                    <div class="col-md-2">
                        <label for="priority">Priority:</label>
                        <select type="text" class="form-control custom-select" id="priority" name="priority" placeholder="" required>
                            <option value="">- Select Priority -</option>
                            @foreach($priorities as $priority)
                                <option value="{{$priority->id}}">{{$priority->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">                            
                        <label for="category">Category:</label>
                        <select type="text" class="form-control custom-select" id="category" name="category" placeholder=""  required>
                            <option value="">- Select Category -</option>                            
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="department">Department:</label>
                        <select type="text" class="form-control custom-select" id="department" name="department" placeholder="" required>
                            <option value="">- Select Department -</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md" id='messagecol'>
                        <label for="message">Description:</label>
                        <textarea type="text" class="form-control quill" rows="8" id="message" name="message" placeholder="" required></textarea>                       
                        {{-- <div id='test' style="height:250px; overflow-y:auto" ></div> --}}
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col-md-5 text-left">
                        <span>Attach Images/ScreenShots: </span>
                        <input class='border' type='file' name='attachedfile[]' multiple>
                    </div>
                    <div class="col-md">
                        <button type='submit' class="btn btn-primary form_submit_button" id="saveTicketButton"><i class="fa fa-share-square"></i> Submit Ticket</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>
@endsection