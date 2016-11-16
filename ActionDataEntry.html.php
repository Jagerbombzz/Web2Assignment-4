
<?php


// Start Session
session_start();

// Database connection
require __DIR__ . '/database.php';
$db = DB();

// Application library ( with DemoLib class )
require __DIR__ . '/lib/library.php';
$app = new DemoLib();

        if(is_null($_REQUEST['entertainment']))
        {
			
            header("Location: DataEntry.html.php?entertainment=".$_REQUEST['entertainment'].'&gaming='.$_REQUEST['gaming'].'&internet='.$_REQUEST['internet'].'&sleep='.$_REQUEST['sleep'].'&socialmedia='.$_REQUEST['socialmedia'].'&study='.$_REQUEST['study'].'&study='.$_REQUEST['study'].'&work='.$_REQUEST['work'].'&error=bad_input'); //else redirect to home page
        }
        else
            {

				$gaming = $_POST['gaming'];
				$entertainment = $_POST['entertainment'];
                $socialmedia = $_REQUEST['socialmedia'];
                $internet = $_POST['internet'];
                $sleep = $_POST['sleep'];
                $study = $_POST['study'];
                $work = $_POST['work'];
				$user_id = $_SESSION['user_id'];
                $date = date('Y-m-d',strtotime($_POST['date']));
				
            $db = DB();
            $query = $db->prepare("INSERT INTO activity(gaming,entertainment,socialmedia, internet,sleep,study,work,date, user_id) VALUES (:gaming,:entertainment,:socialmedia,:internet,:sleep,:study,:work,:date, :user_id)");
            $query->bindParam("gaming", $gaming, PDO::PARAM_STR);
            $query->bindParam("entertainment", $entertainment, PDO::PARAM_STR);
            $query->bindParam("socialmedia", $socialmedia, PDO::PARAM_STR);
            $query->bindParam("internet", $internet, PDO::PARAM_STR);
            $query->bindParam("sleep", $sleep, PDO::PARAM_STR);
            $query->bindParam("study", $study, PDO::PARAM_STR);
            $query->bindParam("work", $work, PDO::PARAM_STR);
			$query->bindParam("user_id", $user_id, PDO::PARAM_STR);
			$query->bindParam("date", $date, PDO::PARAM_STR);
			
            $query->execute();
            //return $db->lastInsertId();
        
		 if($query)
				{
                    echo 'Success insert into workout';
                }
				else
				{
                    echo 'Unsuccess insert into workout';
                }

               
            }
?>