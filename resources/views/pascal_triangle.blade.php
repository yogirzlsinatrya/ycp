<html>
    <head>
        <title>PHP Pascal Triangle</title>
        <link rel="stylesheet" type="text/css" href="{{URL::to('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('bootstrap/css/bootstrap-grid.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('bootstrap/css/bootstrap-reboot.css')}}">
    </head>
    <body>
        <div class="container-fluid jumbotron">
            <h1 class="display-4">PHP Pascal Triangle</h1>
            @if(Session::has('status'))
            <div class="alert alert-{{Session::get('alert')}}" role="alert">
                    {{Session::get('status')}}
                </div>
            @endif
            <form action="{{route('post-pascal-triangle')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Column</label>
                    <input type="number" class="form-control col-4" placeholder="Enter Coloum" name="column">
                    <small id="emailHelp" class="form-text text-muted">column for pascal triangle.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Row</label>
                    <input type="number" class="form-control col-4" placeholder="Enter Row" name="row">
                    <small id="emailHelp" class="form-text text-muted">row for pascal triangle</small>
                </div>
                <button type="submit" class="btn btn-primary">show</button>
            </form>
        </div>
        <hr>
        <h1 class="display-4">Output</h1>
        {!! $data !!}
    </body>

    <script src="{{asset('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}" type="text/javascript"></script>
</html>






