<input type="text" name="width" id="width" placeholder="width">
<input type="text" name="height" id="height" placeholder="height">
<input type="color" name="bc" id="bc" placeholder="background-color">
<button id="create">CREATE</button><br>

<div id="button"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#create').click(function(){
            let width=$('#width').val();
            let height=$('#height').val();
            let bc=$('#bc').val();
  
            $.ajax({
                url:'button.php',
                type:'post',
                data:{width:width,height:height,bc:bc},
                success: function(answer){
                   $('#button').append(answer);
                }
            })
        })
    })
</script>