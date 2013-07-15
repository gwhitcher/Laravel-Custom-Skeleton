<html>
<head>
{{ HTML::style('css/style.css'); }}
{{ HTML::style('js/jquery-ui/css/ui-lightness/jquery-ui-1.10.3.custom.css'); }}
{{ HTML::script('js/jquery-ui/js/jquery-1.9.1.js'); }}
{{ HTML::script('js/jquery-ui/js/jquery-ui-1.10.3.custom.js'); }}
</head>
<body>
<div id="container">
<div id="header">
@section('header')
This is the header
@show
</div>
<div id="sidebar">
@section('sidebar')
This is the sidebar
@show
</div>
<div id="content">
@yield('content')
</div>
<div id="footer">
@section('footer')
This is the footer
@show
</div>
</div>
</body>
</html>