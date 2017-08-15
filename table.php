<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
    .clickable-row {
    cursor: pointer;

}

.read
{
    background-color: rgba(240, 240, 240,0.3);

}

.unread
{
    background-color: rgba(209,209,209,0.3);
    
    
}

  </style>
  <script type="text/javascript">
      $(document).ready(
 
        function() {


            /*$('#mytable tr').each(function(i,e)
             {

                var f = $(e).children('td:not(:first)');

                $("#mytable").on("click",f, function(){

                alert("muiz");

             });

        });

            /*$("#mytable").on("click",".clickable-row", function(){

                alert($(this).);
                //window.location = $(this).data("href");
            });*/

            $('#screen').on("click",'#mytable td:not(:first-child)',function(){

                window.location.href = $(this).closest('tr').data("href");

            });

            /*$('#mytable td:not(:first-child, :last-child)').click(function(){
                window.location.href = $(this).closest('tr').data("href");
            });*/



}

);
  </script>
</head>
<body class="main-body">
<div id="screen">
<table class="table table-striped table-hover" id="mytable">
    <tr class="clickable-row" data-href='index.php'>
        <td>muiz</td>
        <td>pune</td>
        <td>july</td>
    </tr >
    <tr class="clickable-row" data-href='config.php'>
        <td>ali</td>
        <td>nasik</td>
        <td>dec</td>
    </tr>
</table>
<button id="demo">click</button>
</div>
<script type="text/javascript">
    $(document).ready(

    function()
    {


        $('#demo').click(function(){

            alert('muiz');

            var tr = $('<tr />').attr({'class' : 'clickable-row' , 'data-href' : 'config.php'});
            var td1 = $('<td />');
            var checkbox = $('<input />').attr({'type' : 'checkbox', 'name' : 'check'});
            td1.append(checkbox);
            var td2 = $('<td />').html('america<br>newyork');
            var td3 = $('<td />').text('oct');

            tr.append(td1,td2,td3);
            $('#mytable').append(tr);

        });


    });
</script>
</body>
</html>



