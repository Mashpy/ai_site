@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_quiz_question.create') }}">Create Questions</a>

                </div>
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Title </th>
                            <th>Category_name</th>
                            <th>question</th>
                            <th>Add Option</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($questions as $question)
                            <tr>
                                <td>{{$question->title}}</td>
                                <td>{{$question->category->name}}</td>
                                <td>
                                    <div>
                                        {{$question->question}}
                                    </div>

                                    @foreach($question->quiz_answers as $quiz_answer)
                                        <span class="btn-sm btn-success">{{ $quiz_answer->quiz_option }}</span>
                                    @endforeach

                                </td>
                                <td>
                                    <a href="{{ route('admin_quiz_answer.create', [ 'quiz_question_id' => $question->id]) }}" class="btn btn-outline-warning">add</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection