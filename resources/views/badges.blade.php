<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Badges | StackOverflow</title>
    
@include('part.navbar')

    <section id="blog" class="container">
        <div class="center">
            <h2>Blogs</h2>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                        
                    <div class="blog-item">
                            <div class="col-sm-10 blog-content">
                                <h1><a href="#">Coming Soon!!</a></h1>
                                
                            </div>
                    </div><!--/.blog-item-->
                        
                    <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8--> 
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

    @include('part.bottom')
    </body>
</html>