<?php $page = 'boy';  require_once ('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Random Boy Names</title>
</head>

<body id="boyrand">
<?php
//PHP array containing baby boy names
$boy_names = array('Liam','Noah','William','James','Logan','Benjamin','Mason','Elijah','Oliver','Jacob','Lucas',
                  'Michael','Alexander','Ethan','Daniel','Matthew','Aiden','Henry','Joseph','Jackson','Samuel',
                  'Sebastian','David','Carter','Wyatt','Jayden','John','Owen','Dylan','Luke','Gabriel','Anthony',
                  'Isaac','Grayson','Jack','Julian','Levi','Christopher','Joshua','Andrew','Lincoln','Mateo',
                  'Ryan','Jaxon','Nathan','Aaron','Isiah','Thomas','Charles','Caleb','Josiah','Christian','Hunter',
                  'Landon','Adrian','Richard','Asher','Cameron','Leo','Theodore','Jeremiah','Hudson','Robert','Easton',
                  'Nicholas','Colton','Angel','Dominic','Adam','Elias','Jose','Evan','Maverick','Xavier','Parker',
                  'Jason','Santiago','Jace','Cooper','Roman','Chase','Sawyer','Gavin','Leonardo','Kayden','Ayden',
                  'Jameson','Zachary','Kevin','Bentley','Axel','Tyler','Micah','Vincent','Weston','Miles','Wesley',
                  'Harrison','Brandon','Cole','Braxton','Silas','Tristan','Ryder','Bennett','George','Justin','Diego');

//Generate a random forename.
$random_name = $boy_names[mt_rand(0, sizeof($boy_names) - 1)];

//Generate a random surname.
$random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];

//Combine them together and print out the result.
//echo $random_name . ' ' . $random_surname;
?>
<body>
<div class="container">
  <div class="row">
  <div class="col-lg-6 m-auto">
    <div class="card text-center mt-5" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">Baby Boy Names</h5>
        <div class="card-text">
          <input id="boyname" type="text" class="form-lg" id="boyname" value="<?php echo $random_name; ?>">
          <a href="randomboy.php" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
          <button onclick=myFunction(); type="button" class="btn btn-primary">Copy</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

<script type="text/javascript">
        function myFunction(){
            var copyTxt = document.getElementById('boyname');
            copyTxt.select();
            document.execCommand('copy');
        }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>