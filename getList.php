<?php
  	include("Connection.php");
	/**
	* 
	*/


	$categoryId=$_POST["idCat"];
	var_dump($categoryId);
	$query_str="select *
				from wp_posts, wp_term_relationships, wp_term_taxonomy
				where wp_posts.ID=wp_term_relationships.object_id and
				wp_term_relationships.term_taxonomy_id=wp_term_taxonomy.term_taxonomy_id and 
				wp_term_taxonomy.term_id=1; ";


	$result = mysql_query($query_str) or die ("Impossibile recuperare le foto");
	while($row = mysql_fetch_assoc($result))
	{
		$categories[$row['ID']].title = $row['post_title'];
		$categories[$row['ID']].author=$row['post_author'];
	}

	

	echo json_encode($categories);

	$jsonData=json_encode($dataPost);
	echo "$jsonData";

?>
