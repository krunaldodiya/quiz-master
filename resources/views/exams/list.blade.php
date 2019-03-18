@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="border: 1px solid #ddd; padding: 10px">
            <a href="/exams">LIST</a>
            <span>|</span>
            <a href="/exams/add">ADD</a>
        </div>

        <div style="margin-top: 20px">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">URL</th>
                    <th scope="col">Section Number</th>
                    <th scope="col">Total Pages</th>
                    <th scope="col">Page Number</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($exams as $index => $exam)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $exam->category->name }}</td>
                            <td>{{ $exam->url }}</td>
                            <td>{{ $exam->section }}</td>
                            <td>{{ $exam->total_pages }}</td>
                            <td>{{ $exam->page }}</td>
                            <td>
                                @if($exam->status == 0)
                                    <form action="/exams/fetch" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $exam->id }}">
                                        <button type="submit" class="button btn-info" style="cursor: pointer">Fetch</button>
                                    </form>
                                @else
                                    <div>Fetched</div>
                                @endif
                            </td>
                            <td>{{ $exam->status ? "Done": "Pending" }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
