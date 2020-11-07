@extends('home')
@section('main-section')
<form method="post" enctype="multipart/form-data" action="{{route('applicants.edit', $applicant->id)}}">
    <div class="box-body">
        <div class="form-group">
            <label class="text-gray-500" for="exampleInputEmail1">Applicant name</label>
            <br>
            <input type="text" required minlength="6" class="form-control" value="{{ $applicant->name }}" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label class="text-gray-500" for="exampleInputEmail1">Applicant surname</label>
            <br>
            <input type="text" required minlength="6" class="form-control" value="{{ $applicant->surname }}" placeholder="Surname" name="surname">
        </div>
        <div class="form-group">
            <label class="text-gray-500" for="exampleInputEmail1">Applicant position</label>
            <br>
            <input type="text" required minlength="6" class="form-control" value="{{ $applicant->position }}" placeholder="Position" name="position">
        </div>
        <div class="form-group">
            <label class="text-gray-500" for="exampleInputEmail1">Applicant phone</label>
            <br>
            <input type="text" required minlength="9" class="form-control" value="{{ $applicant->phone }}" placeholder="Phone" name="phone">
        </div>
        <div class="form-group">
            <label class="text-gray-500" for="exampleInputEmail1">Is hired</label>
            <br>
            <input type="checkbox" required checked="{{ $applicant->is_hired }}" class="form-control" value="{{ $applicant->is_hired }}" name="is_hired">
        </div>
    </div>
    <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection