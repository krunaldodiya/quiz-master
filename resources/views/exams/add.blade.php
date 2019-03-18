@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="border: 1px solid #ddd; padding: 10px">
            <a href="/exams">LIST</a>
            <span>|</span>
            <a href="/exams/add">ADD</a>
        </div>

        <div style="margin-top: 20px">
            <form action="/exams/add" method="POST" class="form">
                @csrf
                
                <div class="form-group">
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->child->count() ? "disabled" : ""}}>{{$category->name}}</option>

                            @foreach($category->child as $child_category1)
                               <option value="{{ $child_category1->id }}" {{ $child_category1->child->count() ? "disabled" : ""}}> - {{$child_category1->name}}</option>

                               @foreach($child_category1->child as $child_category2)
                                <option value="{{ $child_category2->id }}"> -- {{$child_category2->name}}</option>
                                @endforeach
                            @endforeach
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input name="url" type="text" placeholder="url" class="form-control" value="{{ old('url') }}">
                </div>

                <div class="form-group">
                    <input name="section" type="number" placeholder="section number" class="form-control">
                </div>

                <div class="form-group">
                    <input name="total_pages" type="number" placeholder="total pages" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        ADD
                    </button>
                </div>
            </form>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
    </div>
@endsection
