<?php
require 'functions.php';
$i = $_GET['q'];

$db = parse_ini_file("../../../config/config.ini");
$user = $db['user'];
$pass = $db['pass'];
$name = $db['name'];
$host = $db['host'];
$type = $db['type'];

mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($name) or die(mysql_error());

$q = "Select * FROM master2 WHERE ID ='".$i."'";
$data = mysql_query($q);
$info = mysql_fetch_array( $data );


echo'           <div id="bottom2">
                    <div class="searchfilterdiv">
                        <h2>Card Image (Click to Zoom): </h2>
                        <div class="boxcontainer">';
							theimage($info);
echo'					</div>
					</div>
				</div>';						
						
echo'           <div id="bottom3">
                    <div class="searchfilterdiv">
                        <h2>Oracle Text:</h2>
                        <div class="boxcontainer">
							<table id="cardtable">
								<tr>
									<td class="ctleft">Name:</td>
									<td class="ctright">',thename($info),'</td>
								</tr>
								<tr>
									<td class="ctleft">Cost:</td>
									<td class="ctright">',thecost($info),'</td>
								</tr>
								<tr>
									<td class="ctleft">Type:</td>
									<td class="ctright">',thetype($info),'</td>
								</tr>
								<tr>
									<td class="ctleft">Set:</td>
									<td class="ctright"><table><tr><td>',thesetimage($info),'</td><td>',theset($info),'<br/>',therarity($info),'</td></tr></table></td>
								</tr>';
	
if($info['Ability'] != NULL)
	{
		echo  
								'<tr>
									<td class="ctleft">Abilities:</td>
									<td class="ctright"><p>',theabilities($info),'</p></td>
								</tr>';
	}	
	
if($info['Flavor'] != NULL)
	{
		echo  
								'<tr>
									<td class="ctleft">Flavor:</td>
									<td class="ctright">',theflavor($info),'</td>
								</tr>';
	}
	
if($info['P'] != NULL OR $info['T'] != NULL)
	{
		echo  
								'<tr>
									<td class="ctleft">P/T:</td>
									<td class="ctright">',thepower($info),'/',thetoughness($info),'</td>
								</tr>';
	}
	
if($info['L'] != NULL)
	{
		echo  
								'<tr>
									<td class="ctleft">Loyalty:</td>
									<td class="ctright">',theloyalty($info),'</td>
								</tr>';
	}

if($info['Artist'] != NULL)
	{
		echo  
								'<tr>
									<td class="ctleft">Artist:</td>
									<td class="ctright">',theartist($info),'</td>
								</tr>';
	}

echo '			          	</table> 
						</div>
					</div>
				</div>     
                <div id="bottom4">
                    <div class="searchfilterdiv">
                        <h2>Card Rulings:</h2>
                        <div class="boxcontainer">
							<div id="rulingsscrolldiv">';
					
if($info['Rulings'] != NULL) 
	{
		echo			therulings($info);
	}
else 
	{
		echo			'No official rulings have been made for ',thename($info),'.';
	}

echo'						</div>
						</div>
					</div>
				</div>';

?>