<footer>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type = "text/javascript" src = "{{ URL::to('src/js/app.js')}}"></script> 
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

    <script type = "text/javascript">


    $("tr").hover(function(){
        $(this).css("background-color", "#8F97F0");
        }, function(){
        $(this).css("background-color", "white");
    });
	 $("a").hover(function(){
        $(this).css("color", "red");
        }, function(){
        $(this).css("color", "black");
    });
 
</script>
	<p class="foot">&copy; Stephen Allman 2017, All Rights Reserved.</p>

<style>
    .foot{
        padding-left: 50px;
        padding-top: 200px;
    }
</style>


</footer>    