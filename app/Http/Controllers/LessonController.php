<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lesson;
class LessonController extends Controller
{
    public function index(){
        $lessons = Lesson::all();
        return view('lessons',['lessons'=>$lessons]);
    }
    public function create(){
        return view('create');
        
    }
    public function save(Request $request){
       $validation = $request->validate([
            'subject' =>'required',
            'teacher' =>'required',
            'order' =>'required',
            'room' =>'required',
            'group' =>'required',
            'weekday' =>'required',
]);
        $lesson = Lesson::create($validation);
        return redirect()->route('lessons');
        
    }
    public function edit(Lesson $lesson,$id){
           $lesson = Lesson::find($id);
            return view('edit',['lesson'=>$lesson]);
    }
    public function update(Request $request, Lesson $lesson,$id){
        $lesson = Lesson::find($id);
       $lesson->subject = $request->subject;
       $lesson->teacher = $request->teacher;
       $lesson->order = $request->order;
       $lesson->room = $request->room;
       $lesson->group = $request->group;
       $lesson->weekday = $request->weekday;
       $lesson->save();
       return redirect()->route('lessons');
    }
    public function delete(Lesson $lesson,$id){
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect()->route('lessons');
    }
}
