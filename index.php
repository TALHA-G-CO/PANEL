<?php
include("connection.php")
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="" class="form-control">name</label>
                <input
                type ="text"
                name = "name"
                id=""
                class="form-control"
                placeholder="Enter Your Name"
                aria-description="helpId"
               />
            </div>
            <div class="mb-3">
                <label for="" class="form-control">Urdu</label>
                <input
                type ="number"
                name = "urdu"
                id=""
                class="form-control"y
                placeholder="Enter Your Name"
                aria-description="helpId"
               />
            </div>
            <div class="mb-3">
                <label for="" class="form-control">maths</label>
                <input
                type ="number"
                name = "maths"
                id=""
                class="form-control"
                placeholder="Enter Your Name"
                aria-description="helpId"
               />
            </div>
            <div class="mb-3">
                <label for="" class="form-control">english</label>
                <input
                type ="number"
                name = "english"
                id=""
                class="form-control"
                placeholder="Enter Your Name"
                aria-description="helpId"
               />
            </div>
            <div class="mb-3">
                <label for="" class="form-control">physics</label>
                <input
                type ="number"
                name = "physics"
                id=""
                class="form-control"
                placeholder="Enter Your Name"
                aria-description="helpId"
               />
            </div>
            <div class="mb-3">
                <label for="" class="form-control">chemistry</label>
                <input
                type ="number"
                name = "chemistry"
                id=""
                class="form-control"
                placeholder="Enter Your Name"
                aria-description="helpId"
               />
</div>
            <button type="submit" class="btn btn-outline-success " name ="result">
                Submit


            </button>


        </form>
        <?php
        if(isset($_POST['result'])){
            $name=$_POST['name'];
            $urdu=$_POST['urdu'];
            $math=$_POST['maths'];
            $english=$_POST['english'];
            $physics=$_POST['physics'];
            $chemistry=$_POST['chemistry'];
            $totalmark='500';
            $obtain= $urdu + $math + $english + $physics + $chemistry;
            $percentage=$obtain/$totalmark*100;
            $grade="";
            $remarks="";
            if($percentage>=80 && $percentage<=100){
                $grade="A1";
                $remarks="excellent";
            } 
            else if($percentage>=70 && $percentage<80){
                $grade="A";
                $remarks="very good";
            } 
            else if($percentage>=60 && $percentage<70){
                $grade="B";
                $remarks=" good";
            } 
            else if($percentage>=50 && $percentage<60){
                $grade="C";
                $remarks="fair";
            } 
            else{
                $grade="Fail";
                $remarks="Better Luck Next Time";
            }

            $query=$pdo->prepare("insert into marksheet1 (name,urdu,math,english,physics,chemistry,obtain,percentage,grade,remark)value(:pn,:pu,:pm,:pe,:pp,:pc,:po,:pper,:pg,:pr) ");
            $query->bindparam("pn",$name);
            $query->bindparam("pu",$urdu);
            $query->bindparam("pm",$math);
            $query->bindparam("pe",$english);
            $query->bindparam("pp",$physics);
            $query->bindparam("pc",$chemistry);
            $query->bindparam("po",$obtain);
            $query->bindparam("pper",$percentage);
            $query->bindparam("pg",$grade);
            $query->bindparam("pr",$remarks);
        
            $query->execute();
            echo "<script>alert('data insert into table')</script>"
         ?>
    </div>
    

    <?php
        }
 ?>
  </div>
          </body>
</html>

