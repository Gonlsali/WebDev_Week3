@extends('layouts.template')
@section('layout_content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        @php($projects = ['Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop'])

        <tbody>
            @php($i = 0)
            @foreach ($projects as $kerjaan)
                @php($i++)
                @if ($i % 2 == 0)
                    @php($semester = 'Even')
                @else
                    @php($semester = 'Odd')
                @endif

                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $kerjaan }}</td>
                    <td>{{ $semester }}</td>
                    <td>
                        @if ($i == 1)
                            My Very First Project
                        @elseif ($i == count($projects))
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
