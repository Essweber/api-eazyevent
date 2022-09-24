<?php
    header('Access-Control-Allow-Origin: http://localhost:3000/inscription');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/user.php';
include '../../vendor/autoload.php';
if ($_GET['cible']) {

    $cible = $_GET['cible'];
    switch ($cible) {
        case 'create-user':
        

            // Instantiate DB & connect
            $database = new Database();
            $db = $database->connect();

            // Instantiate blog user object
            $user = new user($db);

            // Get raw user data
            $data = json_decode(file_get_contents("php://input"));
            $user->fname = $data->fname;
            $user->lname = $data->lname;
            $user->email = $data->email;
            $user->password = $data->password;
            $user->tel = $data->tel;
            $user->type = $data->type;
            // $user->created_at = "2022-09-11 01:05:25";
            // $user->updated_at = "2022-09-11 01:05:25";

            // Create user
            if ($user->create()) {

                echo json_encode(
                    array('message' => 'user Created')
                );
            } else {
                echo "sorry";
                echo json_encode(
                    array('message' => 'user Not Created')
                );
            }

            break;

        default:
            # code...
            break;
    }
    $email = htmlentities(strip_tags($data->email));
}
