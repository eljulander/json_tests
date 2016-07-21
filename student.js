function addStudent(name,progress,icon){
    
    $.get("add_student.php",{name:name,progress:progress,image:icon},function(e){
        console.log(e);
        renderStudent(e);
    }); 
}

function renderStudent(student){
    console.log("Starting...");
    $.get("images/images.xml",function(e){
        
        $xml = $(e);
        $("body").append($xml.find(student.image).html());
        console.log("$xml.find(student.image).html()");
    });
}