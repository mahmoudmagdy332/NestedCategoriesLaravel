<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
{{--    <script src="{{ asset('js/vue-resource.min.js') }}"></script>--}}
    <link href="{{ asset('fontawesome-free-6.0.0-web/css/all.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
   <div class="container">
       <form class="form" action="{{route('categories.store')}}" method="post">
           @csrf
               <input type="hidden" name="id" value="{{$id}}">
               <input type="text" required name="name" class="form-control m-2">
               <input type="submit" value="save" class="btn btn-info m-2">
       </form>
   </div>
</div>
</body>
</html>

