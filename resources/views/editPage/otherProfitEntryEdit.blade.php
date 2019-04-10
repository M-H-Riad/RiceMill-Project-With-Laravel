<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="adminStyle.css">
    <link rel="stylesheet" type="text/css" href="cssFiles/tableStyle.css">
    <!-- Product ad -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="cssFiles/homepageStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
      
      #bar{
  margin-left: 15px;
  overflow: hidden;
}
.demo-avatar{
  border-radius: 100%;
}
#pic{
  border-radius: 100%;
}
#table{
  overflow: hidden;
  margin-left: 400px;
  width: 70%;
  margin-top: 50px;
}

#table{
  margin-top: 20px;
  margin-left: 260px;
  width: 80%;
}
th{
  background-color: #4d94ff;
  padding: 5px;
  text-align: center;
  font-size: 120%;
}
td{
  padding: 3px;
  text-align: center;
}
#input{
  margin-left: 260px;
  width: 30%;
  margin-top: 20px;
}

#profile{
  margin-top: 50px;
  margin-left: 460px;
  width: 50%;
}

/*profile image*/
.place {
    height: 160px;
    width: 160px;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
    color: transparent;
    transition: all .3s ease;
    text-decoration: none;
  box-shadow: 0 2px 2px black;
  box-sizing: border-box;
  overflow: hidden;
}
#p_pic{
  width: 160px;
  height: 160px;
  overflow: hidden;
}
#pic_frame{ 
    margin-top: 5px;
    margin-left: 150px;
    margin-bottom: 15px;
    height: 150px;
    width: 150px;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    transition: all .3s ease;
    text-decoration: none;
    border: 2px solid gray;
  box-shadow: 0 2px 2px black;
  box-sizing: border-box;
  overflow: hidden;
}
#pro-pic{
  height: 155px;
  width: 155px;
  overflow: hidden;
}

#file{
  margin-bottom: 5px;
  margin-left: 460px;
}
#result{
  margin-top: 30px;
  margin-left: 260px;
  width: 20%;
  font-family: sans-serif;
  font-size: 150%;
  color: red;
}

#search{
  margin-left: 260px;
  width: 35%;
  margin-top: 20px;
  float: right;
}

#entryHeader{
  padding: 8px;
  font-size: 150%;
  font-family: sans-serif;
}
#subEntryHeader{
  padding: 3px;
  font-size: 100%;
  font-family: sans-serif;
}
#field{
  padding: 5px;
  border-radius: 4px;
  background-color: #ddccff;
}
    </style>

  </head>
  <body id="app">
    <!-- Header-->
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header bg-secoundary mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <a href="{{ url('/') }}">Home</a>
          <a class="navbar-brand active text-white" href="profilePage.php">Profile </a>
          <!-- Navbar entry list -->
        <div class="demo-avatar-dropdown">
          <button id="dbtn" class="mdl-button bg-secoundary text-white" type="text" data-toggle="dropdown">Cost Entry
            <span class="caret"></span>
          </button>
          <ul class="mdl-menu mdl-menu--bottom mdl-js-menu mdl-js-ripple-effect" for="dbtn">
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/riceCost/create') }}">Rice Cost</a></li>
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/transportCost/create') }}">Transport Cost</a></li>
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/workerportCost/create') }}">Worker Cost</a></li>
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/foodCost/create') }}">Food Cost</a></li>
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/equipmentCost/create') }}">Equipment Cost</a></li>
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/otherCost/create') }}">Other Cost</a></li>
          </ul>
        </div>
        <div class="demo-avatar-dropdown">
          <button id="cbtn" class="mdl-button bg-secoundary text-white" type="text" data-toggle="dropdown">Profit Entry
            <span class="caret"></span>
          </button>
          <ul class="mdl-menu mdl-menu--bottom mdl-js-menu mdl-js-ripple-effect" for="cbtn">
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/riceProfit/create') }}">Rice Sell Profit</a></li>
            <li class="mdl-menu__item bg-secoundary"><a href="{{ url('/otherProfit/create') }}">Other Sell Profit</a></li>
          </ul>
        </div>


          <div class="mdl-layout-spacer"></div>

            <div class="container-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                            <script>window.location = "/login";</script>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>


        </div>
      </header> 
      <!-- Right Bar-->
      <div class="demo-drawer mdl-layout__drawer bg-success mdl-color-text--blue-grey-50" id="rightBar">
        <header class="demo-drawer-header">
          <img src="https://image.ibb.co/mGn5np/user.jpg" class="demo-avatar" style="border-radius: 100%;">
          <div class="demo-avatar-dropdown">
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="{{ url('/home') }}">Final Report</a>
          <a class="mdl-navigation__link" href="{{ url('/home') }}">Monthly Report</a>
          <a class="mdl-navigation__link" href="{{ url('/home') }}">Product Ad</a>
          <a class="mdl-navigation__link" href="{{ url('/home') }}">Customer List</a>
          <a class="mdl-navigation__link" href="{{ url('/home') }}">Seller List</a>
          <a class="mdl-navigation__link" href="{{ url('/home') }}">Worker List</a>
          <a class="mdl-navigation__link" href="{{ url('riceProfit') }}">Rice Sell Profit</a>
          <a class="mdl-navigation__link" href="{{ url('otherProfit') }}">Other Profit</a>
          <a class="mdl-navigation__link" href="{{url('riceCost')}}">Buy Rice Cost</a>
          <a class="mdl-navigation__link" href="{{url('workerCost')}}">Worker Cost</a>
          <a class="mdl-navigation__link" href="{{url('transportCost')}}">Transport Cost</a>
          <a class="mdl-navigation__link" href="{{url('foodCost')}}">Food Cost</a>
          <a class="mdl-navigation__link" href="{{url('equipmentCost')}}">Equipment Cost</a>
          <a class="mdl-navigation__link" href="{{url('otherCost')}}">Other Cost</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a><br>
        </nav>
      </div>

      <div>
      	<form id="profile" method="POST" action="{{ action('otherProfitController@update',$id) }}" style="background-color: #e6ffff">
      		{{ csrf_field() }}
          <table class="table table-hover">
                <tr>
                  <th id="entryHeader" class="text-center bg-primary" colspan="2">Other Profit Update</th>
                </tr>
                <tr>
                  <td>Product Name</td>
                  <td><input id="field" type="text" name="productName" value="{{$otherprofit->productName}}" required="required"></td>
                </tr>
                <tr>
                  <td>Quantity of product</td>
                  <td><input id="field" type="number" step="0.01" name="productQuantity" value="{{$otherprofit->productQuantity}}" required="required"></td>
                </tr>
                <tr>
                  <td>Total Price</td>
                  <td><input id="field" type="number" step="0.01" name="totalCost" value="{{$otherprofit->totalCost}}" required="required"></td>
                </tr>
                {{ method_field('PUT') }}
                <tr>
                  <td colspan="2"><input class="btn btn-primary" type="submit" name="Update Information"></td>
                </tr>
			     </table>
		</form>
		<br><br>

      </div>


<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script>
  var button = document.createElement('button');
  var textNode = document.createTextNode('Click Me!');
  button.appendChild(textNode);
  button.className = 'mdl-button mdl-js-button mdl-js-ripple-effect';
  componentHandler.upgradeElement(button);
  document.getElementById('container').appendChild(button);
</script>
  




  </body>
</html>
