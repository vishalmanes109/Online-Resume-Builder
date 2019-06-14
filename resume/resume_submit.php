<?php
//require('fpdf/fpdf.php');
require_once('tcpdf/tcpdf.php');


$name=strtoupper($_POST['uname']);
$address=ucwords($_POST['add']);
$email=$_POST['email'];
$contact=$_POST['contact'];
$objective=$_POST['obj'];
$hsc=$_POST['hsc'];
$ssc=$_POST['ssc'];
$select=$_POST['select'];
$other=$_POST['other'];
$BE=$_POST['BE'];
$sscboard=ucwords($_POST['sscboard']);
$sscpassing=$_POST['sscpassing'];
$hscboard=ucwords($_POST['hscboard']);
$hscpassing=$_POST['hscpassing'];
$university=ucwords($_POST['university']);
$BEpassing=$_POST['BEpassing'];
$cert1=ucwords($_POST['cert1']);
$cert2=ucwords($_POST['cert2']);
$cert3=ucwords($_POST['cert3']);
$cert4=ucwords($_POST['cert4']);
$cert5=ucwords($_POST['cert5']);
$proj1=$_POST['proj1'];
$proj2=$_POST['proj2'];
$proj3=$_POST['proj3'];
$proj4=$_POST['proj4'];
$proj_stat1=$_POST['proj_stat1'];
$proj_stat2=$_POST['proj_stat2'];
$proj_stat3=$_POST['proj_stat3'];
$proj_stat4=$_POST['proj_stat4'];
$tech1=$_POST['tech1'];
$tech2=$_POST['tech2'];
$tech3=$_POST['tech3'];
$tech4=$_POST['tech4'];
$int1=$_POST['int1'];
$int2=$_POST['int2'];
$int3=$_POST['int3'];
$int4=$_POST['int4'];
$exp1=$_POST['exp1'];
$exp2=$_POST['exp2'];
$exp3=$_POST['exp3'];
$exp_des1=$_POST['exp_des1'];    
$exp_des2=$_POST['exp_des2'];    
$exp_des3=$_POST['exp_des3'];    
$exp_start1=$_POST['exp_start1'];    
$exp_start2=$_POST['exp_start2'];    
$exp_start3=$_POST['exp_start3'];    
$exp_end1=$_POST['exp_end1'];    
$exp_end2=$_POST['exp_end2'];    
$exp_end3=$_POST['exp_end3'];    
$ach1=$_POST['ach1'];    
$ach2=$_POST['ach2'];    


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Online Resume Builder');
$pdf->SetTitle('');
$pdf->SetSubject('Resume');
$pdf->SetKeywords('TCPDF, online, Resume');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 18);

// add a page
$pdf->AddPage();

// set some text to print


// print a block of text using Write()
// contact details:
$pdf->Write(0, $name, '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', '', 14);
$pdf->Write(0, $address, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, $email, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, $contact, '', 0, 'L', true, 0, false, false, 0);


// objective:
$pdf->ln(15);
$obj ='Objective:';


$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $obj, '', 0, 'L', true, 0, false, false, 0);
$pdf->SetFont('times', '', 14);
$pdf->Write(0, $objective, '', 0, 'L', true, 0, false, false, 0);


// Education Qualification
$edu = <<<EOD
Education:
EOD;
$pdf->ln(10);
$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $edu, '', 0, 'L', true, 0, false, false, 0);


$tbl = <<<EOD
<table border="1" cellpadding="2"  nobr="true">
    <thead>
      <tr>
        <th>Degree/Course</th>
        <th>Board/University</th>
        <th>Year of passing</th>
        <th>Percentage/CGPA</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>BE</td>
        <td>$university</td>
        <td>$BEpassing</td>
        <td>$BE</td>
      </tr>
      <tr>
      <td>HSC/Diploma </td>
        <td>$hscboard</td>
        <td>$hscpassing</td>
        <td>$hsc</td>
      </tr>
      <tr>
        <td>SSC Equivalent </td>
        <td>$sscboard</td>
        <td>$sscpassing</td>
        <td>$ssc</td>
      </tr>
    </tbody>
  </table>
EOD;
$pdf->SetFont('times', '', 14);
$pdf->ln(2);
$pdf->writeHTML($tbl, true, false, false, false, '');
// ---------------------------------------------------------

// Experience if ANY
if(isset($_POST['exp1']) && $_POST['exp1']!= NULL ){
 
    $exp = <<<EOD
Experience:
EOD;
$pdf->ln(5);
$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $exp, '', 0, 'L', true, 0, false, false, 0);

    
$pdf->SetFont('times', '', 14);
    
$pdf->Write(0,"Organization: ".$exp1, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0,"Description: ".$exp_des1, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, "Start Date: ".$exp_start1."  "."End Date: ".$exp_end1, '', 0, 'L', true, 0, false, false, 0);
    $pdf->ln(5);

        if(isset($_POST['exp2']) && $_POST['exp2']!= NULL ){
            $pdf->Write(0, "Organization: ".$exp2, '', 0, 'L', true, 0, false, false, 0);
            $pdf->Write(0,"Description: ".$exp_des2, '', 0, 'L', true, 0, false, false, 0);
            $pdf->Write(0, "Start Date: ".$exp_start2."  "."End Date: ".$exp_end2, '', 0, 'L', true, 0, false, false, 0);
            $pdf->ln(5);

        }
    
        if(isset($_POST['exp3']) && $_POST['exp3']!= NULL ){
            $pdf->Write(0, "Organization: ".$exp3, '', 0, 'L', true, 0, false, false, 0);
            $pdf->Write(0,"Description: ".$exp_des3, '', 0, 'L', true, 0, false, false, 0);
            $pdf->Write(0, "Start Date: ".$exp_start3."  "."End Date: ".$exp_end3, '', 0, 'L', true, 0, false, false, 0);
            $pdf->ln(5);

}
    
}





// Certificates
$cert = <<<EOD
Certifications:
EOD;
$pdf->ln(5);
$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $cert, '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', '', 14);
$pdf->Write(0, $cert1, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, $cert2, '', 0, 'L', true, 0, false, false, 0);

if(isset($_POST['cert3']) && $_POST['cert3']!= NULL ){
$pdf->Write(0, $cert3, '', 0, 'L', true, 0, false, false, 0);
}

if(isset($_POST['cert4']) && $_POST['cert4']!= NULL ){
$pdf->Write(0, $cert4, '', 0, 'L', true, 0, false, false, 0);
}
if(isset($_POST['cert5']) && $_POST['cert5']!= NULL ){
$pdf->Write(0, $cert5, '', 0, 'L', true, 0, false, false, 0);
}




// Projects
$proj = <<<EOD
Projects:
EOD;
$pdf->ln(10);
$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $proj, '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', '', 14);
$pdf->Write(0, "Title: ".$proj1, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, "Description: ".$proj_stat1, '', 0, 'L', true, 0, false, false, 0);
$pdf->ln(4);

if(isset($_POST['proj2']) && $_POST['proj2']!= NULL ){
$pdf->Write(0, "Title: ".$proj2, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, "Description: ".$proj_stat2, '', 0, 'L', true, 0, false, false, 0);
}
    
if(isset($_POST['proj3'])&& $_POST['proj3']!= NULL ){
$pdf->Write(0, "Title: ".$proj3, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, "Description: ".$proj_stat3, '', 0, 'L', true, 0, false, false, 0);
}
if(isset($_POST['proj4'])&& $_POST['proj4']!= NULL ){
$pdf->Write(0, "Title: ".$proj4, '', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0, "Description: ".$proj_stat4, '', 0, 'L', true, 0, false, false, 0);
}

// Achievement
if(isset($_POST['ach1']) && $_POST['ach1']!= NULL ){

$ach = <<<EOD
Academic Achievement:
EOD;
$pdf->ln(5);
$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $ach, '', 0, 'L', true, 0, false, false, 0);

    $pdf->Write(0, $ach1, '', 0, 'L', true, 0, false, false, 0);


if(isset($_POST['ach2']) && $_POST['ach2']!= NULL ){
$pdf->Write(0, $ach2, '', 0, 'L', true, 0, false, false, 0);
}
    
}
// Technical Skills;
$tech = <<<EOD
Technical Skills:
EOD;
$pdf->ln(10);
$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $tech, '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', '', 14);
$pdf->Write(0, $tech1, '', 0, 'L', true, 0, false, false, 0);

$pdf->Write(0, $tech2, '', 0, 'L', true, 0, false, false, 0);

if(isset($_POST['tech3'])&& $_POST['tech3']!= NULL ){
$pdf->Write(0, $tech3, '', 0, 'L', true, 0, false, false, 0);
}
if(isset($_POST['tech4'])&& $_POST['tech4']!= NULL ){
$pdf->Write(0, $tech4, '', 0, 'L', true, 0, false, false, 0);
}


// Personal Interest
$int = <<<EOD
Personal Interest:
EOD;
$pdf->ln(10);
$pdf->SetFont('times', 'B', 16);
$pdf->Write(0, $int, '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('times', '', 14);
$pdf->Write(0, $int1, '', 0, 'L', true, 0, false, false, 0);

$pdf->Write(0, $int2, '', 0, 'L', true, 0, false, false, 0);

if(isset($_POST['int3'])&& $_POST['int3']!= NULL ){
$pdf->Write(0, $int3, '', 0, 'L', true, 0, false, false, 0);
}

if(isset($_POST['int4'])&& $_POST['int4']!= NULL ){
$pdf->Write(0, $int4, '', 0, 'L', true, 0, false, false, 0);
}


//Close and output PDF document
$pdf->Output('resume.pdf', 'I');

?>