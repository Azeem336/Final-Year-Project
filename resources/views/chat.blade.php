<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
	<title>Chatting</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style>
		.list-group{
			overflow-y: scroll;
			height: 200px;
		}
	</style>
</head>
<body>
<div class="container ">
	<div class="row" id="app">
		<div class="offset-md-4 col-4">
			 <li class="list-group-item active ">Chatting Box</li>
		<ul class="list-group " v-chat-scroll>
          <massage 
                 v-for="value in chat.massage"
                 :key=value.index
                 color='info'>
  	             @{{ value }}
           </massage>
</ul>
<input type="text" class="form-control" placeholder="Type youer massage....." v-model="massage" @keyup.enter="send">
</div>
	</div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>