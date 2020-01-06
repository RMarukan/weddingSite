@extends('layout')

@section('content')
    <h1>Guest List</h1>

    <!-- Guest List -->
    <table class="table table-striped task-table">
        <thead>
        <th>Id</th>
        <th>名前</th>
        <th>属性</th>
        <th>１次会出欠</th>
        <th>２次会出欠</th>
        <th>料理の要望</th>
        <th>その他要望</th>
        </thead>

        <tbody>
        @foreach ($home as $guest)
            <tr>
                <td>
                    <div>{{ $guest->guestId }}</div>
                </td>
                <td>
                    <div>{{ $guest->name }}</div>
                </td>
                <td>
                    <div>{{ $guest->attributeId }}</div>
                </td>
                <td>
                    <div>{{ $guest->{'1stAttendFlg'} }}</div>
                </td>
                <td>
                    <div>{{ $guest->{'2ndAttendFlg'} }}</div>
                </td>
                <td>
                    <div>{{ $guest->dinnerComment }}</div>
                </td>
                <td>
                    <div>{{ $guest->anotherComment }}</div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
