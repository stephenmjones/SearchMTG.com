<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Searchable database of Magic the Gathering cards, made as a learning excercise."/>
    <meta name="keywords" content="magic, magic tcg, magic cards, trading card game, trading cards, collectible card game, tcg, ccg"/>
    <title>SearchMTG.com - Searchable &quot;Magic: the Gathering&quot; card database.</title>
    <link type="text/css" href="style.css" rel="stylesheet"/>
</head>

<body>
	<div id="headerdiv"><h1 id="logo">SearchMTG.com</h1></div>
	<div id="bigtopdiv">
    	<div id="topbufferdiv"></div>
    	<div id="topcontainerdiv">
            <form name="form" method="get" action="index.php" id="form">
                
                <div id="top1">
                	
                    <div class="searchfilterdiv">
                    	<h2>Name:</h2>
                        <div class="boxcontainer">
                            <table>
                                <tr>
                                    <td>
                                        <input type="text" name="namefield" id="namefield" onKeyup="populateScroll();" />
                                    </td>
                                    <td>
                                        <select name="namematch" id="namematch" onChange="populateScroll();">
                                            <option value="0" selected >Match Entire Phrase</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="searchfilterdiv">
                    	<h2>CMC:</h2>
                        <div class="boxcontainer">
                            <table>
                                <tr>
                                    <td>
                                        <select name="cmcmin" id="cmcmin" onChange="populateScroll();">
                                            <option value="0" selected>0</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>                                
                                            <option value="4" >4</option>                                
                                            <option value="5" >5</option>                                
                                            <option value="6" >6</option>                                
                                            <option value="7" >7</option>                                
                                            <option value="8" >8</option>                                
                                            <option value="9" >9</option>                                
                                            <option value="10" >10</option>                                
                                            <option value="11" >11</option>                                
                                            <option value="12" >12</option>                                
                                            <option value="13" >13</option>                                
                                            <option value="14" >14</option>                                
                                            <option value="15" >15</option>                                
                                            <option value="16" >16</option>                                
                                        </select>
                                        to
                                        <select name="cmcmax" id="cmcmax" onChange="populateScroll();">
                                            <option value="17" selected >∞</option>
                                            <option value="0" >0</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                            <option value="3" >3</option>                                
                                            <option value="4" >4</option>                                
                                            <option value="5" >5</option>                                
                                            <option value="6" >6</option>                                
                                            <option value="7" >7</option>                                
                                            <option value="8" >8</option>                                
                                            <option value="9" >9</option>                                
                                            <option value="10" >10</option>                                
                                            <option value="11" >11</option>                                
                                            <option value="12" >12</option>                                
                                            <option value="13" >13</option>                                
                                            <option value="14" >14</option>                                
                                            <option value="15" >15</option>                                
                                            <option value="16" >16</option>                                
                                        </select>
                                    </td>
                                    <td>
                                        Contains:
                                        <input type="text" name="cmccont" id="cmccont" onKeyup="populateScroll();" />
                                    </td>
                                    <td>
                                        Has X:
                                        <select name="cmcx" id="cmcx" onChange="populateScroll();">
                                            <option value="0" selected >Irrelevant</option>
                                            <option value="1" >Yes</option>
                                            <option value="2" >No</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="searchfilterdiv">
                    	<h2>Color:</h2>
                        <div class="boxcontainer">
                            <table>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="colorany" id="colorany" value="1" checked="checked" onChange="for(i=0;i<5;i++)document.form['color'+i].checked=false; populateScroll();"/><label for="colorany">Any</label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="color0" id="color0" value="1" onChange="document.form.colorany.checked=false; populateScroll();"/><label for="color0"><img src="images/manasymbols/small/W.png" class="smallmanasymbol" alt="White Mana"></label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="color1" id="color1" value="1" onChange="document.form.colorany.checked=false; populateScroll();"/><label for="color1"><img src="images/manasymbols/small/U.png" class="smallmanasymbol" alt="Blue Mana"></label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="color2" id="color2" value="1" onChange="document.form.colorany.checked=false; populateScroll();"/><label for="color2"><img src="images/manasymbols/small/B.png" class="smallmanasymbol" alt="Black Mana"></label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="color3" id="color3" value="1" onChange="document.form.colorany.checked=false; populateScroll();"/><label for="color3"><img src="images/manasymbols/small/R.png" class="smallmanasymbol" alt="Red Mana"></label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="color4" id="color4" value="1" onChange="document.form.colorany.checked=false; populateScroll();"/><label for="color4"><img src="images/manasymbols/small/G.png" class="smallmanasymbol" alt="Green Mana"></label>
                                    </td>
                                    <td>
                                        <select name="colormatch" id="colormatch" onChange="populateScroll();">
                                            <option value="0" selected>Match Any</option>
                                            <option value="1">Match Only</option>
                                            <option value="2">Match All</option>
                                            <option value="3">Match Exact</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="searchfilterdiv">
                    	<h2>Rarity:</h2>
                        <div class="boxcontainer">
                            <table>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="rarityany" id="rarityany" value="1" checked="checked" onChange="for(i=0;i<4;i++)document.form['rarity'+i].checked=false; populateScroll();"/><label for="rarityany">Any</label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="rarity0" id="rarity0" value="1" onChange="document.form.rarityany.checked=false; populateScroll();"/><label for="rarity0">Common</label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="rarity1" id="rarity1" value="1" onChange="document.form.rarityany.checked=false; populateScroll();"/><label for="rarity1">Uncommon</label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="rarity2" id="rarity2" value="1" onChange="document.form.rarityany.checked=false; populateScroll();"/><label for="rarity2">Rare</label>
                                    </td>
                                    <td>    
                                        <input type="checkbox" name="rarity3" id="rarity3" value="1" onChange="document.form.rarityany.checked=false; populateScroll();"/><label for="rarity3">Mythic</label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                   
                    <div class="searchfilterdiv">
                    	<h2>Sort By:</h2>
                        <div class="boxcontainer">
                            <table>
                                <tr>
                                    <td>
                                        <select name="sortby" id="sortby" onChange="populateScroll();">
                                            <option value="0" selected >Name</option>
                                            <option value="1" >CMC</option>
                                            <option value="2" >Power</option>
                                            <option value="3" >Toughness</option>
                                        </select>
                                        <select name="sortbydir" id="sortbydir" onChange="populateScroll();">
                                            <option value="0" selected >Ascending</option>
                                            <option value="1" >Decending</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="button" value="Reset Filters" onClick="resetForm()" onMouseDown="this.style.backgroundColor='#336699'" onMouseUp="this.style.backgroundColor='#6699cc'"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                	</div>
                    
                </div>
                
                <div id="top2">
                
	                <div class="searchfilterdiv">
                    	<h2>Set:</h2>
                        <div class="boxcontainer">
                            <select name="setmatch" id="setmatch" onChange="quickSet(); populateScroll();">
                                <option value="0">All Formats</option>
                                <option value="1">Standard</option>
                                <option value="2">Extended</option>
                                <option value="3">Modern</option>
                                <option value="4">Innistrad Block</option>
                                <option value="5">Scars of Mirrodin Block</option>
                                <option value="6">Zendikar Block</option>
                                <option value="7">Shards of Alara Block</option>
                                <option value="8">Lorwyn Block</option>
                                <option value="9">Time Spiral Block</option>
                                <option value="10">Ravnica Block</option>
                                <option value="11">Kamigawa Block</option>
                                <option value="12">Mirrodin Block</option>
                                <option value="13">Onslaught Block</option>
                                <option value="14">Odyssey Block</option>
                                <option value="15">Invasion Block</option>
                                <option value="16">Mercadian Masques Block</option>
                                <option value="17">Urza Block</option>
                                <option value="18">Tempest Block</option>
                                <option value="19">Mirage Block</option>
                                <option value="20">Ice Age Block</option>
                            </select>
                            <div id="setscrolldiv">
                               <input type="checkbox" name="setany" id="setany" value="1" checked="checked" onChange="for(i=0;i<103;i++)document.form['set'+i].checked=false; populateScroll();"/><label for="setany">Any Set</label><br/>
                                <input type="checkbox" name="set0" id="set0" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set0">Chronicles</label><br/>
                                <input type="checkbox" name="set1" id="set1" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set1">Portal</label><br/>
                                <input type="checkbox" name="set2" id="set2" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set2">Portal Second Age</label><br/>
                                <input type="checkbox" name="set3" id="set3" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set3">Portal Third Kingdom</label><br/>
                                <input type="checkbox" name="set4" id="set4" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set4">Unglued</label><br/>
                                <input type="checkbox" name="set5" id="set5" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set5">Unhinged</label><br/>
                                <input type="checkbox" name="set6" id="set6" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set6">Starter 1999</label><br/>
                                <input type="checkbox" name="set7" id="set7" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set7">Starter 2000</label><br/>
                                <input type="checkbox" name="set8" id="set8" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set8">Battle Royale Box Set</label><br/>
                                <input type="checkbox" name="set9" id="set9" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set9">Beatdown Box Set</label><br/>
                                <input type="checkbox" name="set10" id="set10" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set10">Archenemy</label><br/>
                                <input type="checkbox" name="set11" id="set11" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set11">Commander</label><br/>
                                <input type="checkbox" name="set12" id="set12" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set12">FTV: Dragons</label><br/>
                                <input type="checkbox" name="set13" id="set13" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set13">FTV: Exiled</label><br/>
                                <input type="checkbox" name="set14" id="set14" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set14">FTV: Relics</label><br/>
                                <input type="checkbox" name="set15" id="set15" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set15">FTV: Legends</label><br/>
                                <input type="checkbox" name="set16" id="set16" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set16">DD: Elves/Goblins</label><br/>
                                <input type="checkbox" name="set17" id="set17" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set17">DD: Jace/Chandra</label><br/>
                                <input type="checkbox" name="set18" id="set18" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set18">DD: Divine/Demonic</label><br/>
                                <input type="checkbox" name="set19" id="set19" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set19">DD: Garruk/Liliana</label><br/>
                                <input type="checkbox" name="set20" id="set20" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set20">DD: Phyrexia/Coalition</label><br/>
                                <input type="checkbox" name="set21" id="set21" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set21">DD: Elspeth/Tezzeret</label><br/>
                                <input type="checkbox" name="set22" id="set22" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set22">DD: Kights/Dragons</label><br/>
                                <input type="checkbox" name="set23" id="set23" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set23">DD: Anjani/Nicol Bolas</label><br/>
                                <input type="checkbox" name="set24" id="set24" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set24">DD: Venser/Koth</label><br/>
                                <input type="checkbox" name="set25" id="set25" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set25">PDS: Slivers</label><br/>
                                <input type="checkbox" name="set26" id="set26" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set26">PDS: Fire/Lightning</label><br/>
                                <input type="checkbox" name="set27" id="set27" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set27">PDS: Graveborn</label><br/>
                                <input type="checkbox" name="set28" id="set28" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set28">Planechase</label><br/>
                                <input type="checkbox" name="set29" id="set29" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set29">Planechase 2</label><br/>
                                <input type="checkbox" name="set30" id="set30" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set30">Limited Edition Alpha</label><br/>
                                <input type="checkbox" name="set31" id="set31" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set31">Limited Edition Beta</label><br/>
                                <input type="checkbox" name="set32" id="set32" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set32">Unlimited Edition</label><br/>
                                <input type="checkbox" name="set33" id="set33" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set33">Arabian Nights</label><br/>
                                <input type="checkbox" name="set34" id="set34" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set34">Antiquities</label><br/>
                                <input type="checkbox" name="set35" id="set35" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set35">Legends</label><br/>
                                <input type="checkbox" name="set36" id="set36" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set36">Revised Edition</label><br/>
                                <input type="checkbox" name="set37" id="set37" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set37">The Dark</label><br/>
                                <input type="checkbox" name="set38" id="set38" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set38">Fallen Empires</label><br/>
                                <input type="checkbox" name="set39" id="set39" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set39">Fourth Edition</label><br/>
                                <input type="checkbox" name="set40" id="set40" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set40">Ice Age</label><br/>
                                <input type="checkbox" name="set41" id="set41" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set41">Homelands</label><br/>
                                <input type="checkbox" name="set42" id="set42" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set42">Alliances</label><br/>
                                <input type="checkbox" name="set43" id="set43" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set43">Mirage</label><br/>
                                <input type="checkbox" name="set44" id="set44" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set44">Visions</label><br/>
                                <input type="checkbox" name="set45" id="set45" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set45">Weatherlight</label><br/>
                                <input type="checkbox" name="set46" id="set46" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set46">Fifth Edition</label><br/>
                                <input type="checkbox" name="set47" id="set47" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set47">Tempest</label><br/>
                                <input type="checkbox" name="set48" id="set48" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set48">Stronghold</label><br/>
                                <input type="checkbox" name="set49" id="set49" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set49">Exodus</label><br/>
                                <input type="checkbox" name="set50" id="set50" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set50">Urza's Saga</label><br/>
                                <input type="checkbox" name="set51" id="set51" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set51">Urza's Legacy</label><br/>
                                <input type="checkbox" name="set52" id="set52" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set52">Urza's Destiny</label><br/>
                                <input type="checkbox" name="set53" id="set53" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set53">Sixth Edition</label><br/>
                                <input type="checkbox" name="set54" id="set54" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set54">Mercadian Masques</label><br/>
                                <input type="checkbox" name="set55" id="set55" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set55">Nemesis</label><br/>
                                <input type="checkbox" name="set56" id="set56" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set56">Prophecy</label><br/>
                                <input type="checkbox" name="set57" id="set57" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set57">Invasion</label><br/>
                                <input type="checkbox" name="set58" id="set58" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set58">Planeshift</label><br/>
                                <input type="checkbox" name="set59" id="set59" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set59">Apocalypse</label><br/>
                                <input type="checkbox" name="set60" id="set60" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set60">Seventh Edition</label><br/>
                                <input type="checkbox" name="set61" id="set61" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set61">Odyssey</label><br/>
                                <input type="checkbox" name="set62" id="set62" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set62">Torment</label><br/>
                                <input type="checkbox" name="set63" id="set63" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set63">Judgment</label><br/>
                                <input type="checkbox" name="set64" id="set64" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set64">Onslaught</label><br/>
                                <input type="checkbox" name="set65" id="set65" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set65">Legions</label><br/>
                                <input type="checkbox" name="set66" id="set66" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set66">Scourge</label><br/>
                                <input type="checkbox" name="set67" id="set67" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set67">Eighth Edition</label><br/>
                                <input type="checkbox" name="set68" id="set68" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set68">Mirrodin</label><br/>
                                <input type="checkbox" name="set69" id="set69" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set69">Darksteel</label><br/>
                                <input type="checkbox" name="set70" id="set70" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set70">Fifth Dawn</label><br/>
                                <input type="checkbox" name="set71" id="set71" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set71">Champions</label><br/>
                                <input type="checkbox" name="set72" id="set72" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set72">Betrayers</label><br/>
                                <input type="checkbox" name="set73" id="set73" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set73">Saviors</label><br/>
                                <input type="checkbox" name="set74" id="set74" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set74">Ninth Edition</label><br/>
                                <input type="checkbox" name="set75" id="set75" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set75">Ravnica</label><br/>
                                <input type="checkbox" name="set76" id="set76" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set76">Guildpact</label><br/>
                                <input type="checkbox" name="set77" id="set77" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set77">Dissension</label><br/>
                                <input type="checkbox" name="set78" id="set78" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set78">Coldsnap</label><br/>
                                <input type="checkbox" name="set79" id="set79" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set79">Time Spiral</label><br/>
                                <input type="checkbox" name="set80" id="set80" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set80">Timeshifted</label><br/>
                                <input type="checkbox" name="set81" id="set81" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set81">Planar Chaos</label><br/>
                                <input type="checkbox" name="set82" id="set82" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set82">Future Sight</label><br/>
                                <input type="checkbox" name="set83" id="set83" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set83">Tenth Edition</label><br/>
                                <input type="checkbox" name="set84" id="set84" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set84">Lorwyn</label><br/>
                                <input type="checkbox" name="set85" id="set85" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set85">Morningtide</label><br/>
                                <input type="checkbox" name="set86" id="set86" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set86">Shadowmoor</label><br/>
                                <input type="checkbox" name="set87" id="set87" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set87">Eventide</label><br/>
                                <input type="checkbox" name="set88" id="set88" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set88">Shards of Alara</label><br/>
                                <input type="checkbox" name="set89" id="set89" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set89">Conflux</label><br/>
                                <input type="checkbox" name="set90" id="set90" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set90">Alara Reborn</label><br/>
                                <input type="checkbox" name="set91" id="set91" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set91">Magic 2010</label><br/>
                                <input type="checkbox" name="set92" id="set92" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set92">Zendikar</label><br/>
                                <input type="checkbox" name="set93" id="set93" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set93">Worldwake</label><br/>
                                <input type="checkbox" name="set94" id="set94" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set94">Rise of the Eldrazi</label><br/>
                                <input type="checkbox" name="set95" id="set95" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set95">Magic 2011</label><br/>
                                <input type="checkbox" name="set96" id="set96" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set96">Scars of Mirrodin</label><br/>
                                <input type="checkbox" name="set97" id="set97" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set97">Mirrodin Besieged</label><br/>
                                <input type="checkbox" name="set98" id="set98" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set98">New Phyrexia</label><br/>
                                <input type="checkbox" name="set99" id="set99" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set99">Magic 2012</label><br/>
                                <input type="checkbox" name="set100" id="set100" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set100">Innistrad</label><br/>
                                <input type="checkbox" name="set101" id="set101" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set101">Dark Ascension</label><br/>
                                <input type="checkbox" name="set102" id="set102" value="1" onChange="document.form.setany.checked=false; populateScroll();" /><label for="set102">Avacyn Restored</label>			
                            </div>
						</div>                        
                    </div>
                    
                </div>
                
                <div id="top3">
                
	                <div class="searchfilterdiv">
                    	<h2>Type:</h2>
                        <div class="boxcontainer">
                            <select name="typematch" id="typematch" onChange="populateScroll();">
                                <option value="0" selected>Match Any</option>
                                <option value="1">Match Only</option>
                                <option value="2">Match All</option>
                                <option value="3">Match Exact</option>
                            </select>
                            <div id="typescrolldiv">
                                <input type="checkbox" name="typeany" id="typeany" value="1" checked="checked" onChange="for(i=0;i<11;i++)document.form['type'+i].checked=false; populateScroll();"/><label for="typeany">Any Type</label><br/>
                                <input type="checkbox" name="type0" id="type0" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type0">Artifact</label><br/>
                                <input type="checkbox" name="type1" id="type1" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type1">Basic</label><br/>
                                <input type="checkbox" name="type2" id="type2" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type2">Creature</label><br/>
                                <input type="checkbox" name="type3" id="type3" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type3">Enchantment</label><br/>
                                <input type="checkbox" name="type4" id="type4" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type4">Instant</label><br/>
                                <input type="checkbox" name="type5" id="type5" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type5">Land</label><br/>
                                <input type="checkbox" name="type6" id="type6" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type6">Legendary</label><br/>
                                <input type="checkbox" name="type7" id="type7" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type7">Planeswalker</label><br/>
                                <input type="checkbox" name="type8" id="type8" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type8">Snow</label><br/>
                                <input type="checkbox" name="type10" id="type10" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type10">Tribal</label><br/>
                                <input type="checkbox" name="type9" id="type9" value="1" onChange="document.form.typeany.checked=false; populateScroll();"/><label for="type9">Sorcery</label><br/>
                            </div>
						</div>                        
                	</div>
                    
                </div>
                
                <div id="top4">
                
	                <div class="searchfilterdiv">
                    	<h2>Subtype:</h2>
                        <div class="boxcontainer">
                            <select name="subtypematch" id="subtypematch" onChange="populateScroll();">
                                <option value="0" selected>Match Any</option>
                                <option value="1">Match Only</option>
                                <option value="2">Match All</option>
                                <option value="3">Match Exact</option>
                            </select>
                            <div id="subtypescrolldiv">
                                <input type="checkbox" name="subtypeany" id="subtypeany" value="1" checked="checked" onChange="for(i=0;i<267;i++)document.form['subtype'+i].checked=false; populateScroll();"/><label for="subtypeany">Any Subtype</label><br/>
                                <input type="checkbox" name="subtype0" id="subtype0" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype0">Advisor</label><br/>
                                <input type="checkbox" name="subtype1" id="subtype1" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype1">Ajani</label><br/>
                                <input type="checkbox" name="subtype2" id="subtype2" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype2">Ally</label><br/>
                                <input type="checkbox" name="subtype3" id="subtype3" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype3">Angel</label><br/>
                                <input type="checkbox" name="subtype4" id="subtype4" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype4">Anteater</label><br/>
                                <input type="checkbox" name="subtype5" id="subtype5" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype5">Antelope</label><br/>
                                <input type="checkbox" name="subtype6" id="subtype6" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype6">Ape</label><br/>
                                <input type="checkbox" name="subtype7" id="subtype7" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype7">Arcane</label><br/>
                                <input type="checkbox" name="subtype8" id="subtype8" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype8">Archer</label><br/>
                                <input type="checkbox" name="subtype9" id="subtype9" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype9">Archon</label><br/>
                                <input type="checkbox" name="subtype10" id="subtype10" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype10">Artificer</label><br/>
                                <input type="checkbox" name="subtype11" id="subtype11" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype11">Assassin</label><br/>
                                <input type="checkbox" name="subtype12" id="subtype12" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype12">Assembly-Worker</label><br/>
                                <input type="checkbox" name="subtype13" id="subtype13" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype13">Atog</label><br/>
                                <input type="checkbox" name="subtype14" id="subtype14" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype14">Aura</label><br/>
                                <input type="checkbox" name="subtype15" id="subtype15" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype15">Aurochs</label><br/>
                                <input type="checkbox" name="subtype16" id="subtype16" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype16">Avatar</label><br/>
                                <input type="checkbox" name="subtype17" id="subtype17" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype17">Badger</label><br/>
                                <input type="checkbox" name="subtype18" id="subtype18" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype18">Barbarian</label><br/>
                                <input type="checkbox" name="subtype19" id="subtype19" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype19">Basilisk</label><br/>
                                <input type="checkbox" name="subtype20" id="subtype20" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype20">Bat</label><br/>
                                <input type="checkbox" name="subtype21" id="subtype21" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype21">Bear</label><br/>
                                <input type="checkbox" name="subtype22" id="subtype22" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype22">Beast</label><br/>
                                <input type="checkbox" name="subtype23" id="subtype23" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype23">Beeble</label><br/>
                                <input type="checkbox" name="subtype24" id="subtype24" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype24">Berserker</label><br/>
                                <input type="checkbox" name="subtype25" id="subtype25" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype25">Bird</label><br/>
                                <input type="checkbox" name="subtype26" id="subtype26" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype26">Boar</label><br/>
                                <input type="checkbox" name="subtype27" id="subtype27" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype27">Bolas</label><br/>
                                <input type="checkbox" name="subtype28" id="subtype28" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype28">Bringer</label><br/>
                                <input type="checkbox" name="subtype29" id="subtype29" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype29">Brushwagg</label><br/>
                                <input type="checkbox" name="subtype30" id="subtype30" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype30">Bureaucrat</label><br/>
                                <input type="checkbox" name="subtype31" id="subtype31" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype31">Camel</label><br/>
                                <input type="checkbox" name="subtype32" id="subtype32" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype32">Carrier</label><br/>
                                <input type="checkbox" name="subtype33" id="subtype33" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype33">Cat</label><br/>
                                <input type="checkbox" name="subtype34" id="subtype34" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype34">Centaur</label><br/>
                                <input type="checkbox" name="subtype35" id="subtype35" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype35">Cephalid</label><br/>
                                <input type="checkbox" name="subtype36" id="subtype36" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype36">Chandra</label><br/>
                                <input type="checkbox" name="subtype37" id="subtype37" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype37">Chicken</label><br/>
                                <input type="checkbox" name="subtype38" id="subtype38" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype38">Child</label><br/>
                                <input type="checkbox" name="subtype39" id="subtype39" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype39">Chimera</label><br/>
                                <input type="checkbox" name="subtype40" id="subtype40" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype40">Clamfolk</label><br/>
                                <input type="checkbox" name="subtype41" id="subtype41" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype41">Cleric</label><br/>
                                <input type="checkbox" name="subtype42" id="subtype42" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype42">Cockatrice</label><br/>
                                <input type="checkbox" name="subtype43" id="subtype43" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype43">Construct</label><br/>
                                <input type="checkbox" name="subtype44" id="subtype44" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype44">Cow</label><br/>
                                <input type="checkbox" name="subtype45" id="subtype45" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype45">Crab</label><br/>
                                <input type="checkbox" name="subtype46" id="subtype46" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype46">Crocodile</label><br/>
                                <input type="checkbox" name="subtype47" id="subtype47" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype47">Curse</label><br/>
                                <input type="checkbox" name="subtype48" id="subtype48" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype48">Cyclops</label><br/>
                                <input type="checkbox" name="subtype49" id="subtype49" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype49">Dauthi</label><br/>
                                <input type="checkbox" name="subtype50" id="subtype50" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype50">Demon</label><br/>
                                <input type="checkbox" name="subtype51" id="subtype51" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype51">Desert</label><br/>
                                <input type="checkbox" name="subtype52" id="subtype52" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype52">Designer</label><br/>
                                <input type="checkbox" name="subtype53" id="subtype53" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype53">Devil</label><br/>
                                <input type="checkbox" name="subtype54" id="subtype54" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype54">Dinosaur</label><br/>
                                <input type="checkbox" name="subtype55" id="subtype55" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype55">Djinn</label><br/>
                                <input type="checkbox" name="subtype56" id="subtype56" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype56">Donkey</label><br/>
                                <input type="checkbox" name="subtype57" id="subtype57" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype57">Dragon</label><br/>
                                <input type="checkbox" name="subtype58" id="subtype58" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype58">Drake</label><br/>
                                <input type="checkbox" name="subtype59" id="subtype59" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype59">Dreadnought</label><br/>
                                <input type="checkbox" name="subtype60" id="subtype60" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype60">Drone</label><br/>
                                <input type="checkbox" name="subtype61" id="subtype61" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype61">Druid</label><br/>
                                <input type="checkbox" name="subtype62" id="subtype62" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype62">Dryad</label><br/>
                                <input type="checkbox" name="subtype63" id="subtype63" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype63">Dwarf</label><br/>
                                <input type="checkbox" name="subtype64" id="subtype64" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype64">Efreet</label><br/>
                                <input type="checkbox" name="subtype65" id="subtype65" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype65">Egg</label><br/>
                                <input type="checkbox" name="subtype66" id="subtype66" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype66">Elder</label><br/>
                                <input type="checkbox" name="subtype67" id="subtype67" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype67">Eldrazi</label><br/>
                                <input type="checkbox" name="subtype68" id="subtype68" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype68">Elemental</label><br/>
                                <input type="checkbox" name="subtype69" id="subtype69" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype69">Elephant</label><br/>
                                <input type="checkbox" name="subtype70" id="subtype70" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype70">Elf</label><br/>
                                <input type="checkbox" name="subtype71" id="subtype71" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype71">Elk</label><br/>
                                <input type="checkbox" name="subtype72" id="subtype72" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype72">Elspeth</label><br/>
                                <input type="checkbox" name="subtype73" id="subtype73" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype73">Elves</label><br/>
                                <input type="checkbox" name="subtype74" id="subtype74" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype74">Equipment</label><br/>
                                <input type="checkbox" name="subtype75" id="subtype75" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype75">Etiquette</label><br/>
                                <input type="checkbox" name="subtype76" id="subtype76" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype76">Eye</label><br/>
                                <input type="checkbox" name="subtype77" id="subtype77" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype77">Faerie</label><br/>
                                <input type="checkbox" name="subtype78" id="subtype78" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype78">Ferret</label><br/>
                                <input type="checkbox" name="subtype79" id="subtype79" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype79">Fish</label><br/>
                                <input type="checkbox" name="subtype80" id="subtype80" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype80">Flagbearer</label><br/>
                                <input type="checkbox" name="subtype81" id="subtype81" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype81">Forest</label><br/>
                                <input type="checkbox" name="subtype82" id="subtype82" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype82">Fortification</label><br/>
                                <input type="checkbox" name="subtype83" id="subtype83" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype83">Fox</label><br/>
                                <input type="checkbox" name="subtype84" id="subtype84" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype84">Frog</label><br/>
                                <input type="checkbox" name="subtype85" id="subtype85" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype85">Fungus</label><br/>
                                <input type="checkbox" name="subtype86" id="subtype86" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype86">Gamer</label><br/>
                                <input type="checkbox" name="subtype87" id="subtype87" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype87">Gargoyle</label><br/>
                                <input type="checkbox" name="subtype88" id="subtype88" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype88">Garruk</label><br/>
                                <input type="checkbox" name="subtype89" id="subtype89" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype89">Giant</label><br/>
                                <input type="checkbox" name="subtype90" id="subtype90" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype90">Gideon</label><br/>
                                <input type="checkbox" name="subtype91" id="subtype91" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype91">Gnome</label><br/>
                                <input type="checkbox" name="subtype92" id="subtype92" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype92">Goat</label><br/>
                                <input type="checkbox" name="subtype93" id="subtype93" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype93">Goblin</label><br/>
                                <input type="checkbox" name="subtype94" id="subtype94" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype94">Goblins</label><br/>
                                <input type="checkbox" name="subtype95" id="subtype95" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype95">Golem</label><br/>
                                <input type="checkbox" name="subtype96" id="subtype96" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype96">Gorgon</label><br/>
                                <input type="checkbox" name="subtype97" id="subtype97" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype97">Gremlin</label><br/>
                                <input type="checkbox" name="subtype98" id="subtype98" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype98">Griffin</label><br/>
                                <input type="checkbox" name="subtype99" id="subtype99" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype99">Gus</label><br/>
                                <input type="checkbox" name="subtype100" id="subtype100" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype100">Hag</label><br/>
                                <input type="checkbox" name="subtype101" id="subtype101" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype101">Harpy</label><br/>
                                <input type="checkbox" name="subtype102" id="subtype102" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype102">Hellion</label><br/>
                                <input type="checkbox" name="subtype103" id="subtype103" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype103">Hero</label><br/>
                                <input type="checkbox" name="subtype104" id="subtype104" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype104">Hippo</label><br/>
                                <input type="checkbox" name="subtype105" id="subtype105" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype105">Hippogriff</label><br/>
                                <input type="checkbox" name="subtype106" id="subtype106" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype106">Homarid</label><br/>
                                <input type="checkbox" name="subtype107" id="subtype107" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype107">Homunculus</label><br/>
                                <input type="checkbox" name="subtype108" id="subtype108" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype108">Horror</label><br/>
                                <input type="checkbox" name="subtype109" id="subtype109" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype109">Horse</label><br/>
                                <input type="checkbox" name="subtype110" id="subtype110" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype110">Hound</label><br/>
                                <input type="checkbox" name="subtype111" id="subtype111" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype111">Human</label><br/>
                                <input type="checkbox" name="subtype112" id="subtype112" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype112">Hydra</label><br/>
                                <input type="checkbox" name="subtype113" id="subtype113" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype113">Hyena</label><br/>
                                <input type="checkbox" name="subtype114" id="subtype114" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype114">Igpay</label><br/>
                                <input type="checkbox" name="subtype115" id="subtype115" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype115">Illusion</label><br/>
                                <input type="checkbox" name="subtype116" id="subtype116" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype116">Imp</label><br/>
                                <input type="checkbox" name="subtype117" id="subtype117" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype117">Incarnation</label><br/>
                                <input type="checkbox" name="subtype118" id="subtype118" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype118">Insect</label><br/>
                                <input type="checkbox" name="subtype119" id="subtype119" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype119">Island</label><br/>
                                <input type="checkbox" name="subtype120" id="subtype120" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype120">Jace</label><br/>
                                <input type="checkbox" name="subtype121" id="subtype121" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype121">Jellyfish</label><br/>
                                <input type="checkbox" name="subtype122" id="subtype122" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype122">Juggernaut</label><br/>
                                <input type="checkbox" name="subtype123" id="subtype123" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype123">Karn</label><br/>
                                <input type="checkbox" name="subtype124" id="subtype124" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype124">Kavu</label><br/>
                                <input type="checkbox" name="subtype125" id="subtype125" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype125">Kirin</label><br/>
                                <input type="checkbox" name="subtype126" id="subtype126" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype126">Kithkin</label><br/>
                                <input type="checkbox" name="subtype127" id="subtype127" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype127">Knight</label><br/>
                                <input type="checkbox" name="subtype128" id="subtype128" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype128">Kobold</label><br/>
                                <input type="checkbox" name="subtype129" id="subtype129" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype129">Kor</label><br/>
                                <input type="checkbox" name="subtype130" id="subtype130" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype130">Koth</label><br/>
                                <input type="checkbox" name="subtype131" id="subtype131" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype131">Kraken</label><br/>
                                <input type="checkbox" name="subtype132" id="subtype132" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype132">Lady</label><br/>
                                <input type="checkbox" name="subtype133" id="subtype133" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype133">Lair</label><br/>
                                <input type="checkbox" name="subtype134" id="subtype134" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype134">Lammasu</label><br/>
                                <input type="checkbox" name="subtype135" id="subtype135" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype135">Leech</label><br/>
                                <input type="checkbox" name="subtype136" id="subtype136" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype136">Legend</label><br/>
                                <input type="checkbox" name="subtype137" id="subtype137" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype137">Leviathan</label><br/>
                                <input type="checkbox" name="subtype138" id="subtype138" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype138">Lhurgoyf</label><br/>
                                <input type="checkbox" name="subtype139" id="subtype139" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype139">Licid</label><br/>
                                <input type="checkbox" name="subtype140" id="subtype140" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype140">Liliana</label><br/>
                                <input type="checkbox" name="subtype141" id="subtype141" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype141">Lizard</label><br/>
                                <input type="checkbox" name="subtype142" id="subtype142" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype142">Locus</label><br/>
                                <input type="checkbox" name="subtype143" id="subtype143" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype143">Lord</label><br/>
                                <input type="checkbox" name="subtype144" id="subtype144" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype144">Manticore</label><br/>
                                <input type="checkbox" name="subtype145" id="subtype145" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype145">Masticore</label><br/>
                                <input type="checkbox" name="subtype146" id="subtype146" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype146">Mercenary</label><br/>
                                <input type="checkbox" name="subtype147" id="subtype147" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype147">Merfolk</label><br/>
                                <input type="checkbox" name="subtype148" id="subtype148" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype148">Metathran</label><br/>
                                <input type="checkbox" name="subtype149" id="subtype149" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype149">Mime</label><br/>
                                <input type="checkbox" name="subtype150" id="subtype150" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype150">Mine</label><br/>
                                <input type="checkbox" name="subtype151" id="subtype151" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype151">Minion</label><br/>
                                <input type="checkbox" name="subtype152" id="subtype152" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype152">Minotaur</label><br/>
                                <input type="checkbox" name="subtype153" id="subtype153" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype153">Monger</label><br/>
                                <input type="checkbox" name="subtype154" id="subtype154" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype154">Mongoose</label><br/>
                                <input type="checkbox" name="subtype155" id="subtype155" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype155">Monk</label><br/>
                                <input type="checkbox" name="subtype156" id="subtype156" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype156">Moonfolk</label><br/>
                                <input type="checkbox" name="subtype157" id="subtype157" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype157">Mountain</label><br/>
                                <input type="checkbox" name="subtype158" id="subtype158" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype158">Mummy</label><br/>
                                <input type="checkbox" name="subtype159" id="subtype159" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype159">Mutant</label><br/>
                                <input type="checkbox" name="subtype160" id="subtype160" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype160">Myr</label><br/>
                                <input type="checkbox" name="subtype161" id="subtype161" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype161">Mystic</label><br/>
                                <input type="checkbox" name="subtype162" id="subtype162" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype162">Nautilus</label><br/>
                                <input type="checkbox" name="subtype163" id="subtype163" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype163">Nephilim</label><br/>
                                <input type="checkbox" name="subtype164" id="subtype164" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype164">Nightmare</label><br/>
                                <input type="checkbox" name="subtype165" id="subtype165" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype165">Nightstalker</label><br/>
                                <input type="checkbox" name="subtype166" id="subtype166" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype166">Ninja</label><br/>
                                <input type="checkbox" name="subtype167" id="subtype167" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype167">Nissa</label><br/>
                                <input type="checkbox" name="subtype168" id="subtype168" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype168">Noggle</label><br/>
                                <input type="checkbox" name="subtype169" id="subtype169" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype169">Nomad</label><br/>
                                <input type="checkbox" name="subtype170" id="subtype170" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype170">Octopus</label><br/>
                                <input type="checkbox" name="subtype171" id="subtype171" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype171">Ogre</label><br/>
                                <input type="checkbox" name="subtype172" id="subtype172" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype172">Ooze</label><br/>
                                <input type="checkbox" name="subtype173" id="subtype173" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype173">Orc</label><br/>
                                <input type="checkbox" name="subtype174" id="subtype174" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype174">Orgg</label><br/>
                                <input type="checkbox" name="subtype175" id="subtype175" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype175">Ouphe</label><br/>
                                <input type="checkbox" name="subtype176" id="subtype176" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype176">Ox</label><br/>
                                <input type="checkbox" name="subtype177" id="subtype177" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype177">Oyster</label><br/>
                                <input type="checkbox" name="subtype178" id="subtype178" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype178">Paratrooper</label><br/>
                                <input type="checkbox" name="subtype179" id="subtype179" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype179">Pegasus</label><br/>
                                <input type="checkbox" name="subtype180" id="subtype180" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype180">Pest</label><br/>
                                <input type="checkbox" name="subtype181" id="subtype181" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype181">Phelddagrif</label><br/>
                                <input type="checkbox" name="subtype182" id="subtype182" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype182">Phoenix</label><br/>
                                <input type="checkbox" name="subtype183" id="subtype183" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype183">Pirate</label><br/>
                                <input type="checkbox" name="subtype184" id="subtype184" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype184">Plains</label><br/>
                                <input type="checkbox" name="subtype185" id="subtype185" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype185">Plant</label><br/>
                                <input type="checkbox" name="subtype186" id="subtype186" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype186">Power-Plant</label><br/>
                                <input type="checkbox" name="subtype187" id="subtype187" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype187">Praetor</label><br/>
                                <input type="checkbox" name="subtype188" id="subtype188" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype188">Proper</label><br/>
                                <input type="checkbox" name="subtype189" id="subtype189" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype189">Rabbit</label><br/>
                                <input type="checkbox" name="subtype190" id="subtype190" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype190">Rat</label><br/>
                                <input type="checkbox" name="subtype191" id="subtype191" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype191">Rebel</label><br/>
                                <input type="checkbox" name="subtype192" id="subtype192" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype192">Rhino</label><br/>
                                <input type="checkbox" name="subtype193" id="subtype193" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype193">Rigger</label><br/>
                                <input type="checkbox" name="subtype194" id="subtype194" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype194">Rogue</label><br/>
                                <input type="checkbox" name="subtype195" id="subtype195" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype195">Salamander</label><br/>
                                <input type="checkbox" name="subtype196" id="subtype196" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype196">Samurai</label><br/>
                                <input type="checkbox" name="subtype197" id="subtype197" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype197">Saproling</label><br/>
                                <input type="checkbox" name="subtype198" id="subtype198" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype198">Sarkhan</label><br/>
                                <input type="checkbox" name="subtype199" id="subtype199" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype199">Satyr</label><br/>
                                <input type="checkbox" name="subtype200" id="subtype200" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype200">Scarecrow</label><br/>
                                <input type="checkbox" name="subtype201" id="subtype201" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype201">Scorpion</label><br/>
                                <input type="checkbox" name="subtype202" id="subtype202" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype202">Scout</label><br/>
                                <input type="checkbox" name="subtype203" id="subtype203" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype203">Serpent</label><br/>
                                <input type="checkbox" name="subtype204" id="subtype204" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype204">Shade</label><br/>
                                <input type="checkbox" name="subtype205" id="subtype205" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype205">Shaman</label><br/>
                                <input type="checkbox" name="subtype206" id="subtype206" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype206">Shapeshifter</label><br/>
                                <input type="checkbox" name="subtype207" id="subtype207" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype207">Sheep</label><br/>
                                <input type="checkbox" name="subtype208" id="subtype208" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype208">Ship</label><br/>
                                <input type="checkbox" name="subtype209" id="subtype209" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype209">Shrine</label><br/>
                                <input type="checkbox" name="subtype210" id="subtype210" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype210">Siren</label><br/>
                                <input type="checkbox" name="subtype211" id="subtype211" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype211">Skeleton</label><br/>
                                <input type="checkbox" name="subtype212" id="subtype212" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype212">Slith</label><br/>
                                <input type="checkbox" name="subtype213" id="subtype213" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype213">Sliver</label><br/>
                                <input type="checkbox" name="subtype214" id="subtype214" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype214">Slug</label><br/>
                                <input type="checkbox" name="subtype215" id="subtype215" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype215">Snake</label><br/>
                                <input type="checkbox" name="subtype216" id="subtype216" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype216">Soldier</label><br/>
                                <input type="checkbox" name="subtype217" id="subtype217" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype217">Soltari</label><br/>
                                <input type="checkbox" name="subtype218" id="subtype218" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype218">Sorin</label><br/>
                                <input type="checkbox" name="subtype219" id="subtype219" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype219">Spawn</label><br/>
                                <input type="checkbox" name="subtype220" id="subtype220" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype220">Specter</label><br/>
                                <input type="checkbox" name="subtype221" id="subtype221" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype221">Spellshaper</label><br/>
                                <input type="checkbox" name="subtype222" id="subtype222" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype222">Sphinx</label><br/>
                                <input type="checkbox" name="subtype223" id="subtype223" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype223">Spider</label><br/>
                                <input type="checkbox" name="subtype224" id="subtype224" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype224">Spike</label><br/>
                                <input type="checkbox" name="subtype225" id="subtype225" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype225">Spirit</label><br/>
                                <input type="checkbox" name="subtype226" id="subtype226" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype226">Sponge</label><br/>
                                <input type="checkbox" name="subtype227" id="subtype227" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype227">Squid</label><br/>
                                <input type="checkbox" name="subtype228" id="subtype228" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype228">Squirrel</label><br/>
                                <input type="checkbox" name="subtype229" id="subtype229" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype229">Starfish</label><br/>
                                <input type="checkbox" name="subtype230" id="subtype230" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype230">Surrakar</label><br/>
                                <input type="checkbox" name="subtype231" id="subtype231" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype231">Swamp</label><br/>
                                <input type="checkbox" name="subtype232" id="subtype232" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype232">Tamiyo</label><br/>
                                <input type="checkbox" name="subtype233" id="subtype233" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype233">Tezzeret</label><br/>
                                <input type="checkbox" name="subtype234" id="subtype234" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype234">Thalakos</label><br/>
                                <input type="checkbox" name="subtype235" id="subtype235" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype235">Thopter</label><br/>
                                <input type="checkbox" name="subtype236" id="subtype236" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype236">Thrull</label><br/>
                                <input type="checkbox" name="subtype237" id="subtype237" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype237">Tibalt</label><br/>
                                <input type="checkbox" name="subtype238" id="subtype238" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype238">Tower</label><br/>
                                <input type="checkbox" name="subtype239" id="subtype239" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype239">Townsfolk</label><br/>
                                <input type="checkbox" name="subtype240" id="subtype240" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype240">Trap</label><br/>
                                <input type="checkbox" name="subtype241" id="subtype241" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype241">Treefolk</label><br/>
                                <input type="checkbox" name="subtype242" id="subtype242" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype242">Troll</label><br/>
                                <input type="checkbox" name="subtype243" id="subtype243" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype243">Turtle</label><br/>
                                <input type="checkbox" name="subtype244" id="subtype244" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype244">Unicorn</label><br/>
                                <input type="checkbox" name="subtype245" id="subtype245" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype245">Urza's</label><br/>
                                <input type="checkbox" name="subtype246" id="subtype246" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype246">Vampire</label><br/>
                                <input type="checkbox" name="subtype247" id="subtype247" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype247">Vedalken</label><br/>
                                <input type="checkbox" name="subtype248" id="subtype248" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype248">Venser</label><br/>
                                <input type="checkbox" name="subtype249" id="subtype249" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype249">Viashino</label><br/>
                                <input type="checkbox" name="subtype250" id="subtype250" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype250">Volver</label><br/>
                                <input type="checkbox" name="subtype251" id="subtype251" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype251">Waiter</label><br/>
                                <input type="checkbox" name="subtype252" id="subtype252" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype252">Wall</label><br/>
                                <input type="checkbox" name="subtype253" id="subtype253" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype253">Warrior</label><br/>
                                <input type="checkbox" name="subtype254" id="subtype254" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype254">Weird</label><br/>
                                <input type="checkbox" name="subtype255" id="subtype255" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype255">Werewolf</label><br/>
                                <input type="checkbox" name="subtype256" id="subtype256" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype256">Whale</label><br/>
                                <input type="checkbox" name="subtype257" id="subtype257" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype257">Wizard</label><br/>
                                <input type="checkbox" name="subtype258" id="subtype258" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype258">Wolf</label><br/>
                                <input type="checkbox" name="subtype259" id="subtype259" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype259">Wolverine</label><br/>
                                <input type="checkbox" name="subtype260" id="subtype260" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype260">Wombat</label><br/>
                                <input type="checkbox" name="subtype261" id="subtype261" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype261">Worm</label><br/>
                                <input type="checkbox" name="subtype262" id="subtype262" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype262">Wraith</label><br/>
                                <input type="checkbox" name="subtype263" id="subtype263" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype263">Wurm</label><br/>
                                <input type="checkbox" name="subtype264" id="subtype264" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype264">Yeti</label><br/>
                                <input type="checkbox" name="subtype265" id="subtype265" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype265">Zombie</label><br/>
                                <input type="checkbox" name="subtype266" id="subtype266" value="1" onChange="document.form.subtypeany.checked=false; populateScroll();"/><label for="subtype266">Zubera</label><br/>                    
                            </div>
 						</div>                       
					</div>
                    
                </div>
                
                <div id="top5">
                
	                <div class="searchfilterdiv">
                    	<h2>Ability:</h2>
                        <div class="boxcontainer">
                            <select name="abilitymatch" id="abilitymatch" onChange="populateScroll();">
                                <option value="0" selected>Match Any</option>
                                <option value="1">Match Only</option>
                                <option value="2">Match All</option>
                                <option value="3">Match Exact</option>
                            </select>
                            <div id="abilityscrolldiv">
                                <input type="checkbox" name="abilityany" id="abilityany" value="1" checked="checked" onChange="for(i=0;i<138;i++)document.form['ability'+i].checked=false; populateScroll();"/><label for="abilityany">Any Ability</label><br/>
                                <input type="checkbox" name="ability0" id="ability0" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability0">Absorb</label><br/>
                                <input type="checkbox" name="ability1" id="ability1" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability1">Activate</label><br/>
                                <input type="checkbox" name="ability2" id="ability2" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability2">Affinity</label><br/>
                                <input type="checkbox" name="ability3" id="ability3" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability3">Amplify</label><br/>
                                <input type="checkbox" name="ability4" id="ability4" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability4">Annihilator</label><br/>
                                <input type="checkbox" name="ability5" id="ability5" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability5">Attach</label><br/>
                                <input type="checkbox" name="ability6" id="ability6" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability6">Aura Swap</label><br/>
                                <input type="checkbox" name="ability7" id="ability7" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability7">Banding</label><br/>
                                <input type="checkbox" name="ability8" id="ability8" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability8">Bands With</label><br/>
                                <input type="checkbox" name="ability9" id="ability9" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability9">Battle Cry</label><br/>
                                <input type="checkbox" name="ability10" id="ability10" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability10">Bloodthirst</label><br/>
                                <input type="checkbox" name="ability11" id="ability11" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability11">Bushido</label><br/>
                                <input type="checkbox" name="ability12" id="ability12" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability12">Buyback</label><br/>
                                <input type="checkbox" name="ability13" id="ability13" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability13">Cascade</label><br/>
                                <input type="checkbox" name="ability14" id="ability14" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability14">Cast</label><br/>
                                <input type="checkbox" name="ability15" id="ability15" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability15">Champion</label><br/>
                                <input type="checkbox" name="ability16" id="ability16" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability16">Changeling</label><br/>
                                <input type="checkbox" name="ability17" id="ability17" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability17">Channel</label><br/>
                                <input type="checkbox" name="ability18" id="ability18" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability18">Choose</label><br/>
                                <input type="checkbox" name="ability19" id="ability19" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability19">Chroma</label><br/>
                                <input type="checkbox" name="ability20" id="ability20" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability20">Clash</label><br/>
                                <input type="checkbox" name="ability21" id="ability21" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability21">Conspire</label><br/>
                                <input type="checkbox" name="ability22" id="ability22" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability22">Convoke</label><br/>
                                <input type="checkbox" name="ability23" id="ability23" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability23">Counter</label><br/>
                                <input type="checkbox" name="ability24" id="ability24" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability24">Cumulative Upkeep</label><br/>
                                <input type="checkbox" name="ability25" id="ability25" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability25">Cycling</label><br/>
                                <input type="checkbox" name="ability26" id="ability26" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability26">Deathtouch</label><br/>
                                <input type="checkbox" name="ability27" id="ability27" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability27">Defender</label><br/>
                                <input type="checkbox" name="ability28" id="ability28" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability28">Delve</label><br/>
                                <input type="checkbox" name="ability29" id="ability29" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability29">Destroy</label><br/>
                                <input type="checkbox" name="ability30" id="ability30" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability30">Devour</label><br/>
                                <input type="checkbox" name="ability31" id="ability31" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability31">Discard</label><br/>
                                <input type="checkbox" name="ability32" id="ability32" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability32">Domain</label><br/>
                                <input type="checkbox" name="ability33" id="ability33" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability33">Double Strike</label><br/>
                                <input type="checkbox" name="ability34" id="ability34" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability34">Dredge</label><br/>
                                <input type="checkbox" name="ability35" id="ability35" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability35">Echo</label><br/>
                                <input type="checkbox" name="ability36" id="ability36" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability36">Enchant</label><br/>
                                <input type="checkbox" name="ability37" id="ability37" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability37">Entwine</label><br/>
                                <input type="checkbox" name="ability38" id="ability38" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability38">Epic</label><br/>
                                <input type="checkbox" name="ability39" id="ability39" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability39">Equip</label><br/>
                                <input type="checkbox" name="ability40" id="ability40" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability40">Evoke</label><br/>
                                <input type="checkbox" name="ability41" id="ability41" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability41">Exalted</label><br/>
                                <input type="checkbox" name="ability42" id="ability42" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability42">Exchange</label><br/>
                                <input type="checkbox" name="ability43" id="ability43" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability43">Exile</label><br/>
                                <input type="checkbox" name="ability44" id="ability44" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability44">Fading</label><br/>
                                <input type="checkbox" name="ability45" id="ability45" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability45">Fateful Hour</label><br/>
                                <input type="checkbox" name="ability46" id="ability46" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability46">Fateseal</label><br/>
                                <input type="checkbox" name="ability47" id="ability47" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability47">Fear</label><br/>
                                <input type="checkbox" name="ability48" id="ability48" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability48">Fight</label><br/>
                                <input type="checkbox" name="ability49" id="ability49" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability49">First Strike</label><br/>
                                <input type="checkbox" name="ability50" id="ability50" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability50">Flanking</label><br/>
                                <input type="checkbox" name="ability51" id="ability51" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability51">Flash</label><br/>
                                <input type="checkbox" name="ability52" id="ability52" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability52">Flashback</label><br/>
                                <input type="checkbox" name="ability53" id="ability53" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability53">Flying</label><br/>
                                <input type="checkbox" name="ability54" id="ability54" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability54">Forecast</label><br/>
                                <input type="checkbox" name="ability55" id="ability55" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability55">Forestwalk</label><br/>
                                <input type="checkbox" name="ability56" id="ability56" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability56">Fortify</label><br/>
                                <input type="checkbox" name="ability57" id="ability57" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability57">Frenzy</label><br/>
                                <input type="checkbox" name="ability58" id="ability58" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability58">Graft</label><br/>
                                <input type="checkbox" name="ability59" id="ability59" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability59">Grandeur</label><br/>
                                <input type="checkbox" name="ability60" id="ability60" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability60">Gravestorm</label><br/>
                                <input type="checkbox" name="ability61" id="ability61" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability61">Haste</label><br/>
                                <input type="checkbox" name="ability62" id="ability62" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability62">Haunt</label><br/>
                                <input type="checkbox" name="ability63" id="ability63" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability63">Hellbent</label><br/>
                                <input type="checkbox" name="ability64" id="ability64" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability64">Hexproof</label><br/>
                                <input type="checkbox" name="ability65" id="ability65" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability65">Hideaway</label><br/>
                                <input type="checkbox" name="ability66" id="ability66" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability66">Horsemanship</label><br/>
                                <input type="checkbox" name="ability67" id="ability67" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability67">Imprint</label><br/>
                                <input type="checkbox" name="ability68" id="ability68" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability68">Indestructable</label><br/>
                                <input type="checkbox" name="ability69" id="ability69" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability69">Infect</label><br/>
                                <input type="checkbox" name="ability70" id="ability70" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability70">Intimidate</label><br/>
                                <input type="checkbox" name="ability71" id="ability71" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability71">Islandwalk</label><br/>
                                <input type="checkbox" name="ability72" id="ability72" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability72">Kicker</label><br/>
                                <input type="checkbox" name="ability73" id="ability73" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability73">Kinship</label><br/>
                                <input type="checkbox" name="ability74" id="ability74" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability74">Landfall</label><br/>
                                <input type="checkbox" name="ability75" id="ability75" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability75">Landwalk</label><br/>
                                <input type="checkbox" name="ability76" id="ability76" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability76">Level Up</label><br/>
                                <input type="checkbox" name="ability77" id="ability77" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability77">Lifelink</label><br/>
                                <input type="checkbox" name="ability78" id="ability78" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability78">Living Weapon</label><br/>
                                <input type="checkbox" name="ability79" id="ability79" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability79">Madness</label><br/>
                                <input type="checkbox" name="ability80" id="ability80" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability80">Metalcraft</label><br/>
                                <input type="checkbox" name="ability81" id="ability81" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability81">Miracle</label><br/>
                                <input type="checkbox" name="ability82" id="ability82" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability82">Modular</label><br/>
                                <input type="checkbox" name="ability83" id="ability83" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability83">Morbid</label><br/>
                                <input type="checkbox" name="ability84" id="ability84" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability84">Morph</label><br/>
                                <input type="checkbox" name="ability85" id="ability85" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability85">Mountainwalk</label><br/>
                                <input type="checkbox" name="ability86" id="ability86" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability86">Multikicker</label><br/>
                                <input type="checkbox" name="ability87" id="ability87" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability87">Ninjutsu</label><br/>
                                <input type="checkbox" name="ability88" id="ability88" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability88">Offering</label><br/>
                                <input type="checkbox" name="ability89" id="ability89" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability89">Persist</label><br/>
                                <input type="checkbox" name="ability90" id="ability90" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability90">Phasing</label><br/>
                                <input type="checkbox" name="ability91" id="ability91" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability91">Piles</label><br/>
                                <input type="checkbox" name="ability92" id="ability92" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability92">Plainswalk</label><br/>
                                <input type="checkbox" name="ability93" id="ability93" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability93">Play</label><br/>
                                <input type="checkbox" name="ability94" id="ability94" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability94">Poisonous</label><br/>
                                <input type="checkbox" name="ability95" id="ability95" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability95">Proliferate</label><br/>
                                <input type="checkbox" name="ability96" id="ability96" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability96">Protection</label><br/>
                                <input type="checkbox" name="ability97" id="ability97" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability97">Provoke</label><br/>
                                <input type="checkbox" name="ability98" id="ability98" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability98">Prowl</label><br/>
                                <input type="checkbox" name="ability99" id="ability99" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability99">Radiance</label><br/>
                                <input type="checkbox" name="ability100" id="ability100" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability100">Rampage</label><br/>
                                <input type="checkbox" name="ability101" id="ability101" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability101">Reach</label><br/>
                                <input type="checkbox" name="ability102" id="ability102" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability102">Rebound</label><br/>
                                <input type="checkbox" name="ability103" id="ability103" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability103">Recover</label><br/>
                                <input type="checkbox" name="ability104" id="ability104" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability104">Regenerate</label><br/>
                                <input type="checkbox" name="ability105" id="ability105" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability105">Reinforce</label><br/>
                                <input type="checkbox" name="ability106" id="ability106" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability106">Replicate</label><br/>
                                <input type="checkbox" name="ability107" id="ability107" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability107">Retrace</label><br/>
                                <input type="checkbox" name="ability108" id="ability108" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability108">Reveal</label><br/>
                                <input type="checkbox" name="ability109" id="ability109" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability109">Ripple</label><br/>
                                <input type="checkbox" name="ability110" id="ability110" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability110">Sacrifice</label><br/>
                                <input type="checkbox" name="ability111" id="ability111" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability111">Scry</label><br/>
                                <input type="checkbox" name="ability112" id="ability112" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability112">Search</label><br/>
                                <input type="checkbox" name="ability113" id="ability113" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability113">Shadow</label><br/>
                                <input type="checkbox" name="ability114" id="ability114" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability114">Shroud</label><br/>
                                <input type="checkbox" name="ability115" id="ability115" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability115">Soulbond</label><br/>
                                <input type="checkbox" name="ability116" id="ability116" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability116">Soulshift</label><br/>
                                <input type="checkbox" name="ability117" id="ability117" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability117">Splice</label><br/>
                                <input type="checkbox" name="ability118" id="ability118" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability118">Split Second</label><br/>
                                <input type="checkbox" name="ability119" id="ability119" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability119">Storm</label><br/>
                                <input type="checkbox" name="ability120" id="ability120" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability120">Sunburst</label><br/>
                                <input type="checkbox" name="ability121" id="ability121" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability121">Suspend</label><br/>
                                <input type="checkbox" name="ability122" id="ability122" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability122">Swampwalk</label><br/>
                                <input type="checkbox" name="ability123" id="ability123" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability123">Sweep</label><br/>
                                <input type="checkbox" name="ability124" id="ability124" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability124">Tap</label><br/>
                                <input type="checkbox" name="ability125" id="ability125" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability125">Threshold</label><br/>
                                <input type="checkbox" name="ability126" id="ability126" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability126">Totem Armor</label><br/>
                                <input type="checkbox" name="ability127" id="ability127" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability127">Trample</label><br/>
                                <input type="checkbox" name="ability128" id="ability128" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability128">Transfigure</label><br/>
                                <input type="checkbox" name="ability129" id="ability129" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability129">Transform</label><br/>
                                <input type="checkbox" name="ability130" id="ability130" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability130">Transmute</label><br/>
                                <input type="checkbox" name="ability131" id="ability131" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability131">Unblockable</label><br/>
                                <input type="checkbox" name="ability132" id="ability132" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability132">Undying</label><br/>
                                <input type="checkbox" name="ability133" id="ability133" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability133">Unearth</label><br/>
                                <input type="checkbox" name="ability134" id="ability134" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability134">Untap</label><br/>
                                <input type="checkbox" name="ability135" id="ability135" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability135">Vanishing</label><br/>
                                <input type="checkbox" name="ability136" id="ability136" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability136">Vigilance</label><br/>
                                <input type="checkbox" name="ability137" id="ability137" value="1" onChange="document.form.abilityany.checked=false; populateScroll();"/><label for="ability137">Wither</label><br/>
                            </div>
						</div>                            
					</div> 
                                           
                </div>
            </form>    
        </div>
        <div id="topbuttondiv">
			<h2 id="buttontext">- - - Hide Filters - - -</h2>
        </div>
    </div>
    <div id="bigbottomdiv">
		<div id="bottomcontainerdiv">
        
        	<div id="resultscontainer">
            
            	<div id="bottom1">
                
	                <div class="searchfilterdiv">
                    	<h2>Results:</h2>
                        <div class="boxcontainer">
                            <select size="2" id="nameselect" onChange="populateWindow()"></select>
						</div>                            
                    </div>
                    
				</div>
                
            </div>
            
            <div id="cardinfocontainer">
            
                <div id="bottom2">
                
	                <div class="searchfilterdiv">
                    	<h2>Card Image:</h2>
                        <div class="boxcontainer">
	                        <img src="images/cardimages/back.jpg" id="cardimageback" alt="Card Image"/>
						</div>
                    </div>
                    
                </div>
                
                <div id="bottom3">
                
	                <div class="searchfilterdiv">
                    	<h2>Oracle Text:</h2>
                        <div class="boxcontainer">
                            <table id="cardtable">
                                <tr>
                                    <td class="ctleft">Name:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">Cost:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">Type:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">Set:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">Abilities:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">Flavor:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">P/T:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">Loyalty:</td>
                                    <td class="ctright"></td>
                                </tr>
                                <tr>
                                    <td class="ctleft">Artist:</td>
                                    <td class="ctright"></td>
                                </tr>
                            </table>                     
						</div>
                    </div>
                    
                </div>
                
                <div id="bottom4">
                
	                <div class="searchfilterdiv">
                    	<h2>Card Rulings:</h2>
                        <div class="boxcontainer">
                            <div id="rulingsscrolldiv"></div>
						</div>
                    </div>
                    
                </div>
                
            </div>    
        </div>
    </div>
    <script type="text/javascript" src="scripts/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="scripts/js/searchmtg.js"></script>
    <script type="text/javascript" src="scripts/js/jquery.cookie.js"></script>
    <script type="text/javascript">
		window.onload = setSizes;
    </script>
</body>

</html>