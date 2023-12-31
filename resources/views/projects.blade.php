@extends('layouts.template')
@section('layout_content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Project</th>
                <th scope="col">Semester</th>
                <th scope="col">Course</th>
                <th scope="col">Description</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $kerjaan)
                @if ($loop->even)
                    @php($semester = 'Even')
                @else
                    @php($semester = 'Odd')
                @endif

                <tr>
                    <th>{{ $loop->index + 1 }}</th>
                    <td>
                        <a href="projects/{{ $kerjaan['code'] }}">
                            {{ $kerjaan['title'] }}
                        </a>
                    </td>
                    <td>{{ $semester }}</td>
                    <td>{{ $kerjaan['course'] }}</td>
                    <td>
                        @if ($loop->first)
                            My Very First Project
                        @elseif ($loop->last)
                            My Last Project
                        @else
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
