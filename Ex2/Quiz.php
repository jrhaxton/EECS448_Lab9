<?php 

    $q1answer = $_POST["q1"];
    $q2answer = $_POST["q2"];
    $q3answer = $_POST["q3"];
    $q4answer = $_POST["q4"];
    $q5answer = $_POST["q5"];
    $right = 0;
    $total = 5;

    if($q1answer == "Katara" || $q1answer == "Sokka" || $q1answer == "Toph")
    {
        echo "<p>Question 1: Who is the main character of the TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q1answer . "<br>";
        echo "Correct Answer is: Aang<br><br>";
    }
    else if($q1answer == "Aang")
    {
        echo "<p>Question 1: Who is the main character of the TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q1answer . "<br>";
        echo "Correct Answer is: Aang<br><br>";
        $right++;
    }


    if($q2answer == "Blood" || $q2answer == "Ice" || $q2answer == "Lightning")
    {
        echo "<p>Question2: Which of these bendings was not in the TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q2answer . "<br>";
        echo "Correct Answer is: Lava<br><br>";
    }
    else if($q2answer == "Lava")
    {
        echo "<p>Question2: Which of these bendings was not in the TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q2answer . "<br>";
        echo "Correct Answer is: Lava<br><br>";
        $right++;
    }


    if($q3answer == "Lost in the Dark" || $q3answer == "Secret Tunnel" || $q3answer == "Change")
    {
        echo "<p>Question 3: What was the song that Iroh sang in the TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q3answer . "<br>";
        echo "Correct Answer is: Leaves From the Vine<br><br>";
    }
    else if($q3answer == "Leaves From the Vine")
    {
        echo "<p>Question 3: What was the song that Iroh sang in the TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q3answer . "<br>";
        echo "Correct Answer is: Leaves From the Vine<br><br>";
        $right++;
    }


    if($q4answer == "Water Chakra" || $q4answer == "Light Chakra" || $q4answer == "Air Chakra")
    {
        echo "<p>Question 4: Which chakra did Aang unlock while underneath the Earth Kingdom in TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q4answer . "<br>";
        echo "Correct Answer is: Thought Chakra<br><br>";
    }
    else if($q4answer == "Thought Chakra")
    {
        echo "<p>Question 4: Which chakra did Aang unlock while underneath the Earth Kingdom in TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q4answer . "<br>";
        echo "Correct Answer is: Thought Chakra<br><br>";
        $right++;
    }


    if($q5answer == "Wu and Wan" || $q5answer == "Yue and Tui" || $q5answer == "Wu and Yue")
    {
        echo "<p>Question 5: What are the names of the Moon and Ocean spirits in TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q5answer . "<br>";
        echo "Correct Answer is: Tui and La<br><br>";
    }
    else if($q5answer == "Tui and La")
    {
        echo "<p>Question 5: What are the names of the Moon and Ocean spirits in TV show Avatar: The Last Airbender?</p>";
        echo "You answered: " . $q5answer . "<br>";
        echo "Correct Answer is: Tui and La<br><br>";
        $right++;
    }

    echo "You got " . $right . "/" . $total . " correct. That is a " . ($right / $total)*100 . "%.";

?>  