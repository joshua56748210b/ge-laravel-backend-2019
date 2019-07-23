<!DOCTYPE html>

<html>
  <head>
    <title>Technical Exam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"  >

    <style type="text/css">
      .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
      }
    </style>
    <style type="text/css">
      h3.center-text {
          text-align: center;
      }
    </style>
  </head>

  <body>
    <br />
    <div class="container box">
      @if(Auth::user())
        <h3 align="center">Welcome {{ Auth::user()->name }}</h3><br/>
        <br />
        <form method="post" action="{{ url('/test') }}">
          {{ csrf_field() }}

          <input type="text" name="username" value="{{ Auth::user()-> email}}" hidden/>
          <div class="form-group">
            <input type="submit" name="btn_test" class="btn btn-primary" value="test" />
          </div>
        </form>

        <br />
        <a href="{{ url('/logout') }}">Logout</a>
        <br />
      @else

      @endif
      <br />
    </div>
    @section('content')
    <style type="text/css">
    	h3.center-text {
    	    text-align: center;
    	}
    </style>
    <div class="container">
    	<h3 class="center-text">Sweet Alert using Laravel - Learn Infinity</h3>

    	<div class="row">
    		<div class="col-md-offset-2 col-md-8">

    			@include('sweet::alert')

    		</div>

    	</div>

    </div>

    @endsection

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  </body>
</html>
