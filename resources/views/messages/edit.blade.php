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
</style>

<table width="700" border="0" align="center" cellpadding="0" cellspacing="10">
  <section id="header-wrapper">
  <header id ="header">
        <td><table align="right" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <p align="center">Edit Your Message</p>
      </table></td>
    </header>
</section>
   </tr>
  <tr>
    <td class="tdbline"><center><table width="40%" border="0" cellspacing="0" cellpadding="0">
      <tr valign="top">
        <td width="250">
<div class="regbox">
  <form method="POST" action="{{ url('/messages/'.$message->id) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
          <table width="80%" border="0" align="center" cellpadding="10" cellspacing="0">
            <tr valign="top">    
                <p><font size=4>Subject:
                  <textarea name="subject" id="subject" cols="70" rows="1">{{ $message->subject }}</textarea>
                 </p> 
                <p><font size=4>Content:
                  <textarea name="content" id="content" cols="70" rows="20">{{ $message->content }}</textarea>
              </p>
            </tr>
            <tr valign="top">
              <td colspan="3" align="center" valign="middle">
                <button type="submit">Update Comment</button>
                <input type="button" name="button3" id="button3" value="back" onClick="window.history.back();"></td>
            </tr>
          </table>
        <br>
        </form>     
</div></td>
        <div class="boxbl"></div><div class="boxbr"></div></td>
      </tr>
    </table></center></td>
  </tr>

</body>
@endsection