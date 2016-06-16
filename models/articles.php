<?php
	function article_all(){
			$art1 = ["id"=>1, "title"=>"Title1", "data"=>"2016-06-03", "content"=>"content1"];
			$art2 = ["id"=>2, "title"=>"Title2", "data"=>"2016-06-03", "content"=>"content2"];

			$arr[0] = $art1;
			$arr[1] = $art2;

			return $arr;
	}

	function article_get($id){
			return ["id"=>1, "title"=>"заголовок", "data"=>"2016-06-03", "content"=>"статья"];
	}
	/*
	function article_new($title, $date, $content){

	}

	function article_all($id, $title, $date, $content){

	}

	function article_all($id){

	}
*/
?>
