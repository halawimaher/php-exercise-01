<link rel="stylesheet" href="style2.css">
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="text">Enter Your Word or Phrase</label>
        <input type="text" name="text" id="text">
        <input class="button" type="submit" name="submit" id="submit">
        <div class="message"><?php $output ?></div>
    </form>
</body>
<?php 
$output = '';
if (isset($_POST['submit'])){ //when login button is pressed
    $text = $_POST["text"];
    $sample = strtolower(str_replace(' ', '', $text));
    function palindrome($phrase){
        $phrase_len = strlen($phrase) -1;
        $output= "";

        for($i = $phrase_len; $i>=0; $i--){
            $output .= $phrase[$i];
        }
            
        if($output == $phrase){
        $output = "Palindrome"; //print out First Name: + name input
        echo $output;
        }
        else{
        $output = "Not a Palindrome";; //print out password as *
        echo $output;
        }
    }
    palindrome($sample);
}
?>


