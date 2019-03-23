<?php $page = 'girl';  require_once ('header.php'); ?>
<html>
<head>
  <title>Random Girl Names</title>
</head>
<body id="girlrand">

<?php

//PHP array containing baby girl names
$girl_names = array('Emma', 'Olivia', 'Ava', 'Isabella', 'Sophia', 'Mia', 'Charlotte', 'Amelia', 'Evelyn', 'Abigail', 
              'Harper', 'Emily','Elizabeth','Avery','Sofia','Ella','Madison','Scarlett','Victoria','Beverly',
              'Aria','Grace','Chloe','Camila','Penelope','Riley','Layla','Lillian','Nora','Zoey','Mila','Aubrey',
              'Hannah','Lily','Addison','Eleanor','Natalie','Luna','Savannah','Brooklyn','Leah','Zoe','Stella',
              'Hazel','Ellie','Paisley','Audrey','Skylar','Violet','Claire','Bella','Aurora','Lucy','Anna',
              'Samantha','Caroline','Genesis','Aaliyah','Kennedy','Kinsley','Maya','Sarah','Madelyn','Adeline',
              'Alexa','Ariana','Elena','Gabriella','Naomi','Alice','Sadie','Hailey','Eva','Emilia','Autumn',
              'Quinn','Nevaeh','Piper','Ruby','Serenity','Willow','Everyly','Cora','Kaylee','Lydia','Aubree',
              'Arianna','Eliana','Peyton','Melanie','Gianna','Isabelle','Julia','Valentina','Nova','Clara',
              'Vivian','Raegan','Mackenzie','Madeline','Brielle','Delilah','Isla','Rylee','Katherine','Sophie',
              'Josephine','Ivy','Liliana','Jade','Maria','Taylor','Hadley','Kylie','Emery','Adalynn','Natalia',
              'Annabelle','Faith','Alexandra','Ximena','Ashley','Brianna','Raelynn','Trinity','Jordyn','Kimberly');

//Generate a random forename.
$random_name = $girl_names[mt_rand(0, sizeof($girl_names) - 1)];

//Generate a random surname.
$random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];

//Combine them together and print out the result.
//echo $random_name . ' ' . $random_surname;
?>

<div class="container">
  <div class="row">
  <div class="col-lg-6 m-auto">
    <div class="card text-center mt-5" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Baby Girl Names</h5>
        <div class="card-text">
          <input id="girlname" type="text" class="form-lg" value="<?php echo $random_name; ?>">
          <a href="randomgirl.php" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
          <button onclick=myFunction(); type="button" class="btn btn-primary">Copy</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
      function myFunction(){
        var copyTxt = document.getElementById("girlname");
        copyTxt.select();
        document.execCommand('copy');
      }
</script>

</body>
</html>