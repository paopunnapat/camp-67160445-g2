@extends('template.default')

@section('content')
<?php 
    $myphp = "WOW PHP";
    echo "<h1>Hello PHP" 
?>
<h1> <?php echo "Hello PHP2" ?> </h1>
<h1> <?php printf("Hello PHP3") ?> </h1>
<h1>{{"Hello PHP4"}}</h1>

<h1>this is my view 2</h1>
<input type="text" id="myinput" value="input text value">
<button oneclick="myfunc()" on>ตรวจสอบ </button>
@endsection

@push('scripts')
<h1>my view 2 naja</h1>
@endpush

@push('scripts')
<h1>my view 3 naja</h1>
@endpush

@push('scripts')
    <script>
        alert("Welcome to JS")
        myvar = 1;
        let myvar2
        console.log(myvar)
        console.log(myvar2)

    </script>
    <script>
        myvar2 = "My Var 2"
        console.log(myvar,myvar2)
    </script>
    <script>
        function myfunc(){
            console.log(document.geEle)
            
        }
        let myfunc2 = function(){

        }
        myfunc3 = () => console.log('myfun3 called')
        console.log(document.getElementById('myinput'))

        function myfunc4(callback){
            console.log('my func4 called')
            callback()
        }

        myfunc4(myfunc3)
        
    </script>
@endpush