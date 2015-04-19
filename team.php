<!doctype html>
<html>
    <head>
        <title>Format Code</title>
        <link href="css/styles.css" rel="stylesheet" >
    </head>
    
    <body>
       
            
            <?php $people = array("George Allard", "Abigail Norris", "Ged Griska"); ?>
            
            <?php $images = array("george.jpg", "abbie.jpeg", "ged.jpg"); ?>
            
            
     
            <?php $text = array("George is 20 years old from Northwood in Northwest London. 
George studies Digital Media Design at Bournemouth University and is interested in App design and game design. 
George is outgoing and enjoys socialising with friends, he doesn’t have any specific hobbies however spends half his time watching films and TV series.", "Abigail is 20 years old; she lives in Bournemouth/Plymouth and is originally from Gibraltar. In her spare time she likes to snowboard and windsurf as well socialise with friends. She study’s Digital Media Design at Bournemouth University and enjoys the world of media, especially the design aspect of the course.", "Full name Gediminas. 20 years old Digital Media Design Student at Bournemouth University. Comes from a small country called Lithuania. Has been living in the UK for the past 5 years. Enjoys reading and learning new stuff. Has a huge interest in technology and digital Innovations. He hopes that Digital Media Design Degree will provide him with a skill set needed to create digital innovations. Because of the previous studies in Business he is interested in the Business Models behind Digital Media."); ?>
            
            
            <?php $numberOfBoxes = count($people) ; ?>
            
            <?php include 'nav.php'; ?>
            
            <div class="top-title">
                
                 <div class="container">
                <h1><?php echo "<font color='black'>Meet the team!</font>"; ?></h1>
            </div>
            
            <?php
?>
            
            <?php for($x = 0; $x < $numberOfBoxes; $x++) { ?>
                
                <?php include 'box.php'; ?>
                  
            <?php } ?>
            
                     <?php     
    if(isset($_POST["submit"])) {
        $name = ucfirst($_POST["name"]);
        $description = ucfirst($_POST["description"]);
        $city = ucfirst($_POST["location"]);
        $gender = ucfirst($_POST["rating"]);
    } else {
        $name = "";
        $description = ""; 
        $location = ""; 
        $rating = ""; 
    }
?>

<?php
    if(isset($_POST["submit"])) {
        
        if(empty($name)) {
            $message = "Invalid name";
        } else if(empty($description)) {
            $message = "Invalid Description";
        } else if(empty($location)) {
            $message = "Invalid location";
        }else if(empty($rating)) {
            $message = "Please rate your activity";
        } else {
            $query = "INSERT INTO users (name, description, location, rating) VALUES ('{$name}', '{$description}', '{$location}', '{$rating}')";
            $result = mysqli_query($connect, $query); 

            if($result) {
                $message = "Success, your post was added";   
            } else {
                $message = "Sorry, something went wrong"; 
            }
            
            $name = "";
            $description = ""; 
            $location = ""; 
            $rating = "";
  
        }
    
    }
?>  
            

        </div>
    </body>
</html>