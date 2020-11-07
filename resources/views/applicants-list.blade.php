@extends('layouts.app')

@section('title', 'Applicants - List')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-2">
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>surname</th>
                    <th>position</th>
                    <th>phone</th>
                    <th>status</th>
                    <th>Change Status</th>
                    <th>Edit</th>
                </tr>
            @foreach ($applicants as $applicant)
                <tr>
                <td>{{$applicant->id}}</td>
                <td>{{$applicant->name}}</td>
                <td>{{$applicant->surname}}</td>
                <td>{{$applicant->position}}</td>
                <td>{{$applicant->phone}}</td>
                <td>@if($applicant->is_hired)
                        Hired
                    @else
                    Not-Hired
                    @endif
                </td>
                <td><form action="/applicants/changestatus" method="post">@csrf
                <input type="hidden" name="id" value="{{$applicant->id}}">
            <button class="btn btn-primary">Change Status</button></form></td>
            <td>
                <a href="/applicants/{{$applicant->id}}/edit" class="btn btn-default">Edit</a>
            </td>
                </tr>
            @endforeach
        </table>

        </div>

    </div>
</div>

@endsection
