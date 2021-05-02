<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Project;
use App\User;

class Time extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $table = 'times';
    protected $dates = ['deleted_at'];

    //these fields are not available in the database
    //but we need these data to be passed to UI
    //so, we need to add these fields on the fly
    //note: the naming conventions of the accessor methods should be followed
    protected $appends = ['day', 'user_name', 'project_name'];

    //set mass assignable columns
    protected $fillable = ['user_id','project_id','date','hours','description','clock_in','clock_out','user_time_type'];
    
    //accessor method for day field
    public function getDayAttribute()
    {
        
        $day = "";
        $date = $this->attributes['date'];

        if(isset($date)){
            $day = date('l', strtotime($date)); //get the english day name from date
        }        

        return $day;
    }

    //accessor method for user_name field
    public function getUserNameAttribute()
    {
        $userName = "";
        $userId = $this->attributes['user_id'];

        if(isset($userId)){
            $user = User::find($userId);    //get the user record based on user id
            //JRP:2019/11/11 added a filter if query is empty
            if(empty($user)){
                //JRP:2019/11/11 assign variable as empty
                $userName = '';
            }else{
               $userName = $user->name;        //get the name of the user record  
            }
           
        }        

        return $userName;
    }

    //accessor method for project_name field
    public function getProjectNameAttribute()
    {
        $projectName = "";
        $projectId = $this->attributes['project_id'];

        if(isset($projectId) && $projectId != 0){
            //get the project record based on project id
            //note include the trashed in case the project was deleted
            $project = Project::withTrashed()->find($projectId);
            $projectName = $project->name;          //get the project name from project record
        }        

        return $projectName;
    }    

}
You sent Today at 4:08 PM
d ni mao
You sent Today at 4:08 PM
katong sa imo gi edit ba

Louise sent Today at 4:08 PM
@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row row-bottom-extra-space">	

		<!-- show errors if any -->
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif


		{!! Form::open(['url' => 'time/store', 'class'=>'col-md-4']) !!}
		<h1>New Time Shift</h1>	
			<div class="form-group">
				{!! Form::label('personLabel', 'Person') !!}
				{!! Form::select('user_id', $users, $current_user, ['id'=>'user_id', 'class'=>'form-control']) !!}
			</div>	
			<div class="form-group">
				{!! Form::label('projectLabel', 'Project') !!}
				{!! Form::select('project_id', $projects, '', ['id'=>'project_id', 'class'=>'form-control']) !!}
			</div>
			<div class="form-group">
					{!! Form::label('dateLabel', 'Date') !!}
					{!! Form::text('date', '', ['id'=>'date', 'class'=>'form-control']) !!}
			</div>	
			<div class="form-group">
					{!! Form::label('hoursLabel', 'Hours') !!}
					{!! Form::text('hours', '', ['id'=>'hours', 'class'=>'form-control']) !!}
			</div>	
			<div class="form-group">
				{!! Form::label('descriptionLabel', 'Description') !!}
				{!! Form::textarea('description','', ['id'=>'description', 'class'=>'form-control']) !!}	
			</div>
			<!-- <div class="form-group"><a type="button" class="btn btn-primary" id="addNew">New</a></div>								 -->
			{!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
			<a href="#" class="btn btn-success addNew" id="addNew">New</a>
			<a href="{{url('/time')}}" class="btn btn-default">Cancel</a>
		{!! Form::close() !!}	
        <div id="fillup-state" style="Display: none;">
            <h1>Fill-up fields first ...</h1>
        </div>
        <div id="loading-state" style="Display: none;">
            <h1>Loading ...</h1>
        </div>
	</div>
</div>
	
@endsection

@section('scripts')
    <script type="text/javascript">
    var base_url = "{{ url('/') }}";

        $(document).ready(function($) {
            var user_id = $('#user_id').val();
            var project_id = $('#project_id').val();
            var date = $('#date').val();
            var hours = $('#date').val();
            var description = $('#description').val();

        	var storedVal = localStorage.getItem("inputVal");
        	$('#date').val(storedVal);
        	$( "#date" ).datepicker({ dateFormat: 'yy-mm-dd' });			//initialize date as datepicker type
			$("#date").attr("autocomplete", "off");                      //GJG turn off autocomplete on dates
	

			$('#addNew').click(function(){
                $("#fillup-state").css("display","none");

				if (user_id == '' || project_id == '' || date == '' || hours == '' || description == '') {
                    $("#fillup-state").css("display","block");
                }

				 var url_link = base_url + '/time/customStore';

			    //prepare our data for request
			    var postData = {
			    	user_id: $('#user_id').val(),
			    	project_id: $('#project_id').val(),
			    	// date: $('#date').datepicker('getDate'),
			    	 date: $('#date').val(),
			    	hours: $('#hours').val(),
			    	description: $('#description').val(),
			    	_token : "{{ csrf_token() }}",
			    };

                

			    localStorage.setItem("inputVal", $('#date').val())
			    console.log('printing postData');
			    console.log(postData);
			     console.log($('#date').val());

			    //update story stat id
				$.ajax({
                    
			        type: "POST",
			        url: url_link,
			        data: postData,
                    beforeSend: function(){
                        // Show loading state
                        $("#loading-state").css("display","block");
                       },
			        success: function(result) {
			      
			        $('#hours').val("");
			        $('#description').val("");
                    $("#loading-state").hide();
                    $("#fillup-state").hide();
			        }
			       });
                
				//alert("New record added!");
			    });	

		});





    </script>
@endsection