@extends('layouts.main')

@section('title', 'MSU-ISRP | Basic Information')

@section('content')

    <div class="col-lg-9 col-md-8 sub-content">
        <div class="row justify-content-between">
            <div class="col-3">
                {{--<a href="#" class="btn btn-outline-success btn-sm"><< Previous</a>--}}
            </div>
            <div class="col-3 text-right">
                <a href="#" class="btn btn-outline-success btn-sm">Next >></a>
            </div>
        </div>
        <div class="display-3 text-center">Basic Information</div>
        <hr>
        <form>
            <div class="form-group row">
                <label for="faculty_id" class="col-sm-3 col-form-label">Evaluation Date:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="faculty_id" placeholder="faculty_id" value="{{ date('m d, Y') }}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="faculty_id" class="col-sm-3 col-form-label">Employee/Faculty ID:</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="faculty_id" placeholder="faculty_id">
                </div>
            </div>

            <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">Name of Faculty:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="fullname" placeholder="Last, First MI.">
                </div>
            </div>

            <div class="form-group row">
                <label for="hea" class="col-sm-3 col-form-label">Highest Educational Attainment:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hea" placeholder="Highest Educational Attainment">
                </div>
            </div>

            <div class="form-group row">
                <label for="specialization" class="col-sm-3 col-form-label">Specialization:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="specialization" placeholder="Specialization">
                </div>
            </div>

            <div class="form-group row">
                <label for="college" class="col-sm-3 col-form-label">College:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="college" placeholder="College">
                </div>
            </div>

            <div class="form-group row">
                <label for="department" class="col-sm-3 col-form-label">Department:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="department" placeholder="College Department">
                </div>
            </div>

            <div class="form-group row">
                <label for="dole" class="col-sm-3 col-form-label">Date Of Last Evaluation:</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="dole" placeholder="Date Of Last Evaluation">
                </div>
            </div>

            <div class="form-group row">
                <label for="current-rank" class="col-sm-3 col-form-label">Current Rank:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="current-rank" placeholder="Current Rank">
                </div>
            </div>

            <div class="form-group row">
                <label for="for-rank" class="col-sm-3 col-form-label">(For) Rank Category:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="for-rank" placeholder="Rank Category Applied For">
                </div>
            </div>

        </form>
    </div>
@endsection



