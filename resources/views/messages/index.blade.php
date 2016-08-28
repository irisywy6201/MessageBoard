@extends('layouts.app')

@section('content')
<style>
	body{
        color: #636b6f;
        font-family: cursive;
        font-weight: 100;
        height: 100vh;
        margin: 0;
       }
	p{
        font-size: 84px;
       }
    .regbox{
    	background-color: #a3c2c2;
    	border-style: solid solid solid solid;
    	border-color: #669999;
    }
    .mess{
    	padding: 20px 20px 20px 20px;
    }
    .time{
    	float: right;
    }
    .edit{
    	float: left;
    }
    .delete{
    	margin-right: 300px;
    	float: right;
    }
</style>
<body>
	<table width="700" border="0" align="center" cellpadding="0" cellspacing="10">
  <section id="header-wrapper">
  <header id ="header">
    <div style ="padding: 20px 10px 20px 100px; float:center"></div>
        <table align="right" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <p align="center">Message Board</p>
      </table>
    </header>
</section>
  </tr>
<td class="tdbline"><center><table width="40%" border="0" cellspacing="0" cellpadding="0">
     <tr valign="top">
        <td width="500" style="word-break : break-all; ">
        	@foreach ($messages as $message)
        <div class="regbox">
        <table width="90%" border="0" align="center" cellpadding="4" cellspacing="0" >

              <span class="name"><font face="cursive"><font size=5>Name:{{ $message->name }}<font size=6></span></td><hr>

            <td><font face="cursive"><span class="heading"><font size=5> Subject:<font size=6> {{ $message->subject }}</span><hr>
            	<br>
              <span class="heading"><font face="cursive"><font size=5>Content:<font size=6>{{ $message->content }}</span><hr>
              <span class="time"><font size=3>Post at:{{$message->created_at}}<br>Edit at:{{ $message->updated_at }}</span>

              <form action="{{ url('/messages/'.$message->id.'/edit') }}" method="GET">
              	<button type="submit" id="edit-message-{{ $message->id }}" class="edit">
              		Edit
              	</bUtton>
              </form>              
              <form action="{{ url('/messages/'.$message->id) }}" method="POST">
              	{!! csrf_field() !!}
              	{!! method_field('DELETE') !!}
              	<button type="submit" id="delete-message-{{ $message->id }}" class="delete">
              		Delete
              	</button>
              </form>

                </td></div>
          </tr>  
        </table>
      </div>
      <br>
      @endforeach
  </td>
     </tr>
</body>
@endsection