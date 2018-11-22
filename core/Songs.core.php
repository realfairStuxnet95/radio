<?php 
include_once 'Query.php';
class Songs extends Query{
	//function to get artist songs
	public function getMySongs($user_id){
		global $con;
		$result=array();
		$query="SELECT * FROM audio_files
				WHERE user_id=\"$user_id\"
				ORDER BY file_id DESC";
		$result=$this->select($con,$query);
		return $result;
	}

	//function to save new song
	public function saveSong($file_id,$user_id,$title,$file_name,$category,$description){
		global $con;
		$query="INSERT INTO audio_files(file_id,user_id,title,file_name,
										category,description,type,status)
				VALUES (\"$file_id\",\"$user_id\",\"$title\",\"$file_name\",
						\"$category\",\"$description\",'audio','ACTIVE')";
		$status=$this->insert($con,$query);
		return $status;
	}
	#################################### ADMIN SECTION ###################################
	//function to load song
	public function loadAllSongs(){
		global $con;
		$result=array();
		$query="SELECT * FROM audio_files
				ORDER BY title ASC";
		$result=$this->select($con,$query);
		return $result;
	}
	//function to get song artist
	public function getArtist($user_id){
		global $con;
		$query="SELECT * FROM subscribers
				WHERE user_id=\"$user_id\"
				LIMIT 1";
		$artist="";
		$result=array();
		$result=$this->select($con,$query);
		foreach ($result as $key => $value) {
			$artist=$value['names'];
		}

		return $artist;
	}
}
$songs=new Songs();
?>