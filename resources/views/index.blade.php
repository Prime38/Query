<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | StackOverflow</title>
    
@include('part.navbar')

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
            @foreach($questions as $question)
            <div class="item active" style="background-color:#808080">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">{{$question->title}}</h1>
                                <h2 class="animation animated-item-2">{{$question->question}}</h2>
                                <a class="btn-slide animation animated-item-3" href="{{url('/').'/question_detail?ids='.$question->id}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            @endforeach
            
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

@include('part.bottom')