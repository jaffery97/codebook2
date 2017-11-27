<html>
<head>

<style>


.dee {
font-size: 14px;
color: white;
    padding: 22px;
    border: 3px solid white;
    width: 55%;
    margin-left: 18%;
}

</style>
</head>
<body>
<div class="dee">
<?php
// Array with names
$a[] = "MH Jafory <br>  WEB Development<br> Certified Adobe Dreamviwer";
$a[] = "Romman Ahmed <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Cinderella <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Diana <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Eva <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Fiona <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Gunda <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Hege <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Inga <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Johanna <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Kitty <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Linda <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Nina <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Ophelia <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Petunia <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Amanda <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Raquel <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Cindy <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Doris <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Eve <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Evita <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Sunniva <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Tove <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Unni <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Violet <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Liza <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Elizabeth <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Ellen <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Wenche <br> Code Inspector <br> Certified Kids Code School";
$a[] = "Vicky <br> Code Inspector <br> Certified Kids Code School";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
</div>
</body>
</html>