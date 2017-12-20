$(".right").click(function(){
    var aid=$("#aid").val();
    var qid=$("#qid").val();
    window.location.href = "/StackOverflow_laravel/public/ques_vote/"+aid+"/"+qid;
});

$(".up").click(function(){
    var qid=$("#qid").val();
    var c=1;
    window.location.href = "/StackOverflow_laravel/public/ques_vote/"+qid;
});
$(".down").click(function(){
    var qid=$("#qid").val();
    var c=2;
    window.location.href = "/StackOverflow_laravel/public/cancel_ques_vote/"+qid;
});