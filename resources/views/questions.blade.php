@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="border: 1px solid #ddd; padding: 10px">
            <a href="/questions">Questions</a>
            <span>|</span>
            <a href="/exams">Exams</a>
        </div>

        <div style="margin-top: 20px">
            <div>
                @foreach($questions as $question)
                    <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #ddd">
                        <div style="font-size: 18px; margin-bottom: 5px">{!! $question->question !!}</div>
                        <div>
                            <div class="{{ $question->answer == 'option_1' ? 'correct': ''}}">
                                <span style="color: red; margin-right: 5px">1</span> {{ $question->option_1 }}
                            </div>

                            <div class="{{ $question->answer == 'option_2' ? 'correct': ''}}">
                                <span style="color: red; margin-right: 5px">2</span> {{ $question->option_2 }}
                            </div>

                            <div class="{{ $question->answer == 'option_3' ? 'correct': ''}}">
                                <span style="color: red; margin-right: 5px">3</span> {{ $question->option_3 }}
                            </div>

                            <div class="{{ $question->answer == 'option_4' ? 'correct': ''}}">
                                <span style="color: red; margin-right: 5px">4</span> {{ $question->option_4 }}
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                {{ $questions->links() }}
            </div>
        </div>
    </div>
@endsection
