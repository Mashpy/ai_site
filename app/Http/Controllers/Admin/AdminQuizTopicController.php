<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\QuizTopic;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminQuizTopicController extends Controller
{
    public function index(){
        $quiz_topics = QuizTopic::orderBy('created_at','desc')->Paginate(10);
        return view('admin.quiz_topic.index', compact('quiz_topics'));
    }
    public function create(){
        $categories = Category::all();
        return view ('admin.quiz_topic.create', compact('categories'));
    }
    public function store(Request $request){
        $quiz_topic = new QuizTopic();
        $quiz_topic->topic_name = $request->topic_name;
        $quiz_topic->category_id = $request->category_id;
        $quiz_topic->save();
        Session::flash('success','Question added successfully!!');
        return redirect()->route('admin_quiz_topic.index');
    }
}