<!DOCTYPE html>
<html>
    <head>
        <title>Workshop HTML</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UFT-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<style>
  h1 {
    font-family: monospace;
    font-size:auto;
    background-color: #f7f3e6;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    margin-bottom: 20px;
    width: auto;
  }
  h2 {
    font-family: monospace;
    font-size:auto;
    background-color: #f7f3e6;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    margin-bottom: 20px;
    width: auto;
  }

  body {
    font-family: monospace;
    background-color: #f5e8cb;
    margin: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    margin-bottom: 20px;
    width: auto;
  }

  form {
    
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    padding: 20px;
    border-radius: 20px;
    width: auto;
  }

  button {
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  input, select {
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 4px;
  }

  label {
    font-size: large;
  }
</style>

    <body>
        <!-- <h1>template/default.blade.php</h1> -->
        @yield('content')
        @stack('scripts')
    </body>
</html>
