@extends('layouts.main')

@section('title', 'MSU-ISRP | Basic Information')

@section('content')

    <div class="col-lg-9 col-md-8 sub-content">
        <form method="POST">
            {{ csrf_field() }}

            @include('layouts.previous-next-control')


            <div class="display-3 text-center">Basic Information</div>
            <hr>
            <div class="form-group row">
                <label for="evaluation-date" class="col-sm-3 col-form-label">Evaluation Date:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="evaluation-date" placeholder="evaluation_date" name="evaluation_date" value="{{ date('M d, Y') }}" disabled>
                    <input type="hidden" name="evaluation_date" value="{{ date('Y-m-d') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="faculty-id" class="col-sm-3 col-form-label">Employee/Faculty ID:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="faculty-id" name="faculty_id" placeholder="faculty_id" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="full_name" class="col-sm-3 col-form-label">Name of Faculty:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Last, First MI." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="hea" class="col-sm-3 col-form-label">Highest Educational Attainment:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hea" name="hea" placeholder="Highest Educational Attainment">
                </div>
            </div>

            <div class="form-group row">
                <label for="specialization" class="col-sm-3 col-form-label">Specialization:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="specialization" name="specialization" placeholder="Specialization">
                </div>
            </div>

            <div class="form-group row">
                <label for="college" class="col-sm-3 col-form-label">College:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="college" name="college" placeholder="College">
                </div>
            </div>

            <div class="form-group row">
                <label for="department" class="col-sm-3 col-form-label">Department:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="department" name="department" placeholder="College Department">
                </div>
            </div>

            <div class="form-group row">
                <label for="current-rank" class="col-sm-3 col-form-label">Current Rank:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="current-rank" name="current_rank" placeholder="Current Rank">
                </div>
            </div>

            <div class="form-group row">
                <label for="for-rank" class="col-sm-3 col-form-label">(For) Rank Category:</label>
                <div class="col-sm-9">
                    <select class="form-control" name="for_rank" required>
                        <option value="" selected disabled> -- Select --</option>
                        @foreach($rankCategories as $rankCategory)
                            <option value="{{ $rankCategory->id }}">{{ $rankCategory->rank_category }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </form>
    </div>
@endsection


@section('foot')
<script type="application/javascript">
    $(document).ready(function(){
        $('#basic-information').addClass('active');
    });
</script>
@endsection