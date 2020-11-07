@extends('home')
@section('main-section')
        <div class="material-table card">
            <div class="material-table-header"></div>
            <div class="material-table-body">
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                <div>Name</div>
                            </th>
                            <th>
                                <div>Surname</div>
                            </th>
                            <th>
                                <div>Position</div>
                            </th>
                            <th>
                                <div>Phone</div>
                            </th>
                            <th>
                                <div>Is Hired</div>
                            </th>
                            <th>
                                <div>Edit</div>
                            </th>
                        </tr>
                        <tr class="invisible"></tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $applicant)  
                            <tr title="{{ $applicant->name }}-ის რედაქტირება">
                        
                                <td>{{ $applicant->name }}</td>
                                <td>{{ $applicant->surname }}</td>
                                <td>{{ $applicant->position }}</td>
                                <td>{{ $applicant->phone }}</td>
                                <td>{{ $applicant->is_hired ? 'Hired' : 'Not Hired' }}</td>
                                <td><a class="underline text-gray-900 dark:text-white" href="applicants/{{ $applicant->id }}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
