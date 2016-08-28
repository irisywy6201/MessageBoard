@extends('layouts.app')

@section('js')
<script language="javascript">
function checkForm(){
  if(document.formPost.boardcontent.value==""){
    alert("請填寫留言內容!");
    document.formPost.boardcontent.focus();
    return false;
  }
    return confirm('確定送出嗎？');
}

</script>
@endsection
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
          <p align="center">Leave A Message</p>
      </table></td>
    </header>
</section>
   </tr>
  <tr>
    <td class="tdbline"><center><table width="40%" border="0" cellspacing="0" cellpadding="0">
      <tr valign="top">
        <td width="250">
<div class="regbox">
	<form action="{{ url('/messages') }}" method="POST" >
          {{ csrf_field() }}
          <table width="80%" border="0" align="center" cellpadding="10" cellspacing="0">
            <tr valign="top">
              <font size=6>Hi, <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" style="background-color: transparent;border: 0px"/></font>      
                <p><font size=4>Subject:
                  <input type="text" name="subject" id="subject">
                 </p> 
                <p><font size=4>Content:
                  <textarea name="content" id="content" cols="70" rows="20"></textarea>
              </p>
            </tr>
            <tr valign="top">
              <td colspan="3" align="center" valign="middle"><input name="action" type="hidden" id="action" value="add">
                <input type="submit" name="button" id="button" value="send">
                <input type="reset" name="button2" id="button2" value="reset">
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