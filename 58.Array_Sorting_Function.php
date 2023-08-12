<!-- 
                                    Sorting function attributes
(Function name)	   (Sorts by)	 (Maintains key association)	   (Order of sort)	                  (Related functions)
array_multisort()	value	       string keys yes, int keys no	    first array or sort options	        array_walk()
asort()	            value	       yes	                                 ascending	                    arsort()
arsort()	        value	       yes	                                 descending	                    asort()
krsort()	        key	           yes	                                 descending	                    ksort()
ksort()	            key	           yes	                                 ascending	                    krsort()
natcasesort()	    value	       yes	                                 natural,case insensitive	    natsort()
natsort()	        value	       yes	                                 natural	                    natcasesort()
rsort()	            value	       no	                                 descending	                    sort()
shuffle()	        value	       no	                                 random	                        array_rand()
sort()	            value	       no	                                 ascending	                    rsort()
uasort()	        value	       yes	                                 user defined	                uksort()
uksort()	        key	           yes	                                 user defined	                uasort()
usort()	            value	       no	                                 user defined	                uasort()
 -->

<?php 

// short when both  value same like 3
// $result1 = ["Grapes", "Pink", "Blue"]; 
// $result = ["Apple", "Pea", "Orange"]; 


$result = ["Apple", "Pea", "Orange","Grapes", "Pink", "Blue"]; 

// $result = ["16" => "Apple",
//            "12" => "Pea",
//            "38" => "Orange",
//            "4" => "Grapes",
//            "95" => "Pink"];

// for net sorting

// $result = ["img12.png", "img14.png", "img2.png", "img54.png", "img25.png"];
// $result = ["Img12.png", "img14.png", "img2.png", "img54.png", "Img25.png"];

// sort($result);
// rsort($result);
// asort($result); //only value sort
// arsort($result); 
// ksort($result); 
// krsort($result); 
// natsort($result); 
// natcasesort($result); 
// array_multisort($result,$result1); 
$result = array_reverse($result); // work all type of array

echo "<pre>";
print_r($result);
echo "</pre>";

// echo "<pre>";
// print_r($result1);
// echo "</pre>";


?>