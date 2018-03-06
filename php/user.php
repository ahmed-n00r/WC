<?php
// session_start();
function getU($email, $pas, $co){
	// $co = array('user_email', 'user_pas', 'user_id', 'user_name' );
  $outp = select_con('users', $co,
	"email = '".$_POST["uname"]."' and pass = "."'".$_POST["psw"]."'");
  if($outp != "0 results"){
  // $_SESSION["user_id"] = $outp[0]['user_id'];
  $_SESSION["full_name"] = $outp[0]['full_name'];
  $_SESSION["email"] = $outp[0]['email'];
  }
  // print_r($outp);
}

function grop_pormtion(){
	if (isset($_SESSION["user_id"])) {
		if ($_SESSION["user_id"] == 1) {
			$co = array('id');
			$outp = select_fall("Select id
From user_has_groupe
  Inner Join groupe_has_integrte On user_has_groupe.groupe_groupe_id =
    groupe_has_integrte.groupe_groupe_id
  Inner Join integrte On groupe_has_integrte.integrte_integrte_id =
    integrte.integrte_id
    where user_user_email = '".$_SESSION["user_email"]."'", $co);
			for ($i=0; $i <count($outp) ; $i++) {
				echo $outp[$i]['id'];
				echo '<script>
  $(document).ready(function(){
    $(".'.$outp[$i]['id'].'").show();
  });
</script>';
			}
		}
	}
}

?>
