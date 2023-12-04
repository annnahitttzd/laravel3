<h1>hello</h1>
{{--{{\Illuminate\Support\Facades\Auth::user()->name}}--}}

@auth()
   <h3> {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>

    <p>secret text</p>
@endif
