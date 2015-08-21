<?php

// call the passed in function
if(isset($_GET['method']) && !empty($_GET['method'])) {
  if(function_exists($_GET['method'])) {
    $_GET['method']();
  }
}

// methods
function getAllUsers() {
  $data = array(
  	array("id"=>"PEU33CQK2QT","name"=>"Coby Mcbride","email"=>"justo.faucibus.lectus@Aeneanmassa.net","phone"=>"1-187-475-2845"),
  	array("id"=>"SMQ61SKJ0NR","name"=>"Zachery Sims","email"=>"molestie@sapien.co.uk","phone"=>"353-1227"),
  	array("id"=>"FQO67EPH6MG","name"=>"Marvin Yang","email"=>"lorem.semper@necmalesuadaut.edu","phone"=>"658-5226"),
  	array("id"=>"FFT87RJJ9NC","name"=>"Leonard Mcguire","email"=>"libero.at.auctor@aliquet.edu","phone"=>"801-0846"),
  	array("id"=>"MYY76ODV6HU","name"=>"Rooney Schultz","email"=>"facilisi.Sed@eleifendnec.ca","phone"=>"104-5317"),
  	array("id"=>"VSR79AEC8AL","name"=>"Gregory Vaughn","email"=>"Nunc@aceleifend.org","phone"=>"445-9434")
  );

  $users = array();
  foreach ($data as $user) {
    $users[] = $user;
  }
  $users = json_encode($users);
  echo $_GET['jsoncallback'] . '(' . $users . ')';
}

function getUser() {
  $data = array(
    "id"=>"PEU33CQK2QT",
    "name"=>"Coby Mcbride",
    "email"=>"justo.faucibus.lectus@Aeneanmassa.net",
    "phone"=>"1-187-475-2845",
    "issues" => array(
      "openIssues" => 4,
      "closedIssues" => 3
    )
  );
}
