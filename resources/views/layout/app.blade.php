<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
.footer{color:gray; opacity:0.7; color:#ccc; text-align:right; font-size:10px; margin:10px;}
body{font-size:20px; color:#999; margin:5px; color: black;}
.content{margin:0px 0px; text-align:left;}
li{list-style-type: none; display: inline-block; margin-right: 50px; }
.category{margin: 50px; padding: 0px;}
.mgr-20{margin-left: 20px;}
.mgr-40{margin-left: 40px;}

hr{
	line-height: 5em;
}

.btn{
  width:200px;
  height:45px;
}

.dropdown {
	position:relative;
}

.detail_search {
	position: absolute;
	top:200px;
	left: 200px;
	width: 200px;
	height: 200px;
	background-color: red;
}

label {
   border: 1px solid #8080ff;  /* 枠線 */
   border-radius: 9px;         /* 枠線の角丸 */
   padding: 2px 6px 2px 2px;   /* 内側の余白 */
	 display: inline-block;      /* 途中で改行させない */
	 cursor: pointer;            /* マウス形状を手形に */
	}
}
label:hover {
	background-color: blue;  /* 背景色 */
   color: white;            /* 文字色 */
}

.font-color {
	color: #000000;
}

.buttonSet{
	margin-bottom: 30px; 
}

</style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<script>

(function() {
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$(function() {
	const d = new Date(+new Date() + (30 * 60 * 1000));
	const options = {day: "2-digit", hour: "2-digit", minute: "2-digit", second: "2-digit"};
d.toLocaleDateString("ja-JP", options);
});


(function() {
	document.getElementById("b1").onclick = (function(){
		console.log("test1"); //test1
	});
});

$(function() {
	$('select').change(function() {
		// 選択されている<option>要素を取り出す
		const selected = $("#select01").children("option:selected"); //「option」は省略可

		// 値とテキストを取り出す
		const selectedValue = selected.val();
		const selectedText = selected.text();
	});
});

$(function() {
	//テキストボックスに変更したら処理を実行
  $('input[name="check"]').change(function() {
    var val = $(this).val();
  });
});

$(function() {
	$('.dropdown-menu').on('click', function(event){
			event.stopPropagation();
	});
});


</script>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style>
		.footer{color:gray; opacity:0.7; color:#ccc; text-align:right; font-size:10px; margin:10px;}
		body{font-size:20px; color:#999; margin:5px;}
		.content{margin:0px 0px; text-align:left;}
		li{list-style-type: none; display: inline-block; margin-right: 50px; }
		.category{margin: 50px; padding: 0px;}
		.mgr-20{margin-left: 20px;}
		.mgr-40{margin-left: 40px;}
	</style>


	<title>仮レイアウト</title>
</head>
<body>
	@section('navbar')
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="navbar-nav">
			<a type="button" class="nav-item nav-link active" onClick="location.href='/'">予約アプリ</a>

				@if(Auth::guard('customer')->check())
						<p>こんにちは、{{ Auth::guard('customer')->user()->name }}さん</p>
				@elseif(Auth::guard('clerk')->check())
						<p>こんにちは、{{ Auth::guard('clerk')->user()->name }}さん</p>
				@elseif(Auth::guard('admin')->check())
						<p>こんにちは、{{ Auth::guard('admin')->user()->name }}さん</p>
				@endif
				{{-- 各ユーザーログアウトのための追記--}}
							@if(Auth::guard('customer')->check())
								<a class="logout" href={{ route('customer.logout') }} onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
									Logout
								<form id='logout-form' action="{{route('customer.logout')}}" method="POST" style="display: none;">
							@elseif(Auth::guard('clerk')->check())
								<a class="logout" href={{ route('clerk.logout') }} onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
									Logout
								<form id='logout-form' action="{{route('clerk.logout')}}" method="POST" style="display: none;">
							@elseif(Auth::guard('admin')->check())
							<a class="logout" href={{ route('admin.logout') }} onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
									Logout
							<form id='logout-form' action="{{route('admin.logout')}}" method="POST" style="display: none;">
							@endif
				    @csrf
					</form>
		</div>
			</a>
	</nav>


	<hr size="10">
	<div class="content">
		@yield('content')
	</div>
</body>
</html>
