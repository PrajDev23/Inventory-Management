<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Date of Entry</th>
                    <th scope="col">Area Name</th>
                    <th scope="col">Shop Name</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Cash</th>

                </tr>
            </thead>




            
            <tbody>
            <?php
                include 'connect.php';
                $sql="SELECT * FROM `blne1`";
                $result=mysqli_query($con,$sql);
                if($result){
                   while($row=mysqli_fetch_assoc($result)){
                    $slno=$row['Sl No'];
                    $date=$row['Dt. of Entry'];
                    $dname=$row['District Name'];
                    $aname=$row['Area Name'];
                    $sname=$row['Shop Name'];
                    $iname=$row['Item Name'];
                    $credit=$row['Credit'];
                    $cash=$row['Cash'];
                    echo '<tr>
                        <th scope="row">'.$slno.'</th>
                        <td>'.$date.'</td> 
                        <td>'.$aname.'</td>
                        <td>'.$sname.'</td>
                        <td>'.$iname.'</td>
                        <td>'.$credit.'</td>
                        <td>'.$cash.'</td>
                    </tr>';
                   
                   }
                   

                }
            ?>
            <!-- //     <tr>
            //         <th scope="row">1</th>
            //         <td>Mark</td>
            //         <td>Otto</td>
            //         <td>@mdo</td>
            //     </tr>
            //     <tr>
            //         <th scope="row">2</th>
            //         <td>Jacob</td>
            //         <td>Thornton</td>
            //         <td>@fat</td>
            //     </tr>
            //     <tr>
            //         <th scope="row">3</th>
            //         <td colspan="2">Larry the Bird</td>
            //         <td>@twitter</td>
            //     </tr> -->
            </tbody>
        </table>
    </div>

</body>

</html>