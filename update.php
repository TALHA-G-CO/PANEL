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
    <?PHP
    if(isset($_get['id']))
        $_id
    ?>

    <body>
    <div class="select-info mt-5"></div>
    <div class="container">



<div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">Name </th>
                    <th scope="col">Urdu</th>
                    <th scope="col">Maths</th>
                    <th scope="col">English</th>
                    <th scope="col">Physics</th>
                    <th scope="col">Chemistry</th>
                    <th scope="col">Totalmark</th>
                    <th scope="col">Obtain</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">grade</th>
                    <th scope="col">remarks</th>
                    <th colspan=2>action</th>
                </tr>
                </thead>
            <tbody>
                <?php
                $query=$pdo->query("select * from marksheet1");
                $row=$query->fetchall(PDO::FETCH_ASSOC);
                foreach ($row aS $value) {
                    ?>
                     <tr class="">
                    <td scope="row"><?php echo$value['name'];?></td>
                    <td><?php echo $value['urdu'];?></td>
                    <td><?php echo $value['math'];?></td>
                    <td><?php echo $value['english'];?></td>
                    <td><?php echo $value['physics'];?></td>
                    <td><?php echo $value['chemistry'];?></td>
                    <td><?php echo $value['obtain'];?></td>
                    <td><?php echo $value['percentage'];?></td>
                    <td><?php echo $value['grade'];?></td>
                    <td><?php echo $value['remark'];?></td>
                    <td><a href="" class="btn btn-success">Edit</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                    
                </tr>
                    <?php
                }
                ?>
            
               
               
            </tbody>
        </table>
        </div>

    </div>
