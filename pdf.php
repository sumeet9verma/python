<?php
include("connection.php");
session_start();
$username=$_SESSION['user'];
$train_no=$_SESSION['trainno'];
$date=$_SESSION['date'];

$sql="select * from booked where `Username`='$username' and `train no`='$train_no' and `date`='$date'";
$result=mysqli_query($conn,$sql);

$sql1="select * from signup where `Username`='$username'";
$result1=mysqli_query($conn,$sql1);

$sql2="select * from available_train where `train no`='$train_no'";
$result2=mysqli_query($conn,$sql2);

$total=mysqli_num_rows($result);

//echo $total;

require('lib/fpdf.php');


/*if($total>0)
{
	
  while($row= mysqli_fetch_assoc($result))
     {
      
         echo $row["first name"];
         echo $row["last name"];
         echo $row["mobile"];
         echo "<br>";
      
     }
}*/
/*$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
//$pdf->Cell(40,10,"name",1,0,'c');
$pdf->Image('login_after.jpeg',10,6,30);
while($row= mysqli_fetch_assoc($result))
{
	$pdf->Cell(40,10,"Name",1,0,'C');
	$pdf->Cell(40,10,$row['first name'],1,0,'C');
	$pdf->Cell(40,10,"g",1,0,'C');
}
$pdf->OutPut();*/


class PDF extends FPDF
{


// Page header
function Header()
{   $pageWidth = 190;
    $pageHeight = 270;
	$margin = 9;
    $this->Rect($margin,$margin,$pageWidth-$margin,$pageHeight-$margin);
    // Logo
   //$this->Image('login_after.jpg',65,30,100,20);
   $this->Image('img/india_logo.jpg',20,20,15,15);
   $this->Image('img/irtc.png',170,20,15,15);
   //$this->Image('content.png',20,50,60,90);

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    $this->Ln(20);
    // Move to the right
    $this->Cell(50);
    // Title

    $this->SetFont('','U');
    $this->Cell(100,1,'IRCTCs e-Ticketing Service ',0,1,'C');
    $this->SetFont('','U');$this->Cell(50);
    $this->Cell(100,12,'Electronic Reservation Slip',0,1,'C');
    $this->SetFont('','U');$this->Cell(50);
    $this->Cell(100,1,'(Personal User)',0,1,'C');
    
    // Line break
    $this->Ln(4);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
//method for removing line gap
function WordWrap(&$text, $maxwidth)
{
    $text = trim($text);
    if ($text==='')
        return 0;
    $space = $this->GetStringWidth(' ');
    $lines = explode("\n", $text);
    $text = '';
    $count = 0;

    foreach ($lines as $line)
    {
        $words = preg_split('/ +/', $line);
        $width = 0;

        foreach ($words as $word)
        {
            $wordwidth = $this->GetStringWidth($word);
            if ($wordwidth > $maxwidth)
            {
                // Word is too long, we cut it
                for($i=0; $i<strlen($word); $i++)
                {
                    $wordwidth = $this->GetStringWidth(substr($word, $i, 1));
                    if($width + $wordwidth <= $maxwidth)
                    {
                        $width += $wordwidth;
                        $text .= substr($word, $i, 1);
                    }
                    else
                    {
                        $width = $wordwidth;
                        $text = rtrim($text)."\n".substr($word, $i, 1);
                        $count++;
                    }
                }
            }
            elseif($width + $wordwidth <= $maxwidth)
            {
                $width += $wordwidth + $space;
                $text .= $word.' ';
            }
            else
            {
                $width = $wordwidth + $space;
                $text = rtrim($text)."\n".$word.' ';
                $count++;
            }
        }
        $text = rtrim($text)."\n";
        $count++;
    }
    $text = rtrim($text);
    return $count;
}



}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->ln(1);

 $pdf->Cell(20,10,"Date (yyy-mm-dd):",0,0,'L');
 $pdf->Cell(20);
 $row= mysqli_fetch_assoc($result);
  $row1=mysqli_fetch_assoc($result1);
  $row2=mysqli_fetch_assoc($result2);
 
 $pdf->Cell(40,10,$row['time'],0,0,'L');


 /*$pdf->Cell(20);
$pdf->Cell(40,10,"Name",1,0,'C');
$pdf->Cell(50,10,"puneet",1,1,'C');
 $pdf->Cell(20);
$pdf->Cell(40,10,"age",1,0,'C');
$pdf->Cell(50,10,"22",1,1,'C');*
//$pdf->Cell(20);
//$pdf->SetFont('Arial','',10);
/*$pdf->Write(15,"1. You can travel on e-ticket sent on SMS or take a Virtual Reservation Message (VRM) along with any one of the prescribed ID in original. Please do not print the ERS unless extremely necessary. This Ticket will be valid with an ID proof in original. Please carry original identity proof. If found traveling without original ID proof, passenger will be treated as without ticket and charged as per extent Railway Rules.");*/
//$pdf->Cell(50,10,"22",1,0,'C');

//$pdf->Cell(40,10,"Name",1,0,'C');
//if($total>0)
	 $pdf->Ln(20);
//{    
$pdf->Cell(19);

	// $pdf->Cell(200); 
 /* $row= mysqli_fetch_assoc($result);
  $row1=mysqli_fetch_assoc($result1);
  $row2=mysqli_fetch_assoc($result2);*/
  //$pdf->Cell(6,0,"booking date and time:",1,1,'C');
  //$pdf->Ln(20);

         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Username:",0,0,'L');

         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row['Username'],0,1,'L');
         $pdf->Cell(19);

         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Name:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row1['Name'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Gender:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row1['Gender'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Mobile number:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row1['Phone Number'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Email:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row1['email'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Adhaar number:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row1['Adhar number'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"City:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row1['City'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Train number:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row2['train no'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Train Name:",0,0,'L');
          $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row2['train name'],0,1,'L');
          $pdf->Cell(19);
          $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Class:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row['class'],0,1,'L');
         $pdf->Cell(19);
         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Source:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row2['source'],0,1,'L');
         $pdf->Cell(19);
         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Destination:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row2['destination'],0,1,'L');
         $pdf->Cell(19);
         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Passenger:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$row['passengers'],0,1,'L');
         $pdf->Cell(19);
         $pdf->SetFont('Arial','B',12);
         $pdf->Cell(65,10,"Date of journey:",0,0,'L');
         $pdf->SetFont('Arial','I',12);
         $pdf->Cell(65,10,$date,0,1,'L');
         $pdf->SetFont('Arial','BU',15);

        
         $pdf->ln(2);
          $pdf->Cell(20);
         $pdf->Cell(65,10,"Total Cost in Rs:",0,0,'L');
         
         $pdf->Cell(65,10, $row['cost'],0,1,'L');

$pdf->ln(1);
 
/*$pdf->Write(50," I Valid IDs to be presented during train journey by one of the passenger booked on an e-ticket :- Voter Identity Card / Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Public Sector Undertakings of State / Central Government ,District Administrations , Municipal bodies and Panchayat Administrations");*//* which are having serial number / Student Identity Card with photograph issued by recognized School or College for their students / Nationalized Bank Passbook with photograph /Credit Cards issued by Banks with laminated photograph/Unique Identification Card Adhaar card, m-Aadhaar, e-Aadhaar. /Passenger showing the Aadhaar/Driving Licence from the Issued Document section by logging into his/her DigiLocker account considered as valid proof of identity. (Documents uploaded by the user i.e. the document in Uploaded Document section will not be considered as a valid proof of identity).");

*/
$pdf->ln(10);
$text=str_repeat('I Valid IDs to be presented during train journey by one of the passenger booked on an e-ticket :- Voter Identity Card/Passport/PAN Card/Driving License/Photo ID card issued by Central/State Govt/Public Sector Undertakings of State/Central Government ,District Administrations, Municipal bodies and Panchayat Administrations")which are having serial number/Student Identity Card with photograph issued by recognized School or College for their students/Nationalized Bank Passbook with photograph/Credit Cards issued by Banks with laminated photograph/Unique Identification Card Adhaar card,m-Aadhaar,e-Aadhaar. ',1);
$nb=$pdf->WordWrap($text,342);
$pdf->SetFont('Arial','B',12);
$pdf->Write(3,"IMPORTANT INSTRUCTIONS:\n\n");
$pdf->SetFont('Arial','B',8);

$pdf->Write(5,$text);


         
        /* $pdf->Cell(21);
         $pdf->Cell(65,10,"Name",1,0,'C');
         $pdf->Cell(65,10,$row['last name'],1,0,'C');*/

$pdf->Output();


?>