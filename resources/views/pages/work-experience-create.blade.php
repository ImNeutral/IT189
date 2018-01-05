@extends('layouts.main')

@section('title', 'MSU-ISRP | Work Experience')

@section('content')

    <div class="col-lg-9 col-md-8 sub-content">
        <form method="POST">
            {{ csrf_field() }}

            @include('layouts.previous-next-control')


            <div class="display-3 text-center">Work Experience</div>
            <hr>

        </form>
    </div>
@endsection


@section('foot')
    <script type="application/javascript">
        $(document).ready(function(){
            $('#work-experience').addClass('active');
        });
    </script>
@endsection

