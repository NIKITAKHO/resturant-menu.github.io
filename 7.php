<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert Checkbox values in Database using Jquery Ajax and PHP Mysqli</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <h3>Insert Checkbox values in Database using Jquery Ajax and PHP Mysqli</h3>
    <div class=item>
    <input type="checkbox" class="get_value" value="Python">
    <label>Python</label>
    
</div>
<div class=item>

      
        

    <input type="checkbox" class="get_value" value="JavaScript">
    <label>JavaScript</label>
</div>
    <div class=item>
   
           
         
           
    <input type="checkbox" class="get_value" value="Java" >
    <label>Java</label>
</div>
    <div class=item>
 
      
         
         
    <input type="checkbox" class="get_value" value="PHP">
    <label>PHP</label>
</div>
    <div class=item>
    
         
         
         
    <input type="checkbox" class="get_value" value="C#">
    <label>C#</label>
</div>
    <button type="button" name="submit" id="submit">Save</button>
    <br/>
    <h4 id="result"></h4>
    <script>
        $(document).ready(function() {
            $('#submit').click(function() {
                var insert = [];
                $('.get_value').each(function() {
                    if ($(this).is(":checked")) {
                        insert.push($(this).val());
                    }
                });
                insert = insert.toString();
                $.ajax({
                    url: "connectionclass.php",
                    method: "POST",
                    data: {
                        insert: insert
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>