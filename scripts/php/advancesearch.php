<?php	
require 'functions.php';

//========================================================================================<Generates $nameq Syntax Based On Match Filter>
					if (!isset($_GET['namefield'])) {$nameq = "";}
					if (isset($_GET['namefield']) && $_GET['namematch'] == 0)  {$nameq = "(Name LIKE '%".$_GET['namefield']."%') AND ";}
				
//========================================================================================</Generates $colorq Syntax Based On Match Filter>

//========================================================================================<Stores Seleced Colors Into Array $colorarray>
					if (isset($_GET['colorany'])) {$colorarray[] = "Color LIKE '%%'";}
					if (isset($_GET['color0'])) {$colorarray[] = "Color LIKE '%W%'";}
					if (isset($_GET['color1'])) {$colorarray[] = "Color LIKE '%U%'";}
					if (isset($_GET['color2'])) {$colorarray[] = "Color LIKE '%B%'";}
					if (isset($_GET['color3'])) {$colorarray[] = "Color LIKE '%R%'";}
					if (isset($_GET['color4'])) {$colorarray[] = "Color LIKE '%G%'";}
//========================================================================================</Stores Seleced Colors Into Array $colorarray>

//========================================================================================<Stores Unselected Colors Into Array $notcolorarray>
					if (!isset($_GET['color0'])) {$notcolorarray[] = "Color NOT LIKE '%W%'";}
					if (!isset($_GET['color1'])) {$notcolorarray[] = "Color NOT LIKE '%U%'";}
					if (!isset($_GET['color2'])) {$notcolorarray[] = "Color NOT LIKE '%B%'";}
					if (!isset($_GET['color3'])) {$notcolorarray[] = "Color NOT LIKE '%R%'";}
					if (!isset($_GET['color4'])) {$notcolorarray[] = "Color NOT LIKE '%G%'";}
//========================================================================================</Stores Unseleced Colors Into Array $notcolorarray>

//========================================================================================<Generates $colorq Syntax Based On Match Filter>
					if ($_GET['colormatch'] == 0) {$colorq = "(".implode(" OR ",$colorarray).")";}

					if ($_GET['colormatch'] == 1) {$colorq = "(".implode(" OR ",$colorarray).") AND (".implode(" AND ",$notcolorarray).")";}

					if ($_GET['colormatch'] == 1 && $_GET['color0']==1 && $_GET['color1']==1 && $_GET['color2']==1 && $_GET['color3']==1 && $_GET['color4']==1)
						{$colorq = "(".implode(" OR ",$colorarray).")";}

					if ($_GET['colormatch'] == 2) {$colorq = "(".implode(" AND ",$colorarray).")";}

					if ($_GET['colormatch'] == 3) {$colorq = "(".implode(" AND ",$colorarray).") AND (".implode(" AND ",$notcolorarray).")";}
						
					if ($_GET['colormatch'] == 3 && $_GET['color0']==1 && $_GET['color1']==1 && $_GET['color2']==1 && $_GET['color3']==1 && $_GET['color4']==1)
						{$colorq = "(".implode(" AND ",$colorarray).")";}
						
//========================================================================================</Generates $colorq Syntax Based On Match Filter>

//========================================================================================<Stores Seleced Types Into Array $typearray>
					if (isset($_GET['typeany'])) {$typearray[] = "Type LIKE '%%'";}
					if (isset($_GET['type0'])) {$typearray[] = "Type LIKE '%Artifact%'";}
					if (isset($_GET['type1'])) {$typearray[] = "Type LIKE '%Basic%'";}
					if (isset($_GET['type2'])) {$typearray[] = "Type LIKE '%Creature%'";}
					if (isset($_GET['type3'])) {$typearray[] = "Type LIKE '%Enchantment%'";}
					if (isset($_GET['type4'])) {$typearray[] = "Type LIKE '%Instant%'";}
					if (isset($_GET['type5'])) {$typearray[] = "Type LIKE '%Land%'";}
					if (isset($_GET['type6'])) {$typearray[] = "Type LIKE '%Legendary%'";}
					if (isset($_GET['type7'])) {$typearray[] = "Type LIKE '%Planeswalker%'";}
					if (isset($_GET['type8'])) {$typearray[] = "Type LIKE '%Snow%'";}
					if (isset($_GET['type9'])) {$typearray[] = "Type LIKE '%Sorcery%'";}
					if (isset($_GET['type10'])) {$typearray[] = "Type LIKE '%Tribal%'";}

//========================================================================================</Stores Seleced Types Into Array $typearray>

//========================================================================================<Stores Unselected Types Into Array $nottypearray>
					if (!isset($_GET['type0'])) {$nottypearray[] = "Type NOT LIKE '%Artifact%'";}
					if (!isset($_GET['type1'])) {$nottypearray[] = "Type NOT LIKE '%Basic%'";}
					if (!isset($_GET['type2'])) {$nottypearray[] = "Type NOT LIKE '%Creature%'";}
					if (!isset($_GET['type3'])) {$nottypearray[] = "Type NOT LIKE '%Enchantment%'";}
					if (!isset($_GET['type4'])) {$nottypearray[] = "Type NOT LIKE '%Instant%'";}
					if (!isset($_GET['type5'])) {$nottypearray[] = "Type NOT LIKE '%Land%'";}
					if (!isset($_GET['type6'])) {$nottypearray[] = "Type NOT LIKE '%Legendary%'";}
					if (!isset($_GET['type7'])) {$nottypearray[] = "Type NOT LIKE '%Planeswalker%'";}
					if (!isset($_GET['type8'])) {$nottypearray[] = "Type NOT LIKE '%Snow%'";}
					if (!isset($_GET['type9'])) {$nottypearray[] = "Type NOT LIKE '%Sorcery%'";}
					if (!isset($_GET['type10'])) {$nottypearray[] = "Type NOT LIKE '%Tribal%'";}
//========================================================================================</Stores Unseleced Types Into Array $nottypearray>

//========================================================================================<Generates $typeq Syntax Based On Match Filter>
					if ($_GET['typematch'] == 0) {$typeq = "(".implode(" OR ",$typearray).")";}

					if ($_GET['typematch'] == 1) {$typeq = "(".implode(" OR ",$typearray).") AND (".implode(" AND ",$nottypearray).")";}
						
					if ($_GET['typematch'] == 1 && $_GET['type0']==1 && $_GET['type1']==1 && $_GET['type2']==1 && $_GET['type3']==1 && $_GET['type4']==1 && $_GET['type5']==1 && $_GET['type6']==1 && $_GET['type7']==1 && $_GET['type8']==1 && $_GET['type9']==1 && $_GET['type10']==1 )
						{$typeq = "(".implode(" OR ",$typearray).")";}
		
					if ($_GET['typematch'] == 2) {$typeq = "(".implode(" AND ",$typearray).")";}

					if ($_GET['typematch'] == 3) {$typeq = "(".implode(" AND ",$typearray).") AND (".implode(" AND ",$nottypearray).")";}
						
					if ($_GET['typematch'] == 3 && $_GET['type0']==1 && $_GET['type1']==1 && $_GET['type2']==1 && $_GET['type3']==1 && $_GET['type4']==1 && $_GET['type5']==1 && $_GET['type6']==1 && $_GET['type7']==1 && $_GET['type8']==1 && $_GET['type9']==1 && $_GET['type10']==1 )
						{$typeq = "(".implode(" AND ",$typearray).")";}
						
//========================================================================================</Generates $typeq Syntax Based On Match Filter>


//========================================================================================<Generates $rarityq Syntax Based On Match Filter>
					if (isset($_GET['rarityany'])) {$rarityarray[] = "Rarity LIKE '%%'";}
					if (isset($_GET['rarity0'])) {$rarityarray[] = "Rarity LIKE '%C%'";}
					if (isset($_GET['rarity1'])) {$rarityarray[] = "Rarity LIKE '%U%'";}
					if (isset($_GET['rarity2'])) {$rarityarray[] = "Rarity LIKE '%R%'";}
					if (isset($_GET['rarity3'])) {$rarityarray[] = "Rarity LIKE '%M%'";}

					$rarityq = "(".implode(" OR ",$rarityarray).")";
//========================================================================================</Generates $rariyq Syntax Based On Match Filter>


//========================================================================================<Generates $cmcq Syntax Based On Match Filter>
					if ($_GET['cmcx'] == 0) {$cmcx = "";}
					if ($_GET['cmcx'] == 1) {$cmcx = " AND Cost LIKE '%X%'";}
					if ($_GET['cmcx'] == 2) {$cmcx = " AND Cost NOT LIKE '%X%'";}
					
					if (isset($_GET['cmccont'])) 
						{
							$cmcq = "(CMC >= ".$_GET['cmcmin']." AND CMC <= ".$_GET['cmcmax']." AND Cost LIKE '%".$_GET['cmccont']."%'".$cmcx.")";
						}
					if (!isset($_GET['cmccont'])) 
						{	
							$cmcq = "(CMC >= ".$_GET['cmcmin']." AND CMC <= ".$_GET['cmcmax'].$cmcx.")";
						}						
						
//========================================================================================</Generates $cmcq Syntax Based On Match Filter>

//========================================================================================<Generates $sortbyq Syntax Based On Match Filter>
					if ($_GET['sortby'] == 0) {$sortby1 = " ORDER BY Name";}
					if ($_GET['sortby'] == 1) {$sortby1 = " ORDER BY CMC";}
					if ($_GET['sortby'] == 2) {$sortby1 = " ORDER BY P";}
					if ($_GET['sortby'] == 3) {$sortby1 = " ORDER BY T";}
					if ($_GET['sortbydir'] == 0) {$sortby2 = " ASC";}
					if ($_GET['sortbydir'] == 1) {$sortby2 = " DESC";}
					$sortbyq = $sortby1.$sortby2;
					
//========================================================================================</Generates $sortbyq Syntax Based On Match Filter>


//========================================================================================<Stores Seleced sets Into Array $setarray>
					if (isset($_GET['setany'])) {$setarray[] = "`Set` LIKE '%%'";}
					if (isset($_GET['set0'])) {$setarray[] = "`Set` = 'CH'";}
					if (isset($_GET['set1'])) {$setarray[] = "`Set` = 'PT'";}  
					if (isset($_GET['set2'])) {$setarray[] = "`Set` = 'P2'";}  
					if (isset($_GET['set3'])) {$setarray[] = "`Set` = 'P3'";}
					if (isset($_GET['set4'])) {$setarray[] = "`Set` = 'UG'";}
					if (isset($_GET['set5'])) {$setarray[] = "`Set` = 'UNH'";}
					if (isset($_GET['set6'])) {$setarray[] = "`Set` = 'ST'";}
					if (isset($_GET['set7'])) {$setarray[] = "`Set` = 'S2'";}
					if (isset($_GET['set8'])) {$setarray[] = "`Set` = 'BR'";}
					if (isset($_GET['set9'])) {$setarray[] = "`Set` = 'BD'";}
					if (isset($_GET['set10'])) {$setarray[] = "`Set` = 'ARC'";}
					if (isset($_GET['set11'])) {$setarray[] = "`Set` = 'CMD'";}
					if (isset($_GET['set12'])) {$setarray[] = "`Set` = 'DRG'";}
					if (isset($_GET['set13'])) {$setarray[] = "`Set` = 'EXL'";}
					if (isset($_GET['set14'])) {$setarray[] = "`Set` = 'RLC'";}
					if (isset($_GET['set15'])) {$setarray[] = "`Set` = 'LEG'";}
					if (isset($_GET['set16'])) {$setarray[] = "`Set` = 'EVG'";}
					if (isset($_GET['set17'])) {$setarray[] = "`Set` = 'JVC'";}
					if (isset($_GET['set18'])) {$setarray[] = "`Set` = 'DVD'";}
					if (isset($_GET['set19'])) {$setarray[] = "`Set` = 'GVL'";}
					if (isset($_GET['set20'])) {$setarray[] = "`Set` = 'PVC'";}
					if (isset($_GET['set21'])) {$setarray[] = "`Set` = 'EVT'";}
					if (isset($_GET['set22'])) {$setarray[] = "`Set` = 'KVD'";}
					if (isset($_GET['set23'])) {$setarray[] = "`Set` = 'AVB'";}
					if (isset($_GET['set24'])) {$setarray[] = "`Set` = 'VVK'";}
					if (isset($_GET['set25'])) {$setarray[] = "`Set` = 'SLI'";}
					if (isset($_GET['set26'])) {$setarray[] = "`Set` = 'FAL'";}
					if (isset($_GET['set27'])) {$setarray[] = "`Set` = 'GRV'";}
					if (isset($_GET['set28'])) {$setarray[] = "`Set` = 'PCH'";}
					if (isset($_GET['set29'])) {$setarray[] = "`Set` = 'PC2'";}
					if (isset($_GET['set30'])) {$setarray[] = "`Set` = 'A'";}
					if (isset($_GET['set31'])) {$setarray[] = "`Set` = 'B'";}
					if (isset($_GET['set32'])) {$setarray[] = "`Set` = 'U'";}
					if (isset($_GET['set33'])) {$setarray[] = "`Set` = 'AN'";}
					if (isset($_GET['set34'])) {$setarray[] = "`Set` = 'AQ'";}
					if (isset($_GET['set35'])) {$setarray[] = "`Set` = 'LG'";}
					if (isset($_GET['set36'])) {$setarray[] = "`Set` = 'R'";}
					if (isset($_GET['set37'])) {$setarray[] = "`Set` = 'DK'";}
					if (isset($_GET['set38'])) {$setarray[] = "`Set` = 'FE'";}
					if (isset($_GET['set39'])) {$setarray[] = "`Set` = '4E'";}
					if (isset($_GET['set40'])) {$setarray[] = "`Set` = 'IA'";}
					if (isset($_GET['set41'])) {$setarray[] = "`Set` = 'HL'";}
					if (isset($_GET['set42'])) {$setarray[] = "`Set` = 'AL'";}
					if (isset($_GET['set43'])) {$setarray[] = "`Set` = 'MI'";}
					if (isset($_GET['set44'])) {$setarray[] = "`Set` = 'VI'";}
					if (isset($_GET['set45'])) {$setarray[] = "`Set` = 'WL'";}
					if (isset($_GET['set46'])) {$setarray[] = "`Set` = '5E'";}
					if (isset($_GET['set47'])) {$setarray[] = "`Set` = 'TE'";}
					if (isset($_GET['set48'])) {$setarray[] = "`Set` = 'SH'";}
					if (isset($_GET['set49'])) {$setarray[] = "`Set` = 'EX'";}
					if (isset($_GET['set50'])) {$setarray[] = "`Set` = 'US'";}
					if (isset($_GET['set51'])) {$setarray[] = "`Set` = 'UL'";}
					if (isset($_GET['set52'])) {$setarray[] = "`Set` = 'UD'";}
					if (isset($_GET['set53'])) {$setarray[] = "`Set` = '6E'";}
					if (isset($_GET['set54'])) {$setarray[] = "`Set` = 'MM'";}
					if (isset($_GET['set55'])) {$setarray[] = "`Set` = 'NE'";}
					if (isset($_GET['set56'])) {$setarray[] = "`Set` = 'PY'";}
					if (isset($_GET['set57'])) {$setarray[] = "`Set` = 'IN'";}
					if (isset($_GET['set58'])) {$setarray[] = "`Set` = 'PS'";}
					if (isset($_GET['set59'])) {$setarray[] = "`Set` = 'AP'";}
					if (isset($_GET['set60'])) {$setarray[] = "`Set` = '7E'";}
					if (isset($_GET['set61'])) {$setarray[] = "`Set` = 'OD'";}
					if (isset($_GET['set62'])) {$setarray[] = "`Set` = 'TO'";}
					if (isset($_GET['set63'])) {$setarray[] = "`Set` = 'JU'";}
					if (isset($_GET['set64'])) {$setarray[] = "`Set` = 'ON'";}
					if (isset($_GET['set65'])) {$setarray[] = "`Set` = 'LE'";}
					if (isset($_GET['set66'])) {$setarray[] = "`Set` = 'SC'";}
					if (isset($_GET['set67'])) {$setarray[] = "`Set` = '8E'";}
					if (isset($_GET['set68'])) {$setarray[] = "`Set` = 'MR'";}
					if (isset($_GET['set69'])) {$setarray[] = "`Set` = 'DS'";}
					if (isset($_GET['set70'])) {$setarray[] = "`Set` = 'FD'";}
					if (isset($_GET['set71'])) {$setarray[] = "`Set` = 'CHK'";}
					if (isset($_GET['set72'])) {$setarray[] = "`Set` = 'BOK'";}
					if (isset($_GET['set73'])) {$setarray[] = "`Set` = 'SOK'";}
					if (isset($_GET['set74'])) {$setarray[] = "`Set` = '9E'";}
					if (isset($_GET['set75'])) {$setarray[] = "`Set` = 'RAV'";}
					if (isset($_GET['set76'])) {$setarray[] = "`Set` = 'GP'";}
					if (isset($_GET['set77'])) {$setarray[] = "`Set` = 'DIS'";}
					if (isset($_GET['set78'])) {$setarray[] = "`Set` = 'CS'";}
					if (isset($_GET['set79'])) {$setarray[] = "`Set` = 'TSP'";}
					if (isset($_GET['set80'])) {$setarray[] = "`Set` = 'TSB'";}
					if (isset($_GET['set81'])) {$setarray[] = "`Set` = 'PLC'";}
					if (isset($_GET['set82'])) {$setarray[] = "`Set` = 'FUT'";}
					if (isset($_GET['set83'])) {$setarray[] = "`Set` = '10E'";}
					if (isset($_GET['set84'])) {$setarray[] = "`Set` = 'LRW'";}
					if (isset($_GET['set85'])) {$setarray[] = "`Set` = 'MOR'";}
					if (isset($_GET['set86'])) {$setarray[] = "`Set` = 'SHM'";}
					if (isset($_GET['set87'])) {$setarray[] = "`Set` = 'EVE'";}
					if (isset($_GET['set88'])) {$setarray[] = "`Set` = 'ALA'";}
					if (isset($_GET['set89'])) {$setarray[] = "`Set` = 'CFX'";}
					if (isset($_GET['set90'])) {$setarray[] = "`Set` = 'ARB'";}
					if (isset($_GET['set91'])) {$setarray[] = "`Set` = 'M10'";}
					if (isset($_GET['set92'])) {$setarray[] = "`Set` = 'ZEN'";}
					if (isset($_GET['set93'])) {$setarray[] = "`Set` = 'WWK'";}
					if (isset($_GET['set94'])) {$setarray[] = "`Set` = 'ROE'";}
					if (isset($_GET['set95'])) {$setarray[] = "`Set` = 'M11'";}
					if (isset($_GET['set96'])) {$setarray[] = "`Set` = 'SOM'";}
					if (isset($_GET['set97'])) {$setarray[] = "`Set` = 'MBS'";}
					if (isset($_GET['set98'])) {$setarray[] = "`Set` = 'NPH'";}
					if (isset($_GET['set99'])) {$setarray[] = "`Set` = 'M12'";}
					if (isset($_GET['set100'])) {$setarray[] = "`Set` = 'ISD'";}
					if (isset($_GET['set101'])) {$setarray[] = "`Set` = 'DKA'";}
					if (isset($_GET['set102'])) {$setarray[] = "`Set` = 'AVR'";}
//========================================================================================</Stores Seleced sets Into Array $setarray>

//========================================================================================<Generates $setq Syntax>
					$setq = "(".implode(" OR ",$setarray).")";

						
//========================================================================================</Generates $setq Syntax>

//========================================================================================<Stores Seleced Abilities Into Array $abilityarray>
					if (isset($_GET['abilityany'])) {$abilityarray[] = "Ability LIKE '%%'";}
					if (isset($_GET['ability0'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Absorb[[:>:]]'";}
					if (isset($_GET['ability1'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Activate[[:>:]]'";}
					if (isset($_GET['ability2'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Affinity[[:>:]]'";}
					if (isset($_GET['ability3'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Amplify[[:>:]]'";}
					if (isset($_GET['ability4'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Annihilator[[:>:]]'";}
					if (isset($_GET['ability5'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Attach[[:>:]]'";}
					if (isset($_GET['ability6'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Aura Swap[[:>:]]'";}
					if (isset($_GET['ability7'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Banding[[:>:]]'";}
					if (isset($_GET['ability8'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Bands With[[:>:]]'";}
					if (isset($_GET['ability9'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Battle Cry[[:>:]]'";}
					if (isset($_GET['ability10'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Bloodthirst[[:>:]]'";}
					if (isset($_GET['ability11'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Bushido[[:>:]]'";}
					if (isset($_GET['ability12'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Buyback[[:>:]]'";}
					if (isset($_GET['ability13'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Cascade[[:>:]]'";}
					if (isset($_GET['ability14'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Cast[[:>:]]'";}
					if (isset($_GET['ability15'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Champion[[:>:]]'";}
					if (isset($_GET['ability16'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Changeling[[:>:]]'";}
					if (isset($_GET['ability17'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Channel[[:>:]]'";}
					if (isset($_GET['ability18'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Choose[[:>:]]'";}
					if (isset($_GET['ability19'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Chroma[[:>:]]'";}
					if (isset($_GET['ability20'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Clash[[:>:]]'";}
					if (isset($_GET['ability21'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Conspire[[:>:]]'";}
					if (isset($_GET['ability22'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Convoke[[:>:]]'";}
					if (isset($_GET['ability23'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Counter[[:>:]]'";}
					if (isset($_GET['ability24'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Cumulative Upkeep[[:>:]]'";}
					if (isset($_GET['ability25'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Cycling[[:>:]]'";}
					if (isset($_GET['ability26'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Deathtouch[[:>:]]'";}
					if (isset($_GET['ability27'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Defender[[:>:]]'";}
					if (isset($_GET['ability28'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Delve[[:>:]]'";}
					if (isset($_GET['ability29'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Destroy[[:>:]]'";}
					if (isset($_GET['ability30'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Devour[[:>:]]'";}
					if (isset($_GET['ability31'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Discard[[:>:]]'";}
					if (isset($_GET['ability32'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Domain[[:>:]]'";}
					if (isset($_GET['ability33'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Double Strike[[:>:]]'";}
					if (isset($_GET['ability34'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Dredge[[:>:]]'";}
					if (isset($_GET['ability35'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Echo[[:>:]]'";}
					if (isset($_GET['ability36'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Enchant[[:>:]]'";}
					if (isset($_GET['ability37'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Entwine[[:>:]]'";}
					if (isset($_GET['ability38'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Epic[[:>:]]'";}
					if (isset($_GET['ability39'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Equip[[:>:]]'";}
					if (isset($_GET['ability40'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Evoke[[:>:]]'";}
					if (isset($_GET['ability41'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Exalted[[:>:]]'";}
					if (isset($_GET['ability42'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Exchange[[:>:]]'";}
					if (isset($_GET['ability43'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Exile[[:>:]]'";}
					if (isset($_GET['ability44'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Fading[[:>:]]'";}
					if (isset($_GET['ability45'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Fateful Hour[[:>:]]'";}
					if (isset($_GET['ability46'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Fateseal[[:>:]]'";}
					if (isset($_GET['ability47'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Fear[[:>:]]'";}
					if (isset($_GET['ability48'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Fight[[:>:]]'";}
					if (isset($_GET['ability49'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]First Strike[[:>:]]'";}
					if (isset($_GET['ability50'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Flanking[[:>:]]'";}
					if (isset($_GET['ability51'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Flash[[:>:]]'";}
					if (isset($_GET['ability52'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Flashback[[:>:]]'";}
					if (isset($_GET['ability53'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Flying[[:>:]]'";}
					if (isset($_GET['ability54'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Forecast[[:>:]]'";}
					if (isset($_GET['ability55'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Forestwalk[[:>:]]'";}
					if (isset($_GET['ability56'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Fortify[[:>:]]'";}
					if (isset($_GET['ability57'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Frenzy[[:>:]]'";}
					if (isset($_GET['ability58'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Graft[[:>:]]'";}
					if (isset($_GET['ability59'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Grandeur[[:>:]]'";}
					if (isset($_GET['ability60'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Gravestorm[[:>:]]'";}
					if (isset($_GET['ability61'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Haste[[:>:]]'";}
					if (isset($_GET['ability62'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Haunt[[:>:]]'";}
					if (isset($_GET['ability63'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Hellbent[[:>:]]'";}
					if (isset($_GET['ability64'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Hexproof[[:>:]]'";}
					if (isset($_GET['ability65'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Hideaway[[:>:]]'";}
					if (isset($_GET['ability66'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Horsemanship[[:>:]]'";}
					if (isset($_GET['ability67'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Imprint[[:>:]]'";}
					if (isset($_GET['ability68'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Indestructable[[:>:]]'";}
					if (isset($_GET['ability69'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Infect[[:>:]]'";}
					if (isset($_GET['ability70'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Intimidate[[:>:]]'";}
					if (isset($_GET['ability71'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Islandwalk[[:>:]]'";}
					if (isset($_GET['ability72'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Kicker[[:>:]]'";}
					if (isset($_GET['ability73'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Kinship[[:>:]]'";}
					if (isset($_GET['ability74'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Landfall[[:>:]]'";}
					if (isset($_GET['ability75'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Landwalk[[:>:]]'";}
					if (isset($_GET['ability76'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Level Up[[:>:]]'";}
					if (isset($_GET['ability77'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Lifelink[[:>:]]'";}
					if (isset($_GET['ability78'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Living Weapon[[:>:]]'";}
					if (isset($_GET['ability79'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Madness[[:>:]]'";}
					if (isset($_GET['ability80'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Metalcraft[[:>:]]'";}
					if (isset($_GET['ability81'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Miracle[[:>:]]'";}
					if (isset($_GET['ability82'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Modular[[:>:]]'";}
					if (isset($_GET['ability83'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Morbid[[:>:]]'";}
					if (isset($_GET['ability84'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Morph[[:>:]]'";}
					if (isset($_GET['ability85'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Mountainwalk[[:>:]]'";}
					if (isset($_GET['ability86'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Multikicker[[:>:]]'";}
					if (isset($_GET['ability87'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Ninjutsu[[:>:]]'";}
					if (isset($_GET['ability88'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Offering[[:>:]]'";}
					if (isset($_GET['ability89'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Persist[[:>:]]'";}
					if (isset($_GET['ability90'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Phasing[[:>:]]'";}
					if (isset($_GET['ability91'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Piles[[:>:]]'";}
					if (isset($_GET['ability92'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Plainswalk[[:>:]]'";}
					if (isset($_GET['ability93'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Play[[:>:]]'";}
					if (isset($_GET['ability94'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Poisonous[[:>:]]'";}
					if (isset($_GET['ability95'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Proliferate[[:>:]]'";}
					if (isset($_GET['ability96'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Protection[[:>:]]'";}
					if (isset($_GET['ability97'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Provoke[[:>:]]'";}
					if (isset($_GET['ability98'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Prowl[[:>:]]'";}
					if (isset($_GET['ability99'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Radiance[[:>:]]'";}
					if (isset($_GET['ability100'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Rampage[[:>:]]'";}
					if (isset($_GET['ability101'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Reach[[:>:]]'";}
					if (isset($_GET['ability102'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Rebound[[:>:]]'";}
					if (isset($_GET['ability103'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Recover[[:>:]]'";}
					if (isset($_GET['ability104'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Regenerate[[:>:]]'";}
					if (isset($_GET['ability105'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Reinforce[[:>:]]'";}
					if (isset($_GET['ability106'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Replicate[[:>:]]'";}
					if (isset($_GET['ability107'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Retrace[[:>:]]'";}
					if (isset($_GET['ability108'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Reveal[[:>:]]'";}
					if (isset($_GET['ability109'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Ripple[[:>:]]'";}
					if (isset($_GET['ability110'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Sacrifice[[:>:]]'";}
					if (isset($_GET['ability111'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Scry[[:>:]]'";}
					if (isset($_GET['ability112'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Search[[:>:]]'";}
					if (isset($_GET['ability113'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Shadow[[:>:]]'";}
					if (isset($_GET['ability114'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Shroud[[:>:]]'";}
					if (isset($_GET['ability115'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Soulbond[[:>:]]'";}
					if (isset($_GET['ability116'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Soulshift[[:>:]]'";}
					if (isset($_GET['ability117'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Splice[[:>:]]'";}
					if (isset($_GET['ability118'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Split Second[[:>:]]'";}
					if (isset($_GET['ability119'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Storm[[:>:]]'";}
					if (isset($_GET['ability120'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Sunburst[[:>:]]'";}
					if (isset($_GET['ability121'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Suspend[[:>:]]'";}
					if (isset($_GET['ability122'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Swampwalk[[:>:]]'";}
					if (isset($_GET['ability123'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Sweep[[:>:]]'";}
					if (isset($_GET['ability124'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Tap[[:>:]]'";}
					if (isset($_GET['ability125'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Threshold[[:>:]]'";}
					if (isset($_GET['ability126'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Totem Armor[[:>:]]'";}
					if (isset($_GET['ability127'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Trample[[:>:]]'";}
					if (isset($_GET['ability128'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Transfigure[[:>:]]'";}
					if (isset($_GET['ability129'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Transform[[:>:]]'";}
					if (isset($_GET['ability130'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Transmute[[:>:]]'";}
					if (isset($_GET['ability131'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Unblockable[[:>:]]'";}
					if (isset($_GET['ability132'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Undying[[:>:]]'";}
					if (isset($_GET['ability133'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Unearth[[:>:]]'";}
					if (isset($_GET['ability134'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Untap[[:>:]]'";}
					if (isset($_GET['ability135'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Vanishing[[:>:]]'";}
					if (isset($_GET['ability136'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Vigilance[[:>:]]'";}
					if (isset($_GET['ability137'])) {$abilityarray[] = "Ability REGEXP '[[:<:]]Wither[[:>:]]'";}
//========================================================================================</Stores Seleced Abilities Into Array $abilityarray>

//========================================================================================<Stores Unselected Abilities Into Array $notabilityarray>
					if (!isset($_GET['ability0'])) {$notabilityarray[] = "Ability NOT LIKE '%Absorb%'";}
					if (!isset($_GET['ability1'])) {$notabilityarray[] = "Ability NOT LIKE '%Activate%'";}
					if (!isset($_GET['ability2'])) {$notabilityarray[] = "Ability NOT LIKE '%Affinity%'";}
					if (!isset($_GET['ability3'])) {$notabilityarray[] = "Ability NOT LIKE '%Amplify%'";}
					if (!isset($_GET['ability4'])) {$notabilityarray[] = "Ability NOT LIKE '%Annihilator%'";}
					if (!isset($_GET['ability5'])) {$notabilityarray[] = "Ability NOT LIKE '%Attach%'";}
					if (!isset($_GET['ability6'])) {$notabilityarray[] = "Ability NOT LIKE '%Aura Swap%'";}
					if (!isset($_GET['ability7'])) {$notabilityarray[] = "Ability NOT LIKE '%Banding%'";}
					if (!isset($_GET['ability8'])) {$notabilityarray[] = "Ability NOT LIKE '%Bands With%'";}
					if (!isset($_GET['ability9'])) {$notabilityarray[] = "Ability NOT LIKE '%Battle Cry%'";}
					if (!isset($_GET['ability10'])) {$notabilityarray[] = "Ability NOT LIKE '%Bloodthirst%'";}
					if (!isset($_GET['ability11'])) {$notabilityarray[] = "Ability NOT LIKE '%Bushido%'";}
					if (!isset($_GET['ability12'])) {$notabilityarray[] = "Ability NOT LIKE '%Buyback%'";}
					if (!isset($_GET['ability13'])) {$notabilityarray[] = "Ability NOT LIKE '%Cascade%'";}
					if (!isset($_GET['ability14'])) {$notabilityarray[] = "Ability NOT LIKE '%Cast%'";}
					if (!isset($_GET['ability15'])) {$notabilityarray[] = "Ability NOT LIKE '%Champion%'";}
					if (!isset($_GET['ability16'])) {$notabilityarray[] = "Ability NOT LIKE '%Changeling%'";}
					if (!isset($_GET['ability17'])) {$notabilityarray[] = "Ability NOT LIKE '%Channel%'";}
					if (!isset($_GET['ability18'])) {$notabilityarray[] = "Ability NOT LIKE '%Choose%'";}
					if (!isset($_GET['ability19'])) {$notabilityarray[] = "Ability NOT LIKE '%Chroma%'";}
					if (!isset($_GET['ability20'])) {$notabilityarray[] = "Ability NOT LIKE '%Clash%'";}
					if (!isset($_GET['ability21'])) {$notabilityarray[] = "Ability NOT LIKE '%Conspire%'";}
					if (!isset($_GET['ability22'])) {$notabilityarray[] = "Ability NOT LIKE '%Convoke%'";}
					if (!isset($_GET['ability23'])) {$notabilityarray[] = "Ability NOT LIKE '%Counter%'";}
					if (!isset($_GET['ability24'])) {$notabilityarray[] = "Ability NOT LIKE '%Cumulative Upkeep%'";}
					if (!isset($_GET['ability25'])) {$notabilityarray[] = "Ability NOT LIKE '%Cycling%'";}
					if (!isset($_GET['ability26'])) {$notabilityarray[] = "Ability NOT LIKE '%Deathtouch%'";}
					if (!isset($_GET['ability27'])) {$notabilityarray[] = "Ability NOT LIKE '%Defender%'";}
					if (!isset($_GET['ability28'])) {$notabilityarray[] = "Ability NOT LIKE '%Delve%'";}
					if (!isset($_GET['ability29'])) {$notabilityarray[] = "Ability NOT LIKE '%Destroy%'";}
					if (!isset($_GET['ability30'])) {$notabilityarray[] = "Ability NOT LIKE '%Devour%'";}
					if (!isset($_GET['ability31'])) {$notabilityarray[] = "Ability NOT LIKE '%Discard%'";}
					if (!isset($_GET['ability32'])) {$notabilityarray[] = "Ability NOT LIKE '%Domain%'";}
					if (!isset($_GET['ability33'])) {$notabilityarray[] = "Ability NOT LIKE '%Double Strike%'";}
					if (!isset($_GET['ability34'])) {$notabilityarray[] = "Ability NOT LIKE '%Dredge%'";}
					if (!isset($_GET['ability35'])) {$notabilityarray[] = "Ability NOT LIKE '%Echo%'";}
					if (!isset($_GET['ability36'])) {$notabilityarray[] = "Ability NOT LIKE '%Enchant%'";}
					if (!isset($_GET['ability37'])) {$notabilityarray[] = "Ability NOT LIKE '%Entwine%'";}
					if (!isset($_GET['ability38'])) {$notabilityarray[] = "Ability NOT LIKE '%Epic%'";}
					if (!isset($_GET['ability39'])) {$notabilityarray[] = "Ability NOT LIKE '%Equip%'";}
					if (!isset($_GET['ability40'])) {$notabilityarray[] = "Ability NOT LIKE '%Evoke%'";}
					if (!isset($_GET['ability41'])) {$notabilityarray[] = "Ability NOT LIKE '%Exalted%'";}
					if (!isset($_GET['ability42'])) {$notabilityarray[] = "Ability NOT LIKE '%Exchange%'";}
					if (!isset($_GET['ability43'])) {$notabilityarray[] = "Ability NOT LIKE '%Exile%'";}
					if (!isset($_GET['ability44'])) {$notabilityarray[] = "Ability NOT LIKE '%Fading%'";}
					if (!isset($_GET['ability45'])) {$notabilityarray[] = "Ability NOT LIKE '%Fateful Hour%'";}
					if (!isset($_GET['ability46'])) {$notabilityarray[] = "Ability NOT LIKE '%Fateseal%'";}
					if (!isset($_GET['ability47'])) {$notabilityarray[] = "Ability NOT LIKE '%Fear%'";}
					if (!isset($_GET['ability48'])) {$notabilityarray[] = "Ability NOT LIKE '%Fight%'";}
					if (!isset($_GET['ability49'])) {$notabilityarray[] = "Ability NOT LIKE '%First Strike%'";}
					if (!isset($_GET['ability50'])) {$notabilityarray[] = "Ability NOT LIKE '%Flanking%'";}
					if (!isset($_GET['ability51'])) {$notabilityarray[] = "Ability NOT LIKE '%Flash%'";}
					if (!isset($_GET['ability52'])) {$notabilityarray[] = "Ability NOT LIKE '%Flashback%'";}
					if (!isset($_GET['ability53'])) {$notabilityarray[] = "Ability NOT LIKE '%Flying%'";}
					if (!isset($_GET['ability54'])) {$notabilityarray[] = "Ability NOT LIKE '%Forecast%'";}
					if (!isset($_GET['ability55'])) {$notabilityarray[] = "Ability NOT LIKE '%Forestwalk%'";}
					if (!isset($_GET['ability56'])) {$notabilityarray[] = "Ability NOT LIKE '%Fortify%'";}
					if (!isset($_GET['ability57'])) {$notabilityarray[] = "Ability NOT LIKE '%Frenzy%'";}
					if (!isset($_GET['ability58'])) {$notabilityarray[] = "Ability NOT LIKE '%Graft%'";}
					if (!isset($_GET['ability59'])) {$notabilityarray[] = "Ability NOT LIKE '%Grandeur%'";}
					if (!isset($_GET['ability60'])) {$notabilityarray[] = "Ability NOT LIKE '%Gravestorm%'";}
					if (!isset($_GET['ability61'])) {$notabilityarray[] = "Ability NOT LIKE '%Haste%'";}
					if (!isset($_GET['ability62'])) {$notabilityarray[] = "Ability NOT LIKE '%Haunt%'";}
					if (!isset($_GET['ability63'])) {$notabilityarray[] = "Ability NOT LIKE '%Hellbent%'";}
					if (!isset($_GET['ability64'])) {$notabilityarray[] = "Ability NOT LIKE '%Hexproof%'";}
					if (!isset($_GET['ability65'])) {$notabilityarray[] = "Ability NOT LIKE '%Hideaway%'";}
					if (!isset($_GET['ability66'])) {$notabilityarray[] = "Ability NOT LIKE '%Horsemanship%'";}
					if (!isset($_GET['ability67'])) {$notabilityarray[] = "Ability NOT LIKE '%Imprint%'";}
					if (!isset($_GET['ability68'])) {$notabilityarray[] = "Ability NOT LIKE '%Indestructable%'";}
					if (!isset($_GET['ability69'])) {$notabilityarray[] = "Ability NOT LIKE '%Infect%'";}
					if (!isset($_GET['ability70'])) {$notabilityarray[] = "Ability NOT LIKE '%Intimidate%'";}
					if (!isset($_GET['ability71'])) {$notabilityarray[] = "Ability NOT LIKE '%Islandwalk%'";}
					if (!isset($_GET['ability72'])) {$notabilityarray[] = "Ability NOT LIKE '%Kicker%'";}
					if (!isset($_GET['ability73'])) {$notabilityarray[] = "Ability NOT LIKE '%Kinship%'";}
					if (!isset($_GET['ability74'])) {$notabilityarray[] = "Ability NOT LIKE '%Landfall%'";}
					if (!isset($_GET['ability75'])) {$notabilityarray[] = "Ability NOT LIKE '%Landwalk%'";}
					if (!isset($_GET['ability76'])) {$notabilityarray[] = "Ability NOT LIKE '%Level Up%'";}
					if (!isset($_GET['ability77'])) {$notabilityarray[] = "Ability NOT LIKE '%Lifelink%'";}
					if (!isset($_GET['ability78'])) {$notabilityarray[] = "Ability NOT LIKE '%Living Weapon%'";}
					if (!isset($_GET['ability79'])) {$notabilityarray[] = "Ability NOT LIKE '%Madness%'";}
					if (!isset($_GET['ability80'])) {$notabilityarray[] = "Ability NOT LIKE '%Metalcraft%'";}
					if (!isset($_GET['ability81'])) {$notabilityarray[] = "Ability NOT LIKE '%Miracle%'";}
					if (!isset($_GET['ability82'])) {$notabilityarray[] = "Ability NOT LIKE '%Modular%'";}
					if (!isset($_GET['ability83'])) {$notabilityarray[] = "Ability NOT LIKE '%Morbid%'";}
					if (!isset($_GET['ability84'])) {$notabilityarray[] = "Ability NOT LIKE '%Morph%'";}
					if (!isset($_GET['ability85'])) {$notabilityarray[] = "Ability NOT LIKE '%Mountainwalk%'";}
					if (!isset($_GET['ability86'])) {$notabilityarray[] = "Ability NOT LIKE '%Multikicker%'";}
					if (!isset($_GET['ability87'])) {$notabilityarray[] = "Ability NOT LIKE '%Ninjutsu%'";}
					if (!isset($_GET['ability88'])) {$notabilityarray[] = "Ability NOT LIKE '%Offering%'";}
					if (!isset($_GET['ability89'])) {$notabilityarray[] = "Ability NOT LIKE '%Persist%'";}
					if (!isset($_GET['ability90'])) {$notabilityarray[] = "Ability NOT LIKE '%Phasing%'";}
					if (!isset($_GET['ability91'])) {$notabilityarray[] = "Ability NOT LIKE '%Piles%'";}
					if (!isset($_GET['ability92'])) {$notabilityarray[] = "Ability NOT LIKE '%Plainswalk%'";}
					if (!isset($_GET['ability93'])) {$notabilityarray[] = "Ability NOT LIKE '%Play%'";}
					if (!isset($_GET['ability94'])) {$notabilityarray[] = "Ability NOT LIKE '%Poisonous%'";}
					if (!isset($_GET['ability95'])) {$notabilityarray[] = "Ability NOT LIKE '%Proliferate%'";}
					if (!isset($_GET['ability96'])) {$notabilityarray[] = "Ability NOT LIKE '%Protection%'";}
					if (!isset($_GET['ability97'])) {$notabilityarray[] = "Ability NOT LIKE '%Provoke%'";}
					if (!isset($_GET['ability98'])) {$notabilityarray[] = "Ability NOT LIKE '%Prowl%'";}
					if (!isset($_GET['ability99'])) {$notabilityarray[] = "Ability NOT LIKE '%Radiance%'";}
					if (!isset($_GET['ability100'])) {$notabilityarray[] = "Ability NOT LIKE '%Rampage%'";}
					if (!isset($_GET['ability101'])) {$notabilityarray[] = "Ability NOT LIKE '%Reach%'";}
					if (!isset($_GET['ability102'])) {$notabilityarray[] = "Ability NOT LIKE '%Rebound%'";}
					if (!isset($_GET['ability103'])) {$notabilityarray[] = "Ability NOT LIKE '%Recover%'";}
					if (!isset($_GET['ability104'])) {$notabilityarray[] = "Ability NOT LIKE '%Regenerate%'";}
					if (!isset($_GET['ability105'])) {$notabilityarray[] = "Ability NOT LIKE '%Reinforce%'";}
					if (!isset($_GET['ability106'])) {$notabilityarray[] = "Ability NOT LIKE '%Replicate%'";}
					if (!isset($_GET['ability107'])) {$notabilityarray[] = "Ability NOT LIKE '%Retrace%'";}
					if (!isset($_GET['ability108'])) {$notabilityarray[] = "Ability NOT LIKE '%Reveal%'";}
					if (!isset($_GET['ability109'])) {$notabilityarray[] = "Ability NOT LIKE '%Ripple%'";}
					if (!isset($_GET['ability110'])) {$notabilityarray[] = "Ability NOT LIKE '%Sacrifice%'";}
					if (!isset($_GET['ability111'])) {$notabilityarray[] = "Ability NOT LIKE '%Scry%'";}
					if (!isset($_GET['ability112'])) {$notabilityarray[] = "Ability NOT LIKE '%Search%'";}
					if (!isset($_GET['ability113'])) {$notabilityarray[] = "Ability NOT LIKE '%Shadow%'";}
					if (!isset($_GET['ability114'])) {$notabilityarray[] = "Ability NOT LIKE '%Shroud%'";}
					if (!isset($_GET['ability115'])) {$notabilityarray[] = "Ability NOT LIKE '%Soulbond%'";}
					if (!isset($_GET['ability116'])) {$notabilityarray[] = "Ability NOT LIKE '%Soulshift%'";}
					if (!isset($_GET['ability117'])) {$notabilityarray[] = "Ability NOT LIKE '%Splice%'";}
					if (!isset($_GET['ability118'])) {$notabilityarray[] = "Ability NOT LIKE '%Split Second%'";}
					if (!isset($_GET['ability119'])) {$notabilityarray[] = "Ability NOT LIKE '%Storm%'";}
					if (!isset($_GET['ability120'])) {$notabilityarray[] = "Ability NOT LIKE '%Sunburst%'";}
					if (!isset($_GET['ability121'])) {$notabilityarray[] = "Ability NOT LIKE '%Suspend%'";}
					if (!isset($_GET['ability122'])) {$notabilityarray[] = "Ability NOT LIKE '%Swampwalk%'";}
					if (!isset($_GET['ability123'])) {$notabilityarray[] = "Ability NOT LIKE '%Sweep%'";}
					if (!isset($_GET['ability124'])) {$notabilityarray[] = "Ability NOT LIKE '%Tap%'";}
					if (!isset($_GET['ability125'])) {$notabilityarray[] = "Ability NOT LIKE '%Threshold%'";}
					if (!isset($_GET['ability126'])) {$notabilityarray[] = "Ability NOT LIKE '%Totem Armor%'";}
					if (!isset($_GET['ability127'])) {$notabilityarray[] = "Ability NOT LIKE '%Trample%'";}
					if (!isset($_GET['ability128'])) {$notabilityarray[] = "Ability NOT LIKE '%Transfigure%'";}
					if (!isset($_GET['ability129'])) {$notabilityarray[] = "Ability NOT LIKE '%Transform%'";}
					if (!isset($_GET['ability130'])) {$notabilityarray[] = "Ability NOT LIKE '%Transmute%'";}
					if (!isset($_GET['ability131'])) {$notabilityarray[] = "Ability NOT LIKE '%Unblockable%'";}
					if (!isset($_GET['ability132'])) {$notabilityarray[] = "Ability NOT LIKE '%Undying%'";}
					if (!isset($_GET['ability133'])) {$notabilityarray[] = "Ability NOT LIKE '%Unearth%'";}
					if (!isset($_GET['ability134'])) {$notabilityarray[] = "Ability NOT LIKE '%Untap%'";}
					if (!isset($_GET['ability135'])) {$notabilityarray[] = "Ability NOT LIKE '%Vanishing%'";}
					if (!isset($_GET['ability136'])) {$notabilityarray[] = "Ability NOT LIKE '%Vigilance%'";}
					if (!isset($_GET['ability137'])) {$notabilityarray[] = "Ability NOT LIKE '%Wither%'";}
//=======================================================================================</Stores Unseleced sets Into Array $notsetarray>

//========================================================================================<Generates $abilityq Syntax Based On Match Filter>
					if ($_GET['abilitymatch'] == 0) {$abilityq = "(".implode(" OR ",$abilityarray).")";}

					if ($_GET['abilitymatch'] == 1) {$abilityq = "(".implode(" OR ",$abilityarray).") AND (".implode(" AND ",$notabilityarray).")";}

					if ($_GET['abilitymatch'] == 2) {$abilityq = "(".implode(" AND ",$abilityarray).")";}

					if ($_GET['abilitymatch'] == 3) {$abilityq = "(".implode(" AND ",$abilityarray).") AND (".implode(" AND ",$notabilityarray).")";}
						
//========================================================================================</Generates $abilityq Syntax Based On Match Filter>

//========================================================================================<Stores Seleced Subtypes Into Array $subtypearray>
					if (isset($_GET['subtypeany'])) {$subtypearray[] = "Type LIKE '%%'";}
					if (isset($_GET['subtype0'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Advisor[[:>:]]'";}
					if (isset($_GET['subtype1'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ajani[[:>:]]'";}
					if (isset($_GET['subtype2'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ally[[:>:]]'";}
					if (isset($_GET['subtype3'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Angel[[:>:]]'";}
					if (isset($_GET['subtype4'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Anteater[[:>:]]'";}
					if (isset($_GET['subtype5'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Antelope[[:>:]]'";}
					if (isset($_GET['subtype6'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ape[[:>:]]'";}
					if (isset($_GET['subtype7'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Arcane[[:>:]]'";}
					if (isset($_GET['subtype8'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Archer[[:>:]]'";}
					if (isset($_GET['subtype9'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Archon[[:>:]]'";}
					if (isset($_GET['subtype10'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Artificer[[:>:]]'";}
					if (isset($_GET['subtype11'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Assassin[[:>:]]'";}
					if (isset($_GET['subtype12'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Assembly-Worker[[:>:]]'";}
					if (isset($_GET['subtype13'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Atog[[:>:]]'";}
					if (isset($_GET['subtype14'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Aura[[:>:]]'";}
					if (isset($_GET['subtype15'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Aurochs[[:>:]]'";}
					if (isset($_GET['subtype16'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Avatar[[:>:]]'";}
					if (isset($_GET['subtype17'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Badger[[:>:]]'";}
					if (isset($_GET['subtype18'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Barbarian[[:>:]]'";}
					if (isset($_GET['subtype19'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Basilisk[[:>:]]'";}
					if (isset($_GET['subtype20'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Bat[[:>:]]'";}
					if (isset($_GET['subtype21'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Bear[[:>:]]'";}
					if (isset($_GET['subtype22'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Beast[[:>:]]'";}
					if (isset($_GET['subtype23'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Beeble[[:>:]]'";}
					if (isset($_GET['subtype24'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Berserker[[:>:]]'";}
					if (isset($_GET['subtype25'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Bird[[:>:]]'";}
					if (isset($_GET['subtype26'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Boar[[:>:]]'";}
					if (isset($_GET['subtype27'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Bolas[[:>:]]'";}
					if (isset($_GET['subtype28'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Bringer[[:>:]]'";}
					if (isset($_GET['subtype29'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Brushwagg[[:>:]]'";}
					if (isset($_GET['subtype30'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Bureaucrat[[:>:]]'";}
					if (isset($_GET['subtype31'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Camel[[:>:]]'";}
					if (isset($_GET['subtype32'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Carrier[[:>:]]'";}
					if (isset($_GET['subtype33'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Cat[[:>:]]'";}
					if (isset($_GET['subtype34'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Centaur[[:>:]]'";}
					if (isset($_GET['subtype35'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Cephalid[[:>:]]'";}
					if (isset($_GET['subtype36'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Chandra[[:>:]]'";}
					if (isset($_GET['subtype37'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Chicken[[:>:]]'";}
					if (isset($_GET['subtype38'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Child[[:>:]]'";}
					if (isset($_GET['subtype39'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Chimera[[:>:]]'";}
					if (isset($_GET['subtype40'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Clamfolk[[:>:]]'";}
					if (isset($_GET['subtype41'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Cleric[[:>:]]'";}
					if (isset($_GET['subtype42'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Cockatrice[[:>:]]'";}
					if (isset($_GET['subtype43'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Construct[[:>:]]'";}
					if (isset($_GET['subtype44'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Cow[[:>:]]'";}
					if (isset($_GET['subtype45'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Crab[[:>:]]'";}
					if (isset($_GET['subtype46'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Crocodile[[:>:]]'";}
					if (isset($_GET['subtype47'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Curse[[:>:]]'";}
					if (isset($_GET['subtype48'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Cyclops[[:>:]]'";}
					if (isset($_GET['subtype49'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Dauthi[[:>:]]'";}
					if (isset($_GET['subtype50'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Demon[[:>:]]'";}
					if (isset($_GET['subtype51'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Desert[[:>:]]'";}
					if (isset($_GET['subtype52'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Designer[[:>:]]'";}
					if (isset($_GET['subtype53'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Devil[[:>:]]'";}
					if (isset($_GET['subtype54'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Dinosaur[[:>:]]'";}
					if (isset($_GET['subtype55'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Djinn[[:>:]]'";}
					if (isset($_GET['subtype56'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Donkey[[:>:]]'";}
					if (isset($_GET['subtype57'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Dragon[[:>:]]'";}
					if (isset($_GET['subtype58'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Drake[[:>:]]'";}
					if (isset($_GET['subtype59'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Dreadnought[[:>:]]'";}
					if (isset($_GET['subtype60'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Drone[[:>:]]'";}
					if (isset($_GET['subtype61'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Druid[[:>:]]'";}
					if (isset($_GET['subtype62'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Dryad[[:>:]]'";}
					if (isset($_GET['subtype63'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Dwarf[[:>:]]'";}
					if (isset($_GET['subtype64'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Efreet[[:>:]]'";}
					if (isset($_GET['subtype65'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Egg[[:>:]]'";}
					if (isset($_GET['subtype66'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Elder[[:>:]]'";}
					if (isset($_GET['subtype67'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Eldrazi[[:>:]]'";}
					if (isset($_GET['subtype68'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Elemental[[:>:]]'";}
					if (isset($_GET['subtype69'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Elephant[[:>:]]'";}
					if (isset($_GET['subtype70'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Elf[[:>:]]'";}
					if (isset($_GET['subtype71'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Elk[[:>:]]'";}
					if (isset($_GET['subtype72'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Elspeth[[:>:]]'";}
					if (isset($_GET['subtype73'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Elves[[:>:]]'";}
					if (isset($_GET['subtype74'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Equipment[[:>:]]'";}
					if (isset($_GET['subtype75'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Etiquette[[:>:]]'";}
					if (isset($_GET['subtype76'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Eye[[:>:]]'";}
					if (isset($_GET['subtype77'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Faerie[[:>:]]'";}
					if (isset($_GET['subtype78'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ferret[[:>:]]'";}
					if (isset($_GET['subtype79'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Fish[[:>:]]'";}
					if (isset($_GET['subtype80'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Flagbearer[[:>:]]'";}
					if (isset($_GET['subtype81'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Forest[[:>:]]'";}
					if (isset($_GET['subtype82'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Fortification[[:>:]]'";}
					if (isset($_GET['subtype83'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Fox[[:>:]]'";}
					if (isset($_GET['subtype84'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Frog[[:>:]]'";}
					if (isset($_GET['subtype85'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Fungus[[:>:]]'";}
					if (isset($_GET['subtype86'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Gamer[[:>:]]'";}
					if (isset($_GET['subtype87'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Gargoyle[[:>:]]'";}
					if (isset($_GET['subtype88'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Garruk[[:>:]]'";}
					if (isset($_GET['subtype89'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Giant[[:>:]]'";}
					if (isset($_GET['subtype90'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Gideon[[:>:]]'";}
					if (isset($_GET['subtype91'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Gnome[[:>:]]'";}
					if (isset($_GET['subtype92'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Goat[[:>:]]'";}
					if (isset($_GET['subtype93'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Goblin[[:>:]]'";}
					if (isset($_GET['subtype94'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Goblins[[:>:]]'";}
					if (isset($_GET['subtype95'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Golem[[:>:]]'";}
					if (isset($_GET['subtype96'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Gorgon[[:>:]]'";}
					if (isset($_GET['subtype97'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Gremlin[[:>:]]'";}
					if (isset($_GET['subtype98'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Griffin[[:>:]]'";}
					if (isset($_GET['subtype99'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Gus[[:>:]]'";}
					if (isset($_GET['subtype100'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hag[[:>:]]'";}
					if (isset($_GET['subtype101'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Harpy[[:>:]]'";}
					if (isset($_GET['subtype102'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hellion[[:>:]]'";}
					if (isset($_GET['subtype103'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hero[[:>:]]'";}
					if (isset($_GET['subtype104'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hippo[[:>:]]'";}
					if (isset($_GET['subtype105'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hippogriff[[:>:]]'";}
					if (isset($_GET['subtype106'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Homarid[[:>:]]'";}
					if (isset($_GET['subtype107'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Homunculus[[:>:]]'";}
					if (isset($_GET['subtype108'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Horror[[:>:]]'";}
					if (isset($_GET['subtype109'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Horse[[:>:]]'";}
					if (isset($_GET['subtype110'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hound[[:>:]]'";}
					if (isset($_GET['subtype111'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Human[[:>:]]'";}
					if (isset($_GET['subtype112'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hydra[[:>:]]'";}
					if (isset($_GET['subtype113'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Hyena[[:>:]]'";}
					if (isset($_GET['subtype114'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Igpay[[:>:]]'";}
					if (isset($_GET['subtype115'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Illusion[[:>:]]'";}
					if (isset($_GET['subtype116'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Imp[[:>:]]'";}
					if (isset($_GET['subtype117'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Incarnation[[:>:]]'";}
					if (isset($_GET['subtype118'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Insect[[:>:]]'";}
					if (isset($_GET['subtype119'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Island[[:>:]]'";}
					if (isset($_GET['subtype120'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Jace[[:>:]]'";}
					if (isset($_GET['subtype121'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Jellyfish[[:>:]]'";}
					if (isset($_GET['subtype122'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Juggernaut[[:>:]]'";}
					if (isset($_GET['subtype123'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Karn[[:>:]]'";}
					if (isset($_GET['subtype124'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Kavu[[:>:]]'";}
					if (isset($_GET['subtype125'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Kirin[[:>:]]'";}
					if (isset($_GET['subtype126'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Kithkin[[:>:]]'";}
					if (isset($_GET['subtype127'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Knight[[:>:]]'";}
					if (isset($_GET['subtype128'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Kobold[[:>:]]'";}
					if (isset($_GET['subtype129'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Kor[[:>:]]'";}
					if (isset($_GET['subtype130'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Koth[[:>:]]'";}
					if (isset($_GET['subtype131'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Kraken[[:>:]]'";}
					if (isset($_GET['subtype132'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Lady[[:>:]]'";}
					if (isset($_GET['subtype133'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Lair[[:>:]]'";}
					if (isset($_GET['subtype134'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Lammasu[[:>:]]'";}
					if (isset($_GET['subtype135'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Leech[[:>:]]'";}
					if (isset($_GET['subtype136'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Legend[[:>:]]'";}
					if (isset($_GET['subtype137'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Leviathan[[:>:]]'";}
					if (isset($_GET['subtype138'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Lhurgoyf[[:>:]]'";}
					if (isset($_GET['subtype139'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Licid[[:>:]]'";}
					if (isset($_GET['subtype140'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Liliana[[:>:]]'";}
					if (isset($_GET['subtype141'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Lizard[[:>:]]'";}
					if (isset($_GET['subtype142'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Locus[[:>:]]'";}
					if (isset($_GET['subtype143'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Lord[[:>:]]'";}
					if (isset($_GET['subtype144'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Manticore[[:>:]]'";}
					if (isset($_GET['subtype145'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Masticore[[:>:]]'";}
					if (isset($_GET['subtype146'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mercenary[[:>:]]'";}
					if (isset($_GET['subtype147'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Merfolk[[:>:]]'";}
					if (isset($_GET['subtype148'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Metathran[[:>:]]'";}
					if (isset($_GET['subtype149'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mime[[:>:]]'";}
					if (isset($_GET['subtype150'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mine[[:>:]]'";}
					if (isset($_GET['subtype151'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Minion[[:>:]]'";}
					if (isset($_GET['subtype152'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Minotaur[[:>:]]'";}
					if (isset($_GET['subtype153'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Monger[[:>:]]'";}
					if (isset($_GET['subtype154'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mongoose[[:>:]]'";}
					if (isset($_GET['subtype155'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Monk[[:>:]]'";}
					if (isset($_GET['subtype156'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Moonfolk[[:>:]]'";}
					if (isset($_GET['subtype157'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mountain[[:>:]]'";}
					if (isset($_GET['subtype158'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mummy[[:>:]]'";}
					if (isset($_GET['subtype159'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mutant[[:>:]]'";}
					if (isset($_GET['subtype160'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Myr[[:>:]]'";}
					if (isset($_GET['subtype161'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Mystic[[:>:]]'";}
					if (isset($_GET['subtype162'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Nautilus[[:>:]]'";}
					if (isset($_GET['subtype163'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Nephilim[[:>:]]'";}
					if (isset($_GET['subtype164'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Nightmare[[:>:]]'";}
					if (isset($_GET['subtype165'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Nightstalker[[:>:]]'";}
					if (isset($_GET['subtype166'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ninja[[:>:]]'";}
					if (isset($_GET['subtype167'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Nissa[[:>:]]'";}
					if (isset($_GET['subtype168'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Noggle[[:>:]]'";}
					if (isset($_GET['subtype169'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Nomad[[:>:]]'";}
					if (isset($_GET['subtype170'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Octopus[[:>:]]'";}
					if (isset($_GET['subtype171'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ogre[[:>:]]'";}
					if (isset($_GET['subtype172'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ooze[[:>:]]'";}
					if (isset($_GET['subtype173'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Orc[[:>:]]'";}
					if (isset($_GET['subtype174'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Orgg[[:>:]]'";}
					if (isset($_GET['subtype175'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ouphe[[:>:]]'";}
					if (isset($_GET['subtype176'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ox[[:>:]]'";}
					if (isset($_GET['subtype177'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Oyster[[:>:]]'";}
					if (isset($_GET['subtype178'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Paratrooper[[:>:]]'";}
					if (isset($_GET['subtype179'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Pegasus[[:>:]]'";}
					if (isset($_GET['subtype180'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Pest[[:>:]]'";}
					if (isset($_GET['subtype181'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Phelddagrif[[:>:]]'";}
					if (isset($_GET['subtype182'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Phoenix[[:>:]]'";}
					if (isset($_GET['subtype183'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Pirate[[:>:]]'";}
					if (isset($_GET['subtype184'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Plains[[:>:]]'";}
					if (isset($_GET['subtype185'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Plant[[:>:]]'";}
					if (isset($_GET['subtype186'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Power-Plant[[:>:]]'";}
					if (isset($_GET['subtype187'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Praetor[[:>:]]'";}
					if (isset($_GET['subtype188'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Proper[[:>:]]'";}
					if (isset($_GET['subtype189'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Rabbit[[:>:]]'";}
					if (isset($_GET['subtype190'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Rat[[:>:]]'";}
					if (isset($_GET['subtype191'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Rebel[[:>:]]'";}
					if (isset($_GET['subtype192'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Rhino[[:>:]]'";}
					if (isset($_GET['subtype193'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Rigger[[:>:]]'";}
					if (isset($_GET['subtype194'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Rogue[[:>:]]'";}
					if (isset($_GET['subtype195'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Salamander[[:>:]]'";}
					if (isset($_GET['subtype196'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Samurai[[:>:]]'";}
					if (isset($_GET['subtype197'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Saproling[[:>:]]'";}
					if (isset($_GET['subtype198'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Sarkhan[[:>:]]'";}
					if (isset($_GET['subtype199'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Satyr[[:>:]]'";}
					if (isset($_GET['subtype200'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Scarecrow[[:>:]]'";}
					if (isset($_GET['subtype201'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Scorpion[[:>:]]'";}
					if (isset($_GET['subtype202'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Scout[[:>:]]'";}
					if (isset($_GET['subtype203'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Serpent[[:>:]]'";}
					if (isset($_GET['subtype204'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Shade[[:>:]]'";}
					if (isset($_GET['subtype205'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Shaman[[:>:]]'";}
					if (isset($_GET['subtype206'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Shapeshifter[[:>:]]'";}
					if (isset($_GET['subtype207'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Sheep[[:>:]]'";}
					if (isset($_GET['subtype208'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Ship[[:>:]]'";}
					if (isset($_GET['subtype209'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Shrine[[:>:]]'";}
					if (isset($_GET['subtype210'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Siren[[:>:]]'";}
					if (isset($_GET['subtype211'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Skeleton[[:>:]]'";}
					if (isset($_GET['subtype212'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Slith[[:>:]]'";}
					if (isset($_GET['subtype213'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Sliver[[:>:]]'";}
					if (isset($_GET['subtype214'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Slug[[:>:]]'";}
					if (isset($_GET['subtype215'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Snake[[:>:]]'";}
					if (isset($_GET['subtype216'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Soldier[[:>:]]'";}
					if (isset($_GET['subtype217'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Soltari[[:>:]]'";}
					if (isset($_GET['subtype218'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Sorin[[:>:]]'";}
					if (isset($_GET['subtype219'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Spawn[[:>:]]'";}
					if (isset($_GET['subtype220'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Specter[[:>:]]'";}
					if (isset($_GET['subtype221'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Spellshaper[[:>:]]'";}
					if (isset($_GET['subtype222'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Sphinx[[:>:]]'";}
					if (isset($_GET['subtype223'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Spider[[:>:]]'";}
					if (isset($_GET['subtype224'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Spike[[:>:]]'";}
					if (isset($_GET['subtype225'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Spirit[[:>:]]'";}
					if (isset($_GET['subtype226'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Sponge[[:>:]]'";}
					if (isset($_GET['subtype227'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Squid[[:>:]]'";}
					if (isset($_GET['subtype228'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Squirrel[[:>:]]'";}
					if (isset($_GET['subtype229'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Starfish[[:>:]]'";}
					if (isset($_GET['subtype230'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Surrakar[[:>:]]'";}
					if (isset($_GET['subtype231'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Swamp[[:>:]]'";}
					if (isset($_GET['subtype232'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Tamiyo[[:>:]]'";}
					if (isset($_GET['subtype233'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Tezzeret[[:>:]]'";}
					if (isset($_GET['subtype234'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Thalakos[[:>:]]'";}
					if (isset($_GET['subtype235'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Thopter[[:>:]]'";}
					if (isset($_GET['subtype236'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Thrull[[:>:]]'";}
					if (isset($_GET['subtype237'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Tibalt[[:>:]]'";}
					if (isset($_GET['subtype238'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Tower[[:>:]]'";}
					if (isset($_GET['subtype239'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Townsfolk[[:>:]]'";}
					if (isset($_GET['subtype240'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Trap[[:>:]]'";}
					if (isset($_GET['subtype241'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Treefolk[[:>:]]'";}
					if (isset($_GET['subtype242'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Troll[[:>:]]'";}
					if (isset($_GET['subtype243'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Turtle[[:>:]]'";}
					if (isset($_GET['subtype244'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Unicorn[[:>:]]'";}
					if (isset($_GET['subtype245'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Urza's[[:>:]]'";}
					if (isset($_GET['subtype246'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Vampire[[:>:]]'";}
					if (isset($_GET['subtype247'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Vedalken[[:>:]]'";}
					if (isset($_GET['subtype248'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Venser[[:>:]]'";}
					if (isset($_GET['subtype249'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Viashino[[:>:]]'";}
					if (isset($_GET['subtype250'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Volver[[:>:]]'";}
					if (isset($_GET['subtype251'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Waiter[[:>:]]'";}
					if (isset($_GET['subtype252'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Wall[[:>:]]'";}
					if (isset($_GET['subtype253'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Warrior[[:>:]]'";}
					if (isset($_GET['subtype254'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Weird[[:>:]]'";}
					if (isset($_GET['subtype255'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Werewolf[[:>:]]'";}
					if (isset($_GET['subtype256'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Whale[[:>:]]'";}
					if (isset($_GET['subtype257'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Wizard[[:>:]]'";}
					if (isset($_GET['subtype258'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Wolf[[:>:]]'";}
					if (isset($_GET['subtype259'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Wolverine[[:>:]]'";}
					if (isset($_GET['subtype260'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Wombat[[:>:]]'";}
					if (isset($_GET['subtype261'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Worm[[:>:]]'";}
					if (isset($_GET['subtype262'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Wraith[[:>:]]'";}
					if (isset($_GET['subtype263'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Wurm[[:>:]]'";}
					if (isset($_GET['subtype264'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Yeti[[:>:]]'";}
					if (isset($_GET['subtype265'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Zombie[[:>:]]'";}
					if (isset($_GET['subtype266'])) {$subtypearray[] = "Type REGEXP '[[:<:]]Zubera[[:>:]]'";}                    
//========================================================================================</Stores Seleced Subtypes Into Array $subtypearray>

//========================================================================================<Stores Unselected Subtypes Into Array $notsubtypearray>
					if (!isset($_GET['subtype0'])) {$notsubtypearray[] = "Type NOT LIKE '%Advisor%'";}
					if (!isset($_GET['subtype1'])) {$notsubtypearray[] = "Type NOT LIKE '%Ajani%'";}
					if (!isset($_GET['subtype2'])) {$notsubtypearray[] = "Type NOT LIKE '%Ally%'";}
					if (!isset($_GET['subtype3'])) {$notsubtypearray[] = "Type NOT LIKE '%Angel%'";}
					if (!isset($_GET['subtype4'])) {$notsubtypearray[] = "Type NOT LIKE '%Anteater%'";}
					if (!isset($_GET['subtype5'])) {$notsubtypearray[] = "Type NOT LIKE '%Antelope%'";}
					if (!isset($_GET['subtype6'])) {$notsubtypearray[] = "Type NOT LIKE '%Ape%'";}
					if (!isset($_GET['subtype7'])) {$notsubtypearray[] = "Type NOT LIKE '%Arcane%'";}
					if (!isset($_GET['subtype8'])) {$notsubtypearray[] = "Type NOT LIKE '%Archer%'";}
					if (!isset($_GET['subtype9'])) {$notsubtypearray[] = "Type NOT LIKE '%Archon%'";}
					if (!isset($_GET['subtype10'])) {$notsubtypearray[] = "Type NOT LIKE '%Artificer%'";}
					if (!isset($_GET['subtype11'])) {$notsubtypearray[] = "Type NOT LIKE '%Assassin%'";}
					if (!isset($_GET['subtype12'])) {$notsubtypearray[] = "Type NOT LIKE '%Assembly-Worker%'";}
					if (!isset($_GET['subtype13'])) {$notsubtypearray[] = "Type NOT LIKE '%Atog%'";}
					if (!isset($_GET['subtype14'])) {$notsubtypearray[] = "Type NOT LIKE '%Aura%'";}
					if (!isset($_GET['subtype15'])) {$notsubtypearray[] = "Type NOT LIKE '%Aurochs%'";}
					if (!isset($_GET['subtype16'])) {$notsubtypearray[] = "Type NOT LIKE '%Avatar%'";}
					if (!isset($_GET['subtype17'])) {$notsubtypearray[] = "Type NOT LIKE '%Badger%'";}
					if (!isset($_GET['subtype18'])) {$notsubtypearray[] = "Type NOT LIKE '%Barbarian%'";}
					if (!isset($_GET['subtype19'])) {$notsubtypearray[] = "Type NOT LIKE '%Basilisk%'";}
					if (!isset($_GET['subtype20'])) {$notsubtypearray[] = "Type NOT LIKE '%Bat%'";}
					if (!isset($_GET['subtype21'])) {$notsubtypearray[] = "Type NOT LIKE '%Bear%'";}
					if (!isset($_GET['subtype22'])) {$notsubtypearray[] = "Type NOT LIKE '%Beast%'";}
					if (!isset($_GET['subtype23'])) {$notsubtypearray[] = "Type NOT LIKE '%Beeble%'";}
					if (!isset($_GET['subtype24'])) {$notsubtypearray[] = "Type NOT LIKE '%Berserker%'";}
					if (!isset($_GET['subtype25'])) {$notsubtypearray[] = "Type NOT LIKE '%Bird%'";}
					if (!isset($_GET['subtype26'])) {$notsubtypearray[] = "Type NOT LIKE '%Boar%'";}
					if (!isset($_GET['subtype27'])) {$notsubtypearray[] = "Type NOT LIKE '%Bolas%'";}
					if (!isset($_GET['subtype28'])) {$notsubtypearray[] = "Type NOT LIKE '%Bringer%'";}
					if (!isset($_GET['subtype29'])) {$notsubtypearray[] = "Type NOT LIKE '%Brushwagg%'";}
					if (!isset($_GET['subtype30'])) {$notsubtypearray[] = "Type NOT LIKE '%Bureaucrat%'";}
					if (!isset($_GET['subtype31'])) {$notsubtypearray[] = "Type NOT LIKE '%Camel%'";}
					if (!isset($_GET['subtype32'])) {$notsubtypearray[] = "Type NOT LIKE '%Carrier%'";}
					if (!isset($_GET['subtype33'])) {$notsubtypearray[] = "Type NOT LIKE '%Cat%'";}
					if (!isset($_GET['subtype34'])) {$notsubtypearray[] = "Type NOT LIKE '%Centaur%'";}
					if (!isset($_GET['subtype35'])) {$notsubtypearray[] = "Type NOT LIKE '%Cephalid%'";}
					if (!isset($_GET['subtype36'])) {$notsubtypearray[] = "Type NOT LIKE '%Chandra%'";}
					if (!isset($_GET['subtype37'])) {$notsubtypearray[] = "Type NOT LIKE '%Chicken%'";}
					if (!isset($_GET['subtype38'])) {$notsubtypearray[] = "Type NOT LIKE '%Child%'";}
					if (!isset($_GET['subtype39'])) {$notsubtypearray[] = "Type NOT LIKE '%Chimera%'";}
					if (!isset($_GET['subtype40'])) {$notsubtypearray[] = "Type NOT LIKE '%Clamfolk%'";}
					if (!isset($_GET['subtype41'])) {$notsubtypearray[] = "Type NOT LIKE '%Cleric%'";}
					if (!isset($_GET['subtype42'])) {$notsubtypearray[] = "Type NOT LIKE '%Cockatrice%'";}
					if (!isset($_GET['subtype43'])) {$notsubtypearray[] = "Type NOT LIKE '%Construct%'";}
					if (!isset($_GET['subtype44'])) {$notsubtypearray[] = "Type NOT LIKE '%Cow%'";}
					if (!isset($_GET['subtype45'])) {$notsubtypearray[] = "Type NOT LIKE '%Crab%'";}
					if (!isset($_GET['subtype46'])) {$notsubtypearray[] = "Type NOT LIKE '%Crocodile%'";}
					if (!isset($_GET['subtype47'])) {$notsubtypearray[] = "Type NOT LIKE '%Curse%'";}
					if (!isset($_GET['subtype48'])) {$notsubtypearray[] = "Type NOT LIKE '%Cyclops%'";}
					if (!isset($_GET['subtype49'])) {$notsubtypearray[] = "Type NOT LIKE '%Dauthi%'";}
					if (!isset($_GET['subtype50'])) {$notsubtypearray[] = "Type NOT LIKE '%Demon%'";}
					if (!isset($_GET['subtype51'])) {$notsubtypearray[] = "Type NOT LIKE '%Desert%'";}
					if (!isset($_GET['subtype52'])) {$notsubtypearray[] = "Type NOT LIKE '%Designer%'";}
					if (!isset($_GET['subtype53'])) {$notsubtypearray[] = "Type NOT LIKE '%Devil%'";}
					if (!isset($_GET['subtype54'])) {$notsubtypearray[] = "Type NOT LIKE '%Dinosaur%'";}
					if (!isset($_GET['subtype55'])) {$notsubtypearray[] = "Type NOT LIKE '%Djinn%'";}
					if (!isset($_GET['subtype56'])) {$notsubtypearray[] = "Type NOT LIKE '%Donkey%'";}
					if (!isset($_GET['subtype57'])) {$notsubtypearray[] = "Type NOT LIKE '%Dragon%'";}
					if (!isset($_GET['subtype58'])) {$notsubtypearray[] = "Type NOT LIKE '%Drake%'";}
					if (!isset($_GET['subtype59'])) {$notsubtypearray[] = "Type NOT LIKE '%Dreadnought%'";}
					if (!isset($_GET['subtype60'])) {$notsubtypearray[] = "Type NOT LIKE '%Drone%'";}
					if (!isset($_GET['subtype61'])) {$notsubtypearray[] = "Type NOT LIKE '%Druid%'";}
					if (!isset($_GET['subtype62'])) {$notsubtypearray[] = "Type NOT LIKE '%Dryad%'";}
					if (!isset($_GET['subtype63'])) {$notsubtypearray[] = "Type NOT LIKE '%Dwarf%'";}
					if (!isset($_GET['subtype64'])) {$notsubtypearray[] = "Type NOT LIKE '%Efreet%'";}
					if (!isset($_GET['subtype65'])) {$notsubtypearray[] = "Type NOT LIKE '%Egg%'";}
					if (!isset($_GET['subtype66'])) {$notsubtypearray[] = "Type NOT LIKE '%Elder%'";}
					if (!isset($_GET['subtype67'])) {$notsubtypearray[] = "Type NOT LIKE '%Eldrazi%'";}
					if (!isset($_GET['subtype68'])) {$notsubtypearray[] = "Type NOT LIKE '%Elemental%'";}
					if (!isset($_GET['subtype69'])) {$notsubtypearray[] = "Type NOT LIKE '%Elephant%'";}
					if (!isset($_GET['subtype70'])) {$notsubtypearray[] = "Type NOT LIKE '%Elf%'";}
					if (!isset($_GET['subtype71'])) {$notsubtypearray[] = "Type NOT LIKE '%Elk%'";}
					if (!isset($_GET['subtype72'])) {$notsubtypearray[] = "Type NOT LIKE '%Elspeth%'";}
					if (!isset($_GET['subtype73'])) {$notsubtypearray[] = "Type NOT LIKE '%Elves%'";}
					if (!isset($_GET['subtype74'])) {$notsubtypearray[] = "Type NOT LIKE '%Equipment%'";}
					if (!isset($_GET['subtype75'])) {$notsubtypearray[] = "Type NOT LIKE '%Etiquette%'";}
					if (!isset($_GET['subtype76'])) {$notsubtypearray[] = "Type NOT LIKE '%Eye%'";}
					if (!isset($_GET['subtype77'])) {$notsubtypearray[] = "Type NOT LIKE '%Faerie%'";}
					if (!isset($_GET['subtype78'])) {$notsubtypearray[] = "Type NOT LIKE '%Ferret%'";}
					if (!isset($_GET['subtype79'])) {$notsubtypearray[] = "Type NOT LIKE '%Fish%'";}
					if (!isset($_GET['subtype80'])) {$notsubtypearray[] = "Type NOT LIKE '%Flagbearer%'";}
					if (!isset($_GET['subtype81'])) {$notsubtypearray[] = "Type NOT LIKE '%Forest%'";}
					if (!isset($_GET['subtype82'])) {$notsubtypearray[] = "Type NOT LIKE '%Fortification%'";}
					if (!isset($_GET['subtype83'])) {$notsubtypearray[] = "Type NOT LIKE '%Fox%'";}
					if (!isset($_GET['subtype84'])) {$notsubtypearray[] = "Type NOT LIKE '%Frog%'";}
					if (!isset($_GET['subtype85'])) {$notsubtypearray[] = "Type NOT LIKE '%Fungus%'";}
					if (!isset($_GET['subtype86'])) {$notsubtypearray[] = "Type NOT LIKE '%Gamer%'";}
					if (!isset($_GET['subtype87'])) {$notsubtypearray[] = "Type NOT LIKE '%Gargoyle%'";}
					if (!isset($_GET['subtype88'])) {$notsubtypearray[] = "Type NOT LIKE '%Garruk%'";}
					if (!isset($_GET['subtype89'])) {$notsubtypearray[] = "Type NOT LIKE '%Giant%'";}
					if (!isset($_GET['subtype90'])) {$notsubtypearray[] = "Type NOT LIKE '%Gideon%'";}
					if (!isset($_GET['subtype91'])) {$notsubtypearray[] = "Type NOT LIKE '%Gnome%'";}
					if (!isset($_GET['subtype92'])) {$notsubtypearray[] = "Type NOT LIKE '%Goat%'";}
					if (!isset($_GET['subtype93'])) {$notsubtypearray[] = "Type NOT LIKE '%Goblin%'";}
					if (!isset($_GET['subtype94'])) {$notsubtypearray[] = "Type NOT LIKE '%Goblins%'";}
					if (!isset($_GET['subtype95'])) {$notsubtypearray[] = "Type NOT LIKE '%Golem%'";}
					if (!isset($_GET['subtype96'])) {$notsubtypearray[] = "Type NOT LIKE '%Gorgon%'";}
					if (!isset($_GET['subtype97'])) {$notsubtypearray[] = "Type NOT LIKE '%Gremlin%'";}
					if (!isset($_GET['subtype98'])) {$notsubtypearray[] = "Type NOT LIKE '%Griffin%'";}
					if (!isset($_GET['subtype99'])) {$notsubtypearray[] = "Type NOT LIKE '%Gus%'";}
					if (!isset($_GET['subtype100'])) {$notsubtypearray[] = "Type NOT LIKE '%Hag%'";}
					if (!isset($_GET['subtype101'])) {$notsubtypearray[] = "Type NOT LIKE '%Harpy%'";}
					if (!isset($_GET['subtype102'])) {$notsubtypearray[] = "Type NOT LIKE '%Hellion%'";}
					if (!isset($_GET['subtype103'])) {$notsubtypearray[] = "Type NOT LIKE '%Hero%'";}
					if (!isset($_GET['subtype104'])) {$notsubtypearray[] = "Type NOT LIKE '%Hippo%'";}
					if (!isset($_GET['subtype105'])) {$notsubtypearray[] = "Type NOT LIKE '%Hippogriff%'";}
					if (!isset($_GET['subtype106'])) {$notsubtypearray[] = "Type NOT LIKE '%Homarid%'";}
					if (!isset($_GET['subtype107'])) {$notsubtypearray[] = "Type NOT LIKE '%Homunculus%'";}
					if (!isset($_GET['subtype108'])) {$notsubtypearray[] = "Type NOT LIKE '%Horror%'";}
					if (!isset($_GET['subtype109'])) {$notsubtypearray[] = "Type NOT LIKE '%Horse%'";}
					if (!isset($_GET['subtype110'])) {$notsubtypearray[] = "Type NOT LIKE '%Hound%'";}
					if (!isset($_GET['subtype111'])) {$notsubtypearray[] = "Type NOT LIKE '%Human%'";}
					if (!isset($_GET['subtype112'])) {$notsubtypearray[] = "Type NOT LIKE '%Hydra%'";}
					if (!isset($_GET['subtype113'])) {$notsubtypearray[] = "Type NOT LIKE '%Hyena%'";}
					if (!isset($_GET['subtype114'])) {$notsubtypearray[] = "Type NOT LIKE '%Igpay%'";}
					if (!isset($_GET['subtype115'])) {$notsubtypearray[] = "Type NOT LIKE '%Illusion%'";}
					if (!isset($_GET['subtype116'])) {$notsubtypearray[] = "Type NOT LIKE '%Imp%'";}
					if (!isset($_GET['subtype117'])) {$notsubtypearray[] = "Type NOT LIKE '%Incarnation%'";}
					if (!isset($_GET['subtype118'])) {$notsubtypearray[] = "Type NOT LIKE '%Insect%'";}
					if (!isset($_GET['subtype119'])) {$notsubtypearray[] = "Type NOT LIKE '%Island%'";}
					if (!isset($_GET['subtype120'])) {$notsubtypearray[] = "Type NOT LIKE '%Jace%'";}
					if (!isset($_GET['subtype121'])) {$notsubtypearray[] = "Type NOT LIKE '%Jellyfish%'";}
					if (!isset($_GET['subtype122'])) {$notsubtypearray[] = "Type NOT LIKE '%Juggernaut%'";}
					if (!isset($_GET['subtype123'])) {$notsubtypearray[] = "Type NOT LIKE '%Karn%'";}
					if (!isset($_GET['subtype124'])) {$notsubtypearray[] = "Type NOT LIKE '%Kavu%'";}
					if (!isset($_GET['subtype125'])) {$notsubtypearray[] = "Type NOT LIKE '%Kirin%'";}
					if (!isset($_GET['subtype126'])) {$notsubtypearray[] = "Type NOT LIKE '%Kithkin%'";}
					if (!isset($_GET['subtype127'])) {$notsubtypearray[] = "Type NOT LIKE '%Knight%'";}
					if (!isset($_GET['subtype128'])) {$notsubtypearray[] = "Type NOT LIKE '%Kobold%'";}
					if (!isset($_GET['subtype129'])) {$notsubtypearray[] = "Type NOT LIKE '%Kor%'";}
					if (!isset($_GET['subtype130'])) {$notsubtypearray[] = "Type NOT LIKE '%Koth%'";}
					if (!isset($_GET['subtype131'])) {$notsubtypearray[] = "Type NOT LIKE '%Kraken%'";}
					if (!isset($_GET['subtype132'])) {$notsubtypearray[] = "Type NOT LIKE '%Lady%'";}
					if (!isset($_GET['subtype133'])) {$notsubtypearray[] = "Type NOT LIKE '%Lair%'";}
					if (!isset($_GET['subtype134'])) {$notsubtypearray[] = "Type NOT LIKE '%Lammasu%'";}
					if (!isset($_GET['subtype135'])) {$notsubtypearray[] = "Type NOT LIKE '%Leech%'";}
					if (!isset($_GET['subtype136'])) {$notsubtypearray[] = "Type NOT LIKE '%Legend%'";}
					if (!isset($_GET['subtype137'])) {$notsubtypearray[] = "Type NOT LIKE '%Leviathan%'";}
					if (!isset($_GET['subtype138'])) {$notsubtypearray[] = "Type NOT LIKE '%Lhurgoyf%'";}
					if (!isset($_GET['subtype139'])) {$notsubtypearray[] = "Type NOT LIKE '%Licid%'";}
					if (!isset($_GET['subtype140'])) {$notsubtypearray[] = "Type NOT LIKE '%Liliana%'";}
					if (!isset($_GET['subtype141'])) {$notsubtypearray[] = "Type NOT LIKE '%Lizard%'";}
					if (!isset($_GET['subtype142'])) {$notsubtypearray[] = "Type NOT LIKE '%Locus%'";}
					if (!isset($_GET['subtype143'])) {$notsubtypearray[] = "Type NOT LIKE '%Lord%'";}
					if (!isset($_GET['subtype144'])) {$notsubtypearray[] = "Type NOT LIKE '%Manticore%'";}
					if (!isset($_GET['subtype145'])) {$notsubtypearray[] = "Type NOT LIKE '%Masticore%'";}
					if (!isset($_GET['subtype146'])) {$notsubtypearray[] = "Type NOT LIKE '%Mercenary%'";}
					if (!isset($_GET['subtype147'])) {$notsubtypearray[] = "Type NOT LIKE '%Merfolk%'";}
					if (!isset($_GET['subtype148'])) {$notsubtypearray[] = "Type NOT LIKE '%Metathran%'";}
					if (!isset($_GET['subtype149'])) {$notsubtypearray[] = "Type NOT LIKE '%Mime%'";}
					if (!isset($_GET['subtype150'])) {$notsubtypearray[] = "Type NOT LIKE '%Mine%'";}
					if (!isset($_GET['subtype151'])) {$notsubtypearray[] = "Type NOT LIKE '%Minion%'";}
					if (!isset($_GET['subtype152'])) {$notsubtypearray[] = "Type NOT LIKE '%Minotaur%'";}
					if (!isset($_GET['subtype153'])) {$notsubtypearray[] = "Type NOT LIKE '%Monger%'";}
					if (!isset($_GET['subtype154'])) {$notsubtypearray[] = "Type NOT LIKE '%Mongoose%'";}
					if (!isset($_GET['subtype155'])) {$notsubtypearray[] = "Type NOT LIKE '%Monk%'";}
					if (!isset($_GET['subtype156'])) {$notsubtypearray[] = "Type NOT LIKE '%Moonfolk%'";}
					if (!isset($_GET['subtype157'])) {$notsubtypearray[] = "Type NOT LIKE '%Mountain%'";}
					if (!isset($_GET['subtype158'])) {$notsubtypearray[] = "Type NOT LIKE '%Mummy%'";}
					if (!isset($_GET['subtype159'])) {$notsubtypearray[] = "Type NOT LIKE '%Mutant%'";}
					if (!isset($_GET['subtype160'])) {$notsubtypearray[] = "Type NOT LIKE '%Myr%'";}
					if (!isset($_GET['subtype161'])) {$notsubtypearray[] = "Type NOT LIKE '%Mystic%'";}
					if (!isset($_GET['subtype162'])) {$notsubtypearray[] = "Type NOT LIKE '%Nautilus%'";}
					if (!isset($_GET['subtype163'])) {$notsubtypearray[] = "Type NOT LIKE '%Nephilim%'";}
					if (!isset($_GET['subtype164'])) {$notsubtypearray[] = "Type NOT LIKE '%Nightmare%'";}
					if (!isset($_GET['subtype165'])) {$notsubtypearray[] = "Type NOT LIKE '%Nightstalker%'";}
					if (!isset($_GET['subtype166'])) {$notsubtypearray[] = "Type NOT LIKE '%Ninja%'";}
					if (!isset($_GET['subtype167'])) {$notsubtypearray[] = "Type NOT LIKE '%Nissa%'";}
					if (!isset($_GET['subtype168'])) {$notsubtypearray[] = "Type NOT LIKE '%Noggle%'";}
					if (!isset($_GET['subtype169'])) {$notsubtypearray[] = "Type NOT LIKE '%Nomad%'";}
					if (!isset($_GET['subtype170'])) {$notsubtypearray[] = "Type NOT LIKE '%Octopus%'";}
					if (!isset($_GET['subtype171'])) {$notsubtypearray[] = "Type NOT LIKE '%Ogre%'";}
					if (!isset($_GET['subtype172'])) {$notsubtypearray[] = "Type NOT LIKE '%Ooze%'";}
					if (!isset($_GET['subtype173'])) {$notsubtypearray[] = "Type NOT LIKE '%Orc%'";}
					if (!isset($_GET['subtype174'])) {$notsubtypearray[] = "Type NOT LIKE '%Orgg%'";}
					if (!isset($_GET['subtype175'])) {$notsubtypearray[] = "Type NOT LIKE '%Ouphe%'";}
					if (!isset($_GET['subtype176'])) {$notsubtypearray[] = "Type NOT LIKE '%Ox%'";}
					if (!isset($_GET['subtype177'])) {$notsubtypearray[] = "Type NOT LIKE '%Oyster%'";}
					if (!isset($_GET['subtype178'])) {$notsubtypearray[] = "Type NOT LIKE '%Paratrooper%'";}
					if (!isset($_GET['subtype179'])) {$notsubtypearray[] = "Type NOT LIKE '%Pegasus%'";}
					if (!isset($_GET['subtype180'])) {$notsubtypearray[] = "Type NOT LIKE '%Pest%'";}
					if (!isset($_GET['subtype181'])) {$notsubtypearray[] = "Type NOT LIKE '%Phelddagrif%'";}
					if (!isset($_GET['subtype182'])) {$notsubtypearray[] = "Type NOT LIKE '%Phoenix%'";}
					if (!isset($_GET['subtype183'])) {$notsubtypearray[] = "Type NOT LIKE '%Pirate%'";}
					if (!isset($_GET['subtype184'])) {$notsubtypearray[] = "Type NOT LIKE '%Plains%'";}
					if (!isset($_GET['subtype185'])) {$notsubtypearray[] = "Type NOT LIKE '%Plant%'";}
					if (!isset($_GET['subtype186'])) {$notsubtypearray[] = "Type NOT LIKE '%Power-Plant%'";}
					if (!isset($_GET['subtype187'])) {$notsubtypearray[] = "Type NOT LIKE '%Praetor%'";}
					if (!isset($_GET['subtype188'])) {$notsubtypearray[] = "Type NOT LIKE '%Proper%'";}
					if (!isset($_GET['subtype189'])) {$notsubtypearray[] = "Type NOT LIKE '%Rabbit%'";}
					if (!isset($_GET['subtype190'])) {$notsubtypearray[] = "Type NOT LIKE '%Rat%'";}
					if (!isset($_GET['subtype191'])) {$notsubtypearray[] = "Type NOT LIKE '%Rebel%'";}
					if (!isset($_GET['subtype192'])) {$notsubtypearray[] = "Type NOT LIKE '%Rhino%'";}
					if (!isset($_GET['subtype193'])) {$notsubtypearray[] = "Type NOT LIKE '%Rigger%'";}
					if (!isset($_GET['subtype194'])) {$notsubtypearray[] = "Type NOT LIKE '%Rogue%'";}
					if (!isset($_GET['subtype195'])) {$notsubtypearray[] = "Type NOT LIKE '%Salamander%'";}
					if (!isset($_GET['subtype196'])) {$notsubtypearray[] = "Type NOT LIKE '%Samurai%'";}
					if (!isset($_GET['subtype197'])) {$notsubtypearray[] = "Type NOT LIKE '%Saproling%'";}
					if (!isset($_GET['subtype198'])) {$notsubtypearray[] = "Type NOT LIKE '%Sarkhan%'";}
					if (!isset($_GET['subtype199'])) {$notsubtypearray[] = "Type NOT LIKE '%Satyr%'";}
					if (!isset($_GET['subtype200'])) {$notsubtypearray[] = "Type NOT LIKE '%Scarecrow%'";}
					if (!isset($_GET['subtype201'])) {$notsubtypearray[] = "Type NOT LIKE '%Scorpion%'";}
					if (!isset($_GET['subtype202'])) {$notsubtypearray[] = "Type NOT LIKE '%Scout%'";}
					if (!isset($_GET['subtype203'])) {$notsubtypearray[] = "Type NOT LIKE '%Serpent%'";}
					if (!isset($_GET['subtype204'])) {$notsubtypearray[] = "Type NOT LIKE '%Shade%'";}
					if (!isset($_GET['subtype205'])) {$notsubtypearray[] = "Type NOT LIKE '%Shaman%'";}
					if (!isset($_GET['subtype206'])) {$notsubtypearray[] = "Type NOT LIKE '%Shapeshifter%'";}
					if (!isset($_GET['subtype207'])) {$notsubtypearray[] = "Type NOT LIKE '%Sheep%'";}
					if (!isset($_GET['subtype208'])) {$notsubtypearray[] = "Type NOT LIKE '%Ship%'";}
					if (!isset($_GET['subtype209'])) {$notsubtypearray[] = "Type NOT LIKE '%Shrine%'";}
					if (!isset($_GET['subtype210'])) {$notsubtypearray[] = "Type NOT LIKE '%Siren%'";}
					if (!isset($_GET['subtype211'])) {$notsubtypearray[] = "Type NOT LIKE '%Skeleton%'";}
					if (!isset($_GET['subtype212'])) {$notsubtypearray[] = "Type NOT LIKE '%Slith%'";}
					if (!isset($_GET['subtype213'])) {$notsubtypearray[] = "Type NOT LIKE '%Sliver%'";}
					if (!isset($_GET['subtype214'])) {$notsubtypearray[] = "Type NOT LIKE '%Slug%'";}
					if (!isset($_GET['subtype215'])) {$notsubtypearray[] = "Type NOT LIKE '%Snake%'";}
					if (!isset($_GET['subtype216'])) {$notsubtypearray[] = "Type NOT LIKE '%Soldier%'";}
					if (!isset($_GET['subtype217'])) {$notsubtypearray[] = "Type NOT LIKE '%Soltari%'";}
					if (!isset($_GET['subtype218'])) {$notsubtypearray[] = "Type NOT LIKE '%Sorin%'";}
					if (!isset($_GET['subtype219'])) {$notsubtypearray[] = "Type NOT LIKE '%Spawn%'";}
					if (!isset($_GET['subtype220'])) {$notsubtypearray[] = "Type NOT LIKE '%Specter%'";}
					if (!isset($_GET['subtype221'])) {$notsubtypearray[] = "Type NOT LIKE '%Spellshaper%'";}
					if (!isset($_GET['subtype222'])) {$notsubtypearray[] = "Type NOT LIKE '%Sphinx%'";}
					if (!isset($_GET['subtype223'])) {$notsubtypearray[] = "Type NOT LIKE '%Spider%'";}
					if (!isset($_GET['subtype224'])) {$notsubtypearray[] = "Type NOT LIKE '%Spike%'";}
					if (!isset($_GET['subtype225'])) {$notsubtypearray[] = "Type NOT LIKE '%Spirit%'";}
					if (!isset($_GET['subtype226'])) {$notsubtypearray[] = "Type NOT LIKE '%Sponge%'";}
					if (!isset($_GET['subtype227'])) {$notsubtypearray[] = "Type NOT LIKE '%Squid%'";}
					if (!isset($_GET['subtype228'])) {$notsubtypearray[] = "Type NOT LIKE '%Squirrel%'";}
					if (!isset($_GET['subtype229'])) {$notsubtypearray[] = "Type NOT LIKE '%Starfish%'";}
					if (!isset($_GET['subtype230'])) {$notsubtypearray[] = "Type NOT LIKE '%Surrakar%'";}
					if (!isset($_GET['subtype231'])) {$notsubtypearray[] = "Type NOT LIKE '%Swamp%'";}
					if (!isset($_GET['subtype232'])) {$notsubtypearray[] = "Type NOT LIKE '%Tamiyo%'";}
					if (!isset($_GET['subtype233'])) {$notsubtypearray[] = "Type NOT LIKE '%Tezzeret%'";}
					if (!isset($_GET['subtype234'])) {$notsubtypearray[] = "Type NOT LIKE '%Thalakos%'";}
					if (!isset($_GET['subtype235'])) {$notsubtypearray[] = "Type NOT LIKE '%Thopter%'";}
					if (!isset($_GET['subtype236'])) {$notsubtypearray[] = "Type NOT LIKE '%Thrull%'";}
					if (!isset($_GET['subtype237'])) {$notsubtypearray[] = "Type NOT LIKE '%Tibalt%'";}
					if (!isset($_GET['subtype238'])) {$notsubtypearray[] = "Type NOT LIKE '%Tower%'";}
					if (!isset($_GET['subtype239'])) {$notsubtypearray[] = "Type NOT LIKE '%Townsfolk%'";}
					if (!isset($_GET['subtype240'])) {$notsubtypearray[] = "Type NOT LIKE '%Trap%'";}
					if (!isset($_GET['subtype241'])) {$notsubtypearray[] = "Type NOT LIKE '%Treefolk%'";}
					if (!isset($_GET['subtype242'])) {$notsubtypearray[] = "Type NOT LIKE '%Troll%'";}
					if (!isset($_GET['subtype243'])) {$notsubtypearray[] = "Type NOT LIKE '%Turtle%'";}
					if (!isset($_GET['subtype244'])) {$notsubtypearray[] = "Type NOT LIKE '%Unicorn%'";}
					if (!isset($_GET['subtype245'])) {$notsubtypearray[] = "Type NOT LIKE '%Urza's%'";}
					if (!isset($_GET['subtype246'])) {$notsubtypearray[] = "Type NOT LIKE '%Vampire%'";}
					if (!isset($_GET['subtype247'])) {$notsubtypearray[] = "Type NOT LIKE '%Vedalken%'";}
					if (!isset($_GET['subtype248'])) {$notsubtypearray[] = "Type NOT LIKE '%Venser%'";}
					if (!isset($_GET['subtype249'])) {$notsubtypearray[] = "Type NOT LIKE '%Viashino%'";}
					if (!isset($_GET['subtype250'])) {$notsubtypearray[] = "Type NOT LIKE '%Volver%'";}
					if (!isset($_GET['subtype251'])) {$notsubtypearray[] = "Type NOT LIKE '%Waiter%'";}
					if (!isset($_GET['subtype252'])) {$notsubtypearray[] = "Type NOT LIKE '%Wall%'";}
					if (!isset($_GET['subtype253'])) {$notsubtypearray[] = "Type NOT LIKE '%Warrior%'";}
					if (!isset($_GET['subtype254'])) {$notsubtypearray[] = "Type NOT LIKE '%Weird%'";}
					if (!isset($_GET['subtype255'])) {$notsubtypearray[] = "Type NOT LIKE '%Werewolf%'";}
					if (!isset($_GET['subtype256'])) {$notsubtypearray[] = "Type NOT LIKE '%Whale%'";}
					if (!isset($_GET['subtype257'])) {$notsubtypearray[] = "Type NOT LIKE '%Wizard%'";}
					if (!isset($_GET['subtype258'])) {$notsubtypearray[] = "Type NOT LIKE '%Wolf%'";}
					if (!isset($_GET['subtype259'])) {$notsubtypearray[] = "Type NOT LIKE '%Wolverine%'";}
					if (!isset($_GET['subtype260'])) {$notsubtypearray[] = "Type NOT LIKE '%Wombat%'";}
					if (!isset($_GET['subtype261'])) {$notsubtypearray[] = "Type NOT LIKE '%Worm%'";}
					if (!isset($_GET['subtype262'])) {$notsubtypearray[] = "Type NOT LIKE '%Wraith%'";}
					if (!isset($_GET['subtype263'])) {$notsubtypearray[] = "Type NOT LIKE '%Wurm%'";}
					if (!isset($_GET['subtype264'])) {$notsubtypearray[] = "Type NOT LIKE '%Yeti%'";}
					if (!isset($_GET['subtype265'])) {$notsubtypearray[] = "Type NOT LIKE '%Zombie%'";}
					if (!isset($_GET['subtype266'])) {$notsubtypearray[] = "Type NOT LIKE '%Zubera%'";}                    
//=======================================================================================</Stores Unseleced Subtypes Into Array $notsubtypearray>

//========================================================================================<Generates $subtypeq Syntax Based On Match Filter>
					if ($_GET['subtypematch'] == 0) {$subtypeq = "(".implode(" OR ",$subtypearray).")";}

					if ($_GET['subtypematch'] == 1) {$subtypeq = "(".implode(" OR ",$subtypearray).") AND (".implode(" AND ",$notsubtypearray).")";}

					if ($_GET['subtypematch'] == 2) {$subtypeq = "(".implode(" AND ",$subtypearray).")";}

					if ($_GET['subtypematch'] == 3) {$subtypeq = "(".implode(" AND ",$subtypearray).") AND (".implode(" AND ",$notsubtypearray).")";}
						
//========================================================================================</Generates $subtypeq Syntax Based On Match Filter>

//========================================================================================<Queries DB and Generates Resulting Names>
					if (isset($_GET))
						{
                            $db = parse_ini_file("../../../config/config.ini");
                            $user = $db['user'];
                            $pass = $db['pass'];
                            $name = $db['name'];
                            $host = $db['host'];
                            $type = $db['type'];

							mysql_connect($host, $user, $pass) or die(mysql_error());
							mysql_select_db($name) or die(mysql_error());
							$q = "Select Name, ID FROM master2 WHERE ".$nameq.$colorq." AND ".$rarityq." AND ".$typeq." AND ".$cmcq." AND ".$setq." AND ".$abilityq." AND ".$subtypeq." GROUP BY Name".$sortbyq;
							$data = mysql_query($q);
							echo '
									<div id="bottom1">
										<div class="searchfilterdiv">
											<h2>Results: '.mysql_num_rows($data).' Cards</h2>
											<div class="boxcontainer">';
									

							echo '<select size="2" id="nameselect" onChange="populateWindow()">';
							while($info = mysql_fetch_array( $data ))
							{
							echo '<option value="',theid($info),'">',thename($info),'</option>';	
							}
							echo '</select></div></div></div>';
						}
//========================================================================================</Queries DB and Generates Resulting Names>						
?> 