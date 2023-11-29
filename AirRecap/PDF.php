
<?php
require('fpdf/fpdf.php');
 

class PDF extends FPDF
{
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';

function WriteHTML($html)
{
    // HTML parser
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Tag
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extract attributes
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    // Opening tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    // Closing tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modify style and select corresponding font
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}
}

$html = '
<body id="tinymce" class="mce-content-body ">
<h1 style="color: #4485b8;">South Cal Daily Hub Sort Recap</h1>
<h4></h4>
<table class="editorDemoTable" border="1" style="vertical-align: top; width: 64.681%;" width="100%" height="4247">
<tbody>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Date:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><input id="date" name="date" type="text" /></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Sort Name:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);">
<option value disabled selected>Select Operation</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["SlicSort"]; ?>"><?php echo $country["Slic_Sort"]; ?></option>
<?php
}
?>
</select></strong></span></td>
</tr>
<tr style="height: 31px;">
<td style="width: 249.889%; height: 31px;" colspan="1"><span style="color: #000000;"><strong>Manager Name:</strong></span></td>
<td style="width: 249.889%; height: 31px;" colspan="1"><span ><strong><select name="state" id="state-list" class="demoInputBox">
<option value="">Select Manager</option>
</select></strong></span></td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px;" colspan="5"><span style="color: #ffffff;"><strong>OPERATIONAL NOTES:</strong></span></td>
</tr>
<tr style="height: 88px;">
<td colspan="5" style="height: 88px; width: 249.889%;"><strong><span ><textarea cols="100" name="Notes" rows="10"> 
</textarea></span></strong></td>
</tr>
<tr style="height: 23px; background-color: #3f77a1;">
<td style="height: 23px; width: 78.2116%;" colspan="2"><strong><span style="color: #ffffff;">PEOPLE:</span></strong></td>
<td style="height: 23px; width: 21.0496%;"><strong><span style="color: #ffffff;">Plan:</span></strong></td>
<td style="height: 23px; width: 18.3131%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 23px; width: 132.315%;"><strong><span style="color: #ffffff;">Explanation:</span></strong></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># of Injuries:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="inplan" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="inact" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="inex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">New Hire Turnover:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="HOPL" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="NHAC" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="NHExp" rows="4"> 
</textarea></td>
</tr>
<tr style="background-color: #3e759e; height: 23px;">
<td style="height: 21px; width: 78.2116%;" colspan="2"><span style="color: #ffffff;"><strong>SERVICE:</strong></span></td>
<td style="height: 21px; width: 21.0496%;"><span style="color: #ffffff;"><strong>Plan:</strong></span></td>
<td style="height: 21px; width: 18.3131%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 21px; width: 132.315%;"><span style="color: #ffffff;"><strong>Explanation:</strong></span></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># LIBs Scanned:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="libpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="libac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="libex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># Missed Origin Scanned:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="mopl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="moac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="moex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># E3 LIB:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="e3pl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="e3ac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="e3ex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hold Over Loads:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hopl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hoac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hoex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hold Over Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hovpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hovac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hovex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inbound Loads Not Processed:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ilnppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ilnopac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ilnpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inbound Volume Not Processed:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ivnppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ivnpac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ivnpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Non-Commit Loads:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="nclpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="nclac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="nclex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Non-Commit Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ncvpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ncvac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ncvex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;"># LIB due to Breakdown:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="brakpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="brakac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="brakex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">SEAS Total LIB Frequency:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="slfpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="slfac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="slfex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Misload Frequency:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="missloadpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="missloadac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="missloadex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Departure Scan Frequency:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="dspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="dsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="dsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">% Smalls Bagged:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="sbpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="sbac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="sbex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Dmg/Ovrgd/Plfg Frequency:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="dmgpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="dmgac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="dmgex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">On-Time Departure %:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="otdpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="otdac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="otdex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Total Mispicks:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="tmpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tmac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tmex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Mispicks Not Rescanned:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="mnrpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="mnrac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="mnrex" rows="4"> 
</textarea></td>
</tr>
<tr style="background-color: #3e759e; height: 23px;">
<td style="height: 21px; width: 78.2116%;" colspan="2"><span style="color: #ffffff;"><strong>PERFORMANCE:</strong></span></td>
<td style="height: 21px; width: 21.0496%;"><span style="color: #ffffff;"><strong>Plan:</strong></span></td>
<td style="height: 21px; width: 18.3131%;"><span style="color: #ffffff;"><strong>Actual:</strong></span></td>
<td style="height: 21px; width: 132.315%;"><span style="color: #ffffff;"><strong>Explanation:</strong></span></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Sorted Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="svpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="svac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="svex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Irreg Volume:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ivpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ivac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ivex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Smalls Volume:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="svpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="svac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="svex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Hub PPH:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="hppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="hpac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="hpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Total Hours:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="thpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="thac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="thex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Breakdown Hours Impact:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="bhpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="bhac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="bhex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">MSD % Effective:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="msdpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="msdac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="msdex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Unload Start Time:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="wstpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ustac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ustex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Unload Down Time:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="udtpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="udtac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="udtex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Sort Span:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="sspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ssac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ssex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Flow per Hour:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="fphpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="fphac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="fphex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Staffing Worked:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="swpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="swac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="swex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Paid Day:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="pdpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="pdac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="pdex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Process Rate:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="prpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="prac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="prex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Trailers Processed:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="tppl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tpac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tpex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Late loads after 8pm / 1:30am:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="llapl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="llaac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="llaex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Target Load Cuts:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="tlcpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="tlcac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="tlcex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Belt Stops:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="bspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="bsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="bsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;"></td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Bags Left for Next Sort:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="blfnspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="blfnsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="blfnsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">EDS % Effective:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="edspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="edsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="edsex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">Inside Overtime Hours:</strong></span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="iohpl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="iohac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="iohex" rows="4"> 
</textarea></td>
</tr>
<tr style="height: 86px;">
<td style="min-width: 140px; height: 86px; width: 35.1739%;">BSC Impact Element:</td>
<td style="height: 86px; width: 43.0377%;"><span style="color: #0000ff;">PTRS Overtime Hours:</span></td>
<td style="height: 86px; width: 21.0496%;"><center><input name="ptrspl" size="4" type="text" /></center></td>
<td style="height: 86px; width: 18.3131%;"><center><input name="ptrsac" size="4" type="text" /></center></td>
<td style="width: 132.315%; height: 86px;"><textarea cols="70" name="ptrsex" rows="4"> 
</textarea></td>
</tr>
</tbody>
<tbody></tbody>
</table>








';

$pdf = new PDF();
// First page

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//$pdf->Image('logo.png',10,12,30,0,'','http://www.fpdf.org');

$pdf->WriteHTML($html);
$pdf->Output();
?>