@extends('layouts.app')

@section('content')
    <h2>Book Reviews</h2>
    <p>Hello, {{ $username ?? 'your name' }}!</p>
    <p>See the book review here.</p>
    <table class="data-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Writer</th>
                <th>Review</th>
                <th>Rating (1-5)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($semuareview as $review)
                <tr>
                    <td>{{ $review['title'] }}</td>
                    <td>{{ $review['writer'] }}</td>
                    <td>{{ $review['review'] }}</td>
                    <td>{{ $review['rating'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
