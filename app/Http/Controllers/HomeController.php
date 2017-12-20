<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Questions;
use App\Answer;
use App\Messages;
use App\User;
use App\Vote;
use App\Answer_vote;
use App\Job;
use Auth;

class HomeController extends Controller
{
    public function home(){
        $questions= Questions::all();
        return view('index',['page'=>'0','questions'=>$questions]);
    }

    public function a_vote($aid,$qid){
        $vote=new Answer_vote;
        $vote->aid=$aid;
        $vote->qid=$qid;
        $vote->save();

        $answers= Answer::where('qid',$qid)->get();
        $post= Questions::where('id',$qid)->get();
        $ans_vote=Answer_vote::where('qid',$qid)->get();
        $ques_vote=Vote::where('qid',$qid)->get();
        return view('question_detail',['page'=>'1','posts'=>$post,'answers'=>$answers,'ans_vote'=>$ans_vote,'ques_vote'=>$ques_vote]);

    }


    public function q_vote($qid){
        $vote=new Vote;
        $vote->qid=$qid;
        $vote->uid=Auth::user()->id;
        $vote->save();

        $answers= Answer::where('qid',$qid)->get();
        $post= Questions::where('id',$qid)->get();
        $ans_vote=Answer_vote::where('qid',$qid)->get();
        $ques_vote=Vote::where('qid',$qid)->get();
        return view('question_detail',['page'=>'1','posts'=>$post,'answers'=>$answers,'ans_vote'=>$ans_vote,'ques_vote'=>$ques_vote]);
    }


     public function cancel_q_vote($qid){
        $vote=Vote::where('qid',$qid)
              ->where('uid',Auth::user()->id)->delete();

        $answers= Answer::where('qid',$qid)->get();
        $post= Questions::where('id',$qid)->get();
        $ans_vote=Answer_vote::where('qid',$qid)->get();
        $ques_vote=Vote::where('qid',$qid)->get();
        return view('question_detail',['page'=>'1','posts'=>$post,'answers'=>$answers,'ans_vote'=>$ans_vote,'ques_vote'=>$ques_vote]);
    }




    public function submit_ask(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'question'=> 'required',
            'catagory'=>'required'
        ]);

        $questions=new Questions;
        $questions->title = $request->input('title');
        $questions->catagory = $request->input('catagory');
        $questions->question = $request->input('question');
        $questions->uid = Auth::user()->id;
        $questions->save();
        return redirect('/questions');
    }

    public function questions(){
        $questions= Questions::all();
        return view('questions',['page'=>'1','questions'=>$questions]);
    }

    public function q_detail(){
        $id=$_GET['ids'];
        $answers= Answer::where('qid',$id)->get();
        $post= Questions::where('id',$id)->get();
        $ans_vote=Answer_vote::where('qid',$id)->get();
        $ques_vote=Vote::where('qid',$id)->get();
        $user=User::where('id',$post[0]['uid'])->get();
        
        return view('question_detail',['page'=>'1','posts'=>$post,'answers'=>$answers,'ans_vote'=>$ans_vote,'ques_vote'=>$ques_vote,'user'=>$user]);
    }


    public function q_search(Request $request){
        $this->validate($request,[
            'q_search' => 'required'

        ]);

        $key=$request->input('q_search');
        $questions=Questions::where('question', 'LIKE', '%'.$key.'%')->get();
        return view('questions',['page'=>'1','questions'=>$questions]);
        
    }

    public function j_search(Request $request){
        $this->validate($request,[
            'j_search' => 'required'

        ]);

        $key=$request->input('j_search');
        $jobs=Job::where('requirements', 'LIKE', '%'.$key.'%')->get();
        return view('job',['page'=>'6','job'=>$jobs]);
        
    }

    public function u_search(Request $request){
        $this->validate($request,[
            'u_search' => 'required'

        ]);

        $key=$request->input('u_search');
        $user=User::where('name', 'LIKE', '%'.$key.'%')->get();
        return view('users',['page'=>'2','users'=>$user]);
        
    }




    // public function index()
    // {
    //     return view('home');
    // }



    public function submit_ans(Request $request){
        $this->validate($request,[
            'answer' => 'required'

        ]);

        $id=$_GET['ids'];

        $answers=new Answer;
        $answers->answer = $request->input('answer');
        $answers->qid = $id;
        $answers->uid = Auth::user()->id;
        $answers->save();

        return redirect('/questions');
    }


    public function inbox(){
        $messages=Messages::where('for',Auth::user()->email)->get();
        return view('inbox',['page'=>'8','chat'=>$messages]);
    }

    public function message(Request $request){
        $this->validate($request,[
            'message' => 'required'
        ]);


        $message=new Messages;
        $message->from = Auth::user()->email;

        $message->for = $_GET['ids'];
        $message->message = $request->input('message');
        $message->save();

        $messages=Messages::where('for',Auth::user()->email)->get();
        return view('inbox',['page'=>'8','chat'=>$messages]);
    }

    public function reply(){
        $message=new Messages;
        $sender=Auth::user()->email;
        $receiver=$_GET['ids'];
        $query=Messages::where('for',$sender)
               ->where('from',$receiver)
            ->orWhere(function ($query) use($receiver,$sender) {
                return $query->where('for',$receiver)
                      ->where('from',$sender);
            })->orderBy('created_at','asc')->get();

         return view('reply',['query'=>$query,'page'=>'8']);
    }


    

    // users
    public function users() {


        $all_user = User::all();
        return view('users',['page'=>'2','users'=>$all_user]);
    }


    public function account(){
        $uid=$_GET['ids'];
        $user=User::where('id',$uid)->get();
        $answer= Answer::where('uid',$uid)->get();
        $question=Questions::where('uid',$uid)->get();
        // echo $answer;

        return view('account',['page'=>'2','user'=>$user,'answer'=>$answer,'question'=>$question]);
    }


    public function job_submit(Request $request){
        $this->validate($request,[
            'post' => 'required',
            'requirements'=>'required',
            'details'=>'required'

        ]);
        $job=new Job;
        $job->post=$request->input('post');
        $job->catagory=$request->input('catagory');
        $job->requirements=$request->input('requirements');
        $job->details=$request->input('details');
        $job->uid=Auth::user()->id;
        $job->save();

        $jobs=Job::all();
        return view('job',['page'=>'6','job'=>$jobs]);



    }


    public function jobs(){
        $jobs=Job::all();
        return view('job',['page'=>'6','job'=>$jobs]);
    }


    public function job_detail(){
        $id=$_GET['ids'];
        $jobs=Job::where('id',$id)->get();
        return view('job_detail',['page'=>'6','job'=>$jobs]);
    }


// <------------------ Test ------------------->
    public function test(){
         $questions= Questions::all();
        return view('home',['page'=>'1','questions'=>$questions]);
    }

}
