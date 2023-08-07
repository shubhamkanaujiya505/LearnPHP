<?php 

$emp = [
    [1,"Shubham","Developer",50000],
    [2,"Sonu","Designer",60000],
    [3,"Syam","Writer",50000],
    [4,"Anil","Actor",60000],
    [5,"Manju","Politician",45000],
    [6,"Mohan","Bussiness",46000],
    [7,"Abhishek","Manager",98000],
    [8,"Anu","Polotician",78900],
    [9,"Vinod","Manager",87000],
    [10,"Kajal","Researcher",25000],
    [11,"Anchal","Scientist",90000],
];
// echo "<pre>";
// print_r($emp);die;

echo "<table border = '2px' cellpadding='5px' cellspacing='5px'>";
echo "<tr>
        <th>Emp Id. </th>
        <th>Emp name. </th>
        <th>Designation. </th>
        <th>Salary. </th>
        </tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach ($v1 as $v2) {
       
        echo "<td> $v2 </td> ";
    }
   
    echo "</tr>";
}

echo "</table>";

?>