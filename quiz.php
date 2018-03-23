<?php 
$pageTitle = 'Quiz';

include "includes/header.html.php"; ?>
  <section>
    <h2 class="noDisplay">Contact Us</h2>
    <article class="left_article">
      <h3>Take a quiz on your knowledge of Famous Landmarks around the Globe</h3>
    
	<?php
         $landmarks = array( 
            "question1" => array (
				"q1" => "What is the location of Uluru?",
				"choices" => array("a1" => "San Jose, CA",
									"a2" => "Kata Tjuta National Park, Australia",	
									"a3" => "Hokaido, Japan",
									"a4" => "Sydney, Austrailia"),
				"answer" => "a2"
            ),
            
            "question2" => array (
				"q1" => "What is the location of Machu Picchu?",
				"choices" => array("a1" => "Nevada, CA",
									"a2" => "Sydney, Austrailia",	
									"a3" => "Andes Mountain, Peru",
									"a4" => "Lima, Peru"),
				"answer" => "a3"
            ),
            
            "question3" => array (
				"q1" => "What is the location of Mount Rushmore?",
				"choices" => array("a1" => "San Francisco, California",
									"a2" => "Black Hills, South Dakota",	
									"a3" => "Stockton, California",
									"a4" => "Boulder City, Nevada"),
				"answer" => "a2"
            ),

            "question4" => array (
				"q1" => "What is the location of Sagrada Familia?",
				"choices" => array("a1" => "Bilbao, Spain",
									"a2" => "Toledo, Spain",	
									"a3" => "Barcelona, Spain",
									"a4" => "Valencia, Spain"),
				"answer" => "a3"
            ),

            "question5" => array (
				"q1" => "What is the location of Sheikh Zayed Mosque?",
				"choices" => array("a1" => "Dubai, United Arab Emirates",
									"a2" => "Jebel Ali, United Arab Emirates",	
									"a3" => "Sharjah, United Arab Emirates",
									"a4" => "Abu Dhabi, United Arab Emirates"),
				"answer" => "a4"
            ),

         );
       ?>  
       
       
       <!-- form -->
		<form action="quiz.php" id="form1" name="form1" method="post">
       <?php
         /* Access the multi-dimensional array values */
		
		$correct = 0;
		echo '<table>';
			$isValid = true;
			foreach($landmarks as $q => $landmark){
				echo "<br />";
	
				// outputs landmark array q1 (questions)
				echo $landmark['q1'] . "<br />";
				// outputs landmark array choices
				
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					if(!isset($_POST[$q])){
						$isValid = false;
						// This validation won't show since 'required' is in radio button
						echo '<h5>Select answer</h5>';
					}
					else if($_POST[$q] == $landmark['answer']){
						$correct++;
					}
					else{
						echo '<h5>Incorrect</h5>';
					}
				}
				
				// Displays radio buttons
				foreach($landmark['choices'] as $abc => $land){	
					$q_checked = (isset($_POST[$q]) and $_POST[$q] == $abc ) ? 'checked' : '';
					echo '<input type="radio" name="'.$q.'" id="'.$land.'"  value="'.$abc.'" ' . $q_checked . '>' .$land . "<br />";
				}
				// the answer they picked would be in $_POST[$q]
				//echo $_POST[$q];
				//echo $land;
				//print_r($landmarks);
			}

		echo '</table>';
		
		echo '<br>';
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if(isset($_POST[$q]) < count($landmark['choices'])){
				echo '<h5>Quiz incomplete</h5>';
			}
			if($isValid == true){
				// Displays QUIZ percentage 
				calcPercent($correct, count($landmarks));
			}
		}
	?>    
		<p>
	  		<input type="submit" name="submit" id="submit" value="Submit">
		</p>

	<?php
/*
		///////////////////////////////////////////////////////////////////
		// VALIDATION OUTSIDE "LOOOP"
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		//if(isset($_POST['submit']) < count($landmark['choices'])){
			if(isset($_POST[$q]) < count($landmark['choices'])){
				echo '<h5>Quiz incomplete</h5>';
			}
			else{
				// Displays QUIZ percentage 
				calcPercent($correct, count($landmarks));
				$submitted = true;
			}
		}*/
	?>
    </article>
  </section>
<?php include "includes/footer.html.php"; ?>





