<?PHP
    /*
     * name -> student name
     * progress -> student progress
     * image -> student icon
     */
    $name = $_GET['name'];
    $progress = $_GET['progress'];
    $image = $_GET['image'];

    $in = file_get_contents('student_data.json');
    
    $array = json_decode($in);
    $app =  json_decode('{"name": "'.$name.'","progress": "'.$progress.'","food":"'.$image.'"}');
    
  
    array_push($array,$app);
   
    $newData = json_encode($array);
    if($name != "")
    file_put_contents('student_data.json',$newData);
    
    echo json_encode($app);
?>