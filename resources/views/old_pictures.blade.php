@extends ('layouts.admin_app')

@section('content')
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "laravel";

$con = new mysqli($server, $username, $password, $database) or die("Kapcsolódási hiba!");

$con->set_charset("utf8");
    $car_id = "";

    function Show($con){
        $sql = "SELECT id, car_id, image FROM pictures WHERE car_id = 'id'";
        
        $resultrows = 0;
        $output = "";
        if($stmt = mysqli_prepare($con, $sql)){
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = $con->query($sql);
            $resultrows = mysqli_stmt_num_rows($stmt);

            if ($resultrows > 0) {
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $output .= "<tr";
                    $output .= ($i%2==0) ? " class='paratlan'" : " class='paros'";
                    $output .= ">";
                    $output .= "<td>" . $row['car_id'] . "</td>";
                    $output .= "<td>" . $row['id'] . "</td>";
                    $output .= "<td>" . $row['image'] . "</td>";
                    $idpic = $row['id'];
                    $output .= "<td>";
                        $output .= "<form action='/deletepic/{$idpic}' method='DELETE'>";
                            $output .= "<input type='submit' value='Delete' />";
                        $output .= "</form>";
                    $output .= "</td>";
                    $output .= "</tr>";
                    $output .= 'id';
                    $i++;
                }	
            }
        }
        else {
            $output = "Probálja meg később";
        }
        return $output;
        mysqli_close($con);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
        .paros {
            background-color: #ddd;
            color: black;
        }
            
        .paratlan{
            background-color: #aaa;
            color: black;
        }
        .cim {
            background-color: #6A6569;
            color: black;
        }
        .h2{
            margin-left: 10%;
            color: black;
        }
        table, th, td {
            border: 1px solid black;
        }
        td{
            align: center;
        }
    </style>
        <title>Pictures</title>
    </head>
    <body>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h2>Pistures</h2>
                    <table cellpadding="10">
                        <thead>
                            <tr>
                                <th class="cim">Car id</th>
                                <th class="cim">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo Show($con); ?>
                        </tbody>	
                    </table>
                    <form action="/createpic" method='GET'>
                        <div>
                            <label for="pic">Choose images to upload (PNG, JPG)</label>
                            <input type="file" id="pic" name="pic" accept="image/*">
                            <input type="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

@endsection