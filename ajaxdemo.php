<!DOCTYPE html>
<html>
<head>
    <script src="jquery-4.0.0.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $.ajax({
                    url: "getdata.txt",
                    success: function(data){
                        $("#para").html(data);
                    },
                    error: function(){
                        $("#para").html("error loading data.......");
                    }
                });
            });
        })