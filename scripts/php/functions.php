<?php

	//Echo card Image by theimage($info);
	function theimage($info){echo '<img src="images/cardimages/',$info['ID'],'.jpg" id="cardimage" alt="Card Image" onclick="lightbox();" onError="this.src=\'images/cardimages/back.jpg\';" />';}

	//Echo card ID by theid($info);
	function theid($info){echo ($info['ID']);}
	
	//Echo card Name by thename($info);
	function thename($info){echo ($info['Name']);}
	
	//Echo card Type by thetype($info);
	function thetype($info){echo ($info['Type']);}
	
	//Echo card Set by theset($info);
	function theset($info)
		{
			if ($info['Set'] == "CH") {echo 'Chronicles';}
			if ($info['Set'] == "PT") {echo 'Portal';}
			if ($info['Set'] == "P2") {echo 'Portal Second Age';}
			if ($info['Set'] == "P3") {echo 'Portal Three Kingdoms';}
			if ($info['Set'] == "UG") {echo 'Unglued';}
			if ($info['Set'] == "UNH") {echo 'Unhinged';}
			if ($info['Set'] == "ST") {echo 'Starter 1999';}
			if ($info['Set'] == "S2") {echo 'Starter 2000';}
			if ($info['Set'] == "BR") {echo 'Battle Royale Box Set';}
			if ($info['Set'] == "BD") {echo 'Beatdown Box Set';}
			if ($info['Set'] == "ARC") {echo 'Archenemy';}
			if ($info['Set'] == "CMD") {echo 'Commander';}
			if ($info['Set'] == "DRG") {echo 'FTV: Dragons';}
			if ($info['Set'] == "EXL") {echo 'FTV: Exiled';}
			if ($info['Set'] == "RLC") {echo 'FTV: Relics';}
			if ($info['Set'] == "LEG") {echo 'FTV: Legends';}
			if ($info['Set'] == "EVG") {echo 'DD: Elves/Goblins';}
			if ($info['Set'] == "JVC") {echo 'DD: Jace/Chandra';}
			if ($info['Set'] == "DVD") {echo 'DD: Divine/Demonic';}
			if ($info['Set'] == "GVL") {echo 'DD: Garruk/Liliana';}
			if ($info['Set'] == "PVC") {echo 'DD: Phyrexia/Coalition';}
			if ($info['Set'] == "EVT") {echo 'DD: Elspeth/Tezzeret';}
			if ($info['Set'] == "KVD") {echo 'DD: Kights/Dragons';}
			if ($info['Set'] == "AVB") {echo 'DD: Anjani/Nicol Bolas';}
			if ($info['Set'] == "VVK") {echo 'DD: Venser/Koth';}
			if ($info['Set'] == "SLI") {echo 'PDS: Slivers';}
			if ($info['Set'] == "FAL") {echo 'PDS: Fire and Lightning';}
			if ($info['Set'] == "GRV") {echo 'PDS: Graveborn';}
			if ($info['Set'] == "PCH") {echo 'Planechase';}
			if ($info['Set'] == "PC2") {echo 'Planechase 2';}
			if ($info['Set'] == "A") {echo 'Limited Edition Alpha';}
			if ($info['Set'] == "B") {echo 'Limited Edition Beta';}
			if ($info['Set'] == "U") {echo 'Unlimited Edition';}
			if ($info['Set'] == "AN") {echo 'Arabian Nights';}
			if ($info['Set'] == "AQ") {echo 'Antiquities';}
			if ($info['Set'] == "LG") {echo 'Legends';}
			if ($info['Set'] == "R") {echo 'Revised Edition';}
			if ($info['Set'] == "DK") {echo 'The Dark';}
			if ($info['Set'] == "FE") {echo 'Fallen Empires';}
			if ($info['Set'] == "4E") {echo 'Fourth Edition';}
			if ($info['Set'] == "IA") {echo 'Ice Age';}
			if ($info['Set'] == "HL") {echo 'Homelands';}
			if ($info['Set'] == "AL") {echo 'Alliances';}
			if ($info['Set'] == "MI") {echo 'Mirage';}
			if ($info['Set'] == "VI") {echo 'Visions';}
			if ($info['Set'] == "WL") {echo 'Weatherlight';}
			if ($info['Set'] == "5E") {echo 'Fifth Edition';}
			if ($info['Set'] == "TE") {echo 'Tempest';}
			if ($info['Set'] == "SH") {echo 'Stronghold';}
			if ($info['Set'] == "EX") {echo 'Exodus';}
			if ($info['Set'] == "US") {echo "Urza's Saga";}
			if ($info['Set'] == "UL") {echo "Urza's Legacy";}
			if ($info['Set'] == "UD") {echo "Urza's Destiny";}
			if ($info['Set'] == "6E") {echo 'Sixth Edition';}
			if ($info['Set'] == "MM") {echo 'Mercadian Masques';}
			if ($info['Set'] == "NE") {echo 'Nemesis';}
			if ($info['Set'] == "PY") {echo 'Prophecy';}
			if ($info['Set'] == "IN") {echo 'Invasion';}
			if ($info['Set'] == "PS") {echo 'Planeshift';}
			if ($info['Set'] == "AP") {echo 'Apocalypse';}
			if ($info['Set'] == "7E") {echo 'Seventh Edition';}
			if ($info['Set'] == "OD") {echo 'Odyssey';}
			if ($info['Set'] == "TO") {echo 'Torment';}
			if ($info['Set'] == "JU") {echo 'Judgment';}
			if ($info['Set'] == "ON") {echo 'Onslaught';}
			if ($info['Set'] == "LE") {echo 'Legions';}
			if ($info['Set'] == "SC") {echo 'Scourge';}
			if ($info['Set'] == "8E") {echo 'Eighth Edition';}
			if ($info['Set'] == "MR") {echo 'Mirrodin';}
			if ($info['Set'] == "DS") {echo 'Darksteel';}
			if ($info['Set'] == "FD") {echo 'Fifth Dawn';}
			if ($info['Set'] == "CHK") {echo 'Champions';}
			if ($info['Set'] == "BOK") {echo 'Betrayers';}
			if ($info['Set'] == "SOK") {echo 'Saviors';}
			if ($info['Set'] == "9E") {echo 'Ninth Edition';}
			if ($info['Set'] == "RAV") {echo 'Ravnica';}
			if ($info['Set'] == "GP") {echo 'Guildpact';}
			if ($info['Set'] == "DIS") {echo 'Dissension';}
			if ($info['Set'] == "CS") {echo 'Coldsnap';}
			if ($info['Set'] == "TSP") {echo 'Time Spiral';}
			if ($info['Set'] == "TSB") {echo 'Time Spiral Timeshifted';}
			if ($info['Set'] == "PLC") {echo 'Planar Chaos';}
			if ($info['Set'] == "FUT") {echo 'Future Sight';}
			if ($info['Set'] == "10E") {echo 'Tenth Edition';}
			if ($info['Set'] == "LRW") {echo 'Lorwyn';}
			if ($info['Set'] == "MOR") {echo 'Morningtide';}
			if ($info['Set'] == "SHM") {echo 'Shadowmoor';}
			if ($info['Set'] == "EVE") {echo 'Eventide';}
			if ($info['Set'] == "ALA") {echo 'Shards of Alara';}
			if ($info['Set'] == "CFX") {echo 'Conflux';}
			if ($info['Set'] == "ARB") {echo 'Alara Reborn';}
			if ($info['Set'] == "M10") {echo 'Magic 2010';}
			if ($info['Set'] == "ZEN") {echo 'Zendikar';}
			if ($info['Set'] == "WWK") {echo 'Worldwake';}
			if ($info['Set'] == "ROE") {echo 'Rise of the Eldrazi';}
			if ($info['Set'] == "M11") {echo 'Magic 2011';}
			if ($info['Set'] == "SOM") {echo 'Scars of Mirrodin';}
			if ($info['Set'] == "MBS") {echo 'Mirrodin Besieged';}
			if ($info['Set'] == "NPH") {echo 'New Phyrexia';}
			if ($info['Set'] == "M12") {echo 'Magic 2012';}
			if ($info['Set'] == "ISD") {echo 'Innistrad';}
			if ($info['Set'] == "DKA") {echo 'Dark Ascension';}
			if ($info['Set'] == "AVR") {echo 'Avacyn Restored';}
		}	
	
	//Echo card Set Image by thesetimage($info);
	function thesetimage($info){echo '<img src="images/setsymbols/small/',$info['Set'],'_',$info['Rarity'],'.gif" class="setimage" alt="Set Symbol"></img>';}
	
	//Echo card Rarity by therarity($info);
	function therarity($info)
		{
			if ($info['Rarity'] == "C") {echo 'Common';}
			if ($info['Rarity'] == "U") {echo 'Uncommon';}
			if ($info['Rarity'] == "R") {echo 'Rare';}
			if ($info['Rarity'] == "M") {echo 'Mythic';}
		}
	
	//Echo card Flavor Text by theflavor($info);
	function theflavor($info){echo ("<p>".str_replace(Array ("#_", "_#","£"), Array ("<i>","</i>","</p><p>"), $info['Flavor'])."</p>");}
	
	//Echo card Artist by theartist($info);
	function theartist($info){echo ($info['Artist']);}
	
	//Echo card Power by thepower($info);
	function thepower($info){echo ($info['P']);}
	
	//Echo card Toughness by thetoughness($info);
	function thetoughness($info){echo ($info['T']);}

	//Echo card Loyalty by theloyalty($info);
	function theloyalty($info){echo ($info['L']);}

	//Echo card Rulings by therulings($info);
	function therulings($info)
		{
			echo preg_replace('~£~','</p><p>',preg_replace('~£~','<p>',$info['Rulings'],1))."</p>";
		}


	//Echo card Abilities with Mana Symbols by theabilities($info);
	function theabilities($info){echo (str_replace(Array (
	"£",
	"#_",
	"_#",
	'{0}',
	'{1}',
	'{2}',
	'{2B}',
	'{2G}',
	'{2R}',
	'{2U}',
	'{2W}',
	'{3}',
	'{4}',
	'{5}',
	'{6}',
	'{7}',
	'{8}',
	'{9}',
	'{10}',
	'{11}',
	'{12}',
	'{13}',
	'{14}',
	'{15}',
	'{16}',
	'{B}',
	'{BG}',
	'{PB}',
	'{BR}',
	'{G}',
	'{PG}',
	'{GU}',
	'{GW}',
	'{Q}',
	'{R}',
	'{RG}',
	'{PR}',
	'{RW}',
	'{S}',
	'{T}',
	'{U}',
	'{UB}',
	'{PU}',
	'{UR}',
	'{W}',
	'{WB}',
	'{PW}',
	'{WU}',
	'{X}'),
Array(
	'</p><p>',
	'<i>',
	'</i>',
	'<img class="smallmanasymbol" src="images/manasymbols/small/0.png"  alt="0 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/1.png"  alt="1 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/2.png"  alt="2 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/2B.png"  alt="2/B Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/2G.png"  alt="2/G Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/2R.png"  alt="2/R Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/2U.png"  alt="2/U Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/2W.png"  alt="2/W Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/3.png"  alt="3 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/4.png"  alt="4 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/5.png"  alt="5 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/6.png"  alt="6 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/7.png"  alt="7 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/8.png"  alt="8 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/9.png"  alt="9 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/10.png"  alt="10 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/11.png"  alt="11 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/12.png"  alt="12 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/13.png"  alt="13 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/14.png"  alt="14 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/15.png"  alt="15 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/16.png"  alt="16 Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/B.png"  alt="Black Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/BG.png"  alt="B/G Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/PB.png"  alt="Phyrexian B Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/BR.png"  alt="B/R Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/G.png"  alt="Green Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/PG.png"  alt="Phyrexian G Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/GU.png"  alt="G/U Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/GW.png"  alt="G/W Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/Q.png"  alt="Untap Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/R.png"  alt="Red Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/RG.png"  alt="R/G Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/PR.png"  alt="Phyrexian R Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/RW.png"  alt="R/W Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/S.png"  alt="Snow Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/T.png"  alt="Tap Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/U.png"  alt="Blue Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/UB.png"  alt="U/B Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/PU.png"  alt="Phyrexian U Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/UR.png"  alt="U/R Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/W.png"  alt="White Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/WB.png"  alt="W/B Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/PW.png"  alt="Phyrexian W Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/WU.png"  alt="W/U Mana Symbol">',
	'<img class="smallmanasymbol" src="images/manasymbols/small/X.png"  alt="X Mana Symbol">'),
	$info['Ability']));}	
	
	//Echo card Cost With Mana Symbols by thecost($info);													
	function thecost($info){echo (str_replace(Array (
	'{0}',
	'{1}',
	'{2}',
	'{2B}',
	'{2G}',
	'{2R}',
	'{2U}',
	'{2W}',
	'{3}',
	'{4}',
	'{5}',
	'{6}',
	'{7}',
	'{8}',
	'{9}',
	'{10}',
	'{11}',
	'{12}',
	'{13}',
	'{14}',
	'{15}',
	'{16}',
	'{B}',
	'{BG}',
	'{PB}',
	'{BR}',
	'{G}',
	'{PG}',
	'{GU}',
	'{GW}',
	'{Q}',
	'{R}',
	'{RG}',
	'{PR}',
	'{RW}',
	'{S}',
	'{T}',
	'{U}',
	'{UB}',
	'{PU}',
	'{UR}',
	'{W}',
	'{WB}',
	'{PW}',
	'{WU}',
	'{X}'),
Array(
	'<img class="largemanasymbol" src="images/manasymbols/large/0.png"  alt="0 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/1.png"  alt="1 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/2.png"  alt="2 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/2B.png"  alt="2/B Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/2G.png"  alt="2/G Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/2R.png"  alt="2/R Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/2U.png"  alt="2/U Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/2W.png"  alt="2/W Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/3.png"  alt="3 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/4.png"  alt="4 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/5.png"  alt="5 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/6.png"  alt="6 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/7.png"  alt="7 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/8.png"  alt="8 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/9.png"  alt="9 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/10.png"  alt="10 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/11.png"  alt="11 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/12.png"  alt="12 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/13.png"  alt="13 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/14.png"  alt="14 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/15.png"  alt="15 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/16.png"  alt="16 Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/B.png"  alt="Black Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/BG.png"  alt="B/G Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/PB.png"  alt="Phyrexian B Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/BR.png"  alt="B/R Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/G.png"  alt="Green Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/PG.png"  alt="Phyrexian G Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/GU.png"  alt="G/U Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/GW.png"  alt="G/W Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/Q.png"  alt="Untap Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/R.png"  alt="Red Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/RG.png"  alt="R/G Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/PR.png"  alt="Phyrexian R Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/RW.png"  alt="R/W Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/S.png"  alt="Snow Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/T.png"  alt="Tap Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/U.png"  alt="Blue Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/UB.png"  alt="U/B Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/PU.png"  alt="Phyrexian U Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/UR.png"  alt="U/R Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/W.png"  alt="White Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/WB.png"  alt="W/B Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/PW.png"  alt="Phyrexian W Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/WU.png"  alt="W/U Mana Symbol">',
	'<img class="largemanasymbol" src="images/manasymbols/large/X.png"  alt="X Mana Symbol">'),
	$info['Cost']));}

?>