<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Questions | Query</title>


    @include('part.navbar')

    <section id="blog" class="container">
        <div class="center">
            <h2>Questions</h2>
            <p class="lead">Ask to know better</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                        
                    <div class="blog-item">
                        @if(count($questions)>0)
                        @foreach($questions as $question)
                            <div class="col-sm-10 blog-content">
                                <h3><a href="{{url('/').'/question_detail?ids='.$question->id}}">
                                    {{$question->title}}
                                </a></h3>
                                
                            </div>
                        @endforeach
                        @endif
                    </div><!--/.blog-item-->
                        
                    <!-- <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul> --><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form" method="POST" action="{{ url('/ques/search') }}">
                            {{ csrf_field() }}
                                <input type="text" class="form-control search_box" autocomplete="off" 
                                name="q_search" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
                    <!-- <div class="widget tags">
                        <h3>Tag Cloud</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                        </ul>
                    </div> --><!--/.tags-->
                </aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

    @include('part.bottom')