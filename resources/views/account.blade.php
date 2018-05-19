<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Account | StackOverflow</title>
    
@include('part.navbar')
    <section id="error" class="container text-center">
        <div>
        <div class="blog">
            <div class="row">
                @foreach($user as $users)
                <h1>{{$users->name}}</h1>
                <h2>Email: {{$users->email}}</h2>
                @endforeach

                <div>
                <div><h2>Experties:</h2> 
                    @php($c=0)
                    @foreach($question as $questions)
                    @php($c++)
                    <div><h5><li>{{$questions->catagory}}</li></h5></div>
                    @endforeach
                    @foreach($answer as $answers)
                    @php($c++)
                    <div><h5><li>{{$answers->catagory}}</li></h5></div>
                    @endforeach
            </div>
            <div>
                <center>
                    <h2>Answers Given</h2>
                </center>
            </div>
            @php($c=0)
            <div>
                @foreach($answer as $answers)
                @php($c++)
                <div><h5><li> <a href="{{url('/').'/question_detail?ids='.$answers->qid}}">{{$answers->answer}}</a></li></h5></div>
                @endforeach
            </div>

            <div>
                <center>
                    <h2>Questions Asked</h2>
                </center>
            </div>
            @php($c=0)
            <div>
                @foreach($question as $questions)
                @php($c++)
                <div><h5><li> <a href="{{url('/').'/question_detail?ids='.$questions->id}}">{{$questions->title}}</a></li></h5></div>
                @endforeach
            </div>
        </div>
    </div>
</div>



        <div class="center">
            
        </div>


        @if($users->id==1)
        <div class="blog">
            <div class="row">
                <div >
                        <div >
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Offer Jobs</h4>
                                <p>Make sure you enter the(*)required information where indicate.</p>
                            </div> 
      
                            <form class="contact-form" role="form" method="POST" action="{{ url('/job/submit') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="post">Post</label>
                                            <input type="text" class="form-control" name="post" required="required">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Catagory</label>
                                            <input type="text" class="form-control" name="catagory">
                                        </div>  
                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <input type="text" class="form-control" name="requirements" required="required">
                                        </div>                  
                                    </div>
                                    <div class="col-sm-7">                        
                                        <div class="form-group">
                                            <label>Details </label>
                                            <textarea name="details" id="message" class="form-control" rows="8"  required="required"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Post </button>
                                        </div>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8--> 

            </div><!--/.row-->

         </div><!--/.blog-->
         @endif
    </section>


    @include('part.bottom')
</body>
</html>