@extends('layouts.app')

@section('title', 'Applicants - List')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
        <form action="/applicants/{{$applicant->id}}" method="post" class="form mt-5">
                @csrf
                <input type="hidden" name="_method" value="PUT">

                <div class="form-group">
                    <label for="name">name</label>
                <input type="name" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{$applicant->name}}">
                  </div>
                  <div class="form-group">
                    <label for="Surname">Surname</label>
                <input type="Surname" name="surname" class="form-control" id="Surname" placeholder="Enter Surname" value="{{$applicant->surname}}">
                  </div>
                  <div class="form-group">
                    <label for="position">position</label>
                <input type="position" name="position" class="form-control" id="position" placeholder="Enter position" value="{{$applicant->position}}">
                  </div>
                  <div class="form-group">
                    <label for="phone">phone</label>
                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="{{$applicant->phone}}">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection
