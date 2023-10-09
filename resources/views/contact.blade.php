@extends('layouts.template')

@section('layout_content')
@section('layout_tagline', 'My Projects')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Project</th>
            <th scope="col">Semester</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < 10; $i++)
            @if (($i + 1) % 2 == 0)
                @php($semester = 'Even')
            @else
                @php($semester = 'Odd')
            @endif

            <tr>
                <th scope="row">Project {{ $i + 1 }}</th>
                <td>{{ $semester }}</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, tenetur impedit quidem magni ipsa
                    quo
                    eligendi modi possimus nemo quisquam aliquid enim amet! Provident ut exercitationem quisquam
                    quibusdam
                    nemo. Tenetur?</td>
            </tr>
        @endfor
    </tbody>
</table>

@endsection
