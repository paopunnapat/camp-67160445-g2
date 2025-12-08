<!DOCTYPE html>
<html>
    <head>
        <title>Workshop HTML</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="UFT-8">
    </head>

<style>
  h1{
    font-family: monospace;
    display: inline-flex;
    font-size: xx-large;
    background-color: #f7f3e6;
    box-sizing: content-box;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    margin: auto;
  }
  body {
    font-family: monospace;
    background-color: #f5e8cb;
    margin: 20px;
    
  }
  form{
    background-color: #f7f3e6;
    box-sizing: content-box;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    margin-right: 75%;
    
  }
  button{
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  input{
    border-style: round;
    border-radius: 3px;
    border-width: 1px;
    display: inline-block;
    margin-top: 4px;
  }
  label{
    font-size: large;
  } 


</style>
    <body>
        <h1>template/default.blade.php</h1>
        @yield('content')
        @stack('scripts')
    </body>
</html>