//====================================================<Animates Filters>
$("#topbuttondiv").toggle(
	function () 
		{
			var topContainerDivHeight = document.getElementById("topcontainerdiv").offsetHeight;
			$("#buttontext").html("- - - Show Filters - - -");
			$("#bigtopdiv").animate({"top": -topContainerDivHeight}, "slow");
			$("#bigbottomdiv").animate({"top": "-="+topContainerDivHeight}, "slow");
			$("#topbuttondiv").hover(
				function () {$("#bigtopdiv").filter(':not(:animated)').animate({"top": -topContainerDivHeight+5}, "fast");},
				function () {$("#bigtopdiv").animate({"top": -topContainerDivHeight}, "fast");}
			);
		},
	function () 
		{
			var topContainerDivHeight = document.getElementById("topcontainerdiv").offsetHeight;
			$("#buttontext").html("- - - Hide Filters - - -");
			$("#bigtopdiv").animate({"top": 0}, "slow");
			$("#bigbottomdiv").animate({"top": "+="+topContainerDivHeight}, "slow");
			$("#topbuttondiv").unbind('mouseenter mouseleave');
		}
);
//====================================================</Animates Filters>

//====================================================<Lightbox>
function lightbox()
	{
		if($('#lightbox').size() == 0)
			{
				$('body').prepend('<div id="lightbox-shadow"><div id="lightbox"></div></div>');
				$('#lightbox').click(function(e){closeLightbox();});
				$('#lightbox-shadow').click(function(e){closeLightbox();});
			}
		$('#lightbox').empty();
		$('#lightbox').append('<img src="'+$('#cardimage').attr('src')+'" id="lightboxcardimage">');
		$('#lightbox-shadow').css('top', $(window).scrollTop() + 'px');
		$('#lightbox').show();
		$('#lightbox-shadow').show();
		if (window.innerHeight >= 680)
			{
				document.getElementById('lightbox').style.height = 680 + "px";
				document.getElementById('lightbox').style.width = 480 + "px";
			}
		else 
			{
				document.getElementById('lightbox').style.height = (window.innerHeight -20) + "px";
				document.getElementById('lightbox').style.width = (window.innerHeight -20) * (480/680) + "px";
			}
		$('#lightbox').css('top', (($(window).height() - $('#lightboxcardimage').height())/2) + 'px');
	}

function closeLightbox()
	{
		$('#lightbox').hide();
		$('#lightbox-shadow').hide();
		$('#lightbox').empty();
	}
//====================================================</Lightbox>

//====================================================<Sets #topcontainerdiv height based on #top1>
function setSizes() 
	{
		var top1Height = document.getElementById("top1").offsetHeight;
		document.getElementById("topcontainerdiv").style.height = top1Height + "px";
	}
//====================================================</Sets #topcontainerdiv height based on #top1>

//====================================================<Creates Variable ajaxRequest;>
var ajaxRequest;
try {ajaxRequest = new XMLHttpRequest();}
catch (e)
	{
		try	{ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");}
		catch (e)
			{
				try	{ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");}
				catch (e) {alert("Your browser does not suppor AJAX requests. A browser upgrade is required for this website to be functional.");}
			}
	}
//====================================================</Creates Variable ajaxRequest;>

//====================================================<Checks Set Filters Upon Quick Select;>
function quickSet()
	{
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 0)
			{
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('setany').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 1)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set96').checked = 1;
				document.getElementById('set97').checked = 1;
				document.getElementById('set98').checked = 1;
				document.getElementById('set99').checked = 1;
				document.getElementById('set100').checked = 1;
				document.getElementById('set101').checked = 1;
				document.getElementById('set102').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 2)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set88').checked = 1;
				document.getElementById('set89').checked = 1;
				document.getElementById('set90').checked = 1;
				document.getElementById('set91').checked = 1;
				document.getElementById('set92').checked = 1;
				document.getElementById('set93').checked = 1;
				document.getElementById('set94').checked = 1;
				document.getElementById('set95').checked = 1;
				document.getElementById('set96').checked = 1;
				document.getElementById('set97').checked = 1;
				document.getElementById('set98').checked = 1;
				document.getElementById('set99').checked = 1;
				document.getElementById('set100').checked = 1;
				document.getElementById('set101').checked = 1;
				document.getElementById('set102').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 3)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set67').checked = 1;
				document.getElementById('set68').checked = 1;
				document.getElementById('set69').checked = 1;
				document.getElementById('set70').checked = 1;
				document.getElementById('set71').checked = 1;
				document.getElementById('set72').checked = 1;
				document.getElementById('set73').checked = 1;
				document.getElementById('set74').checked = 1;
				document.getElementById('set75').checked = 1;
				document.getElementById('set76').checked = 1;
				document.getElementById('set77').checked = 1;
				document.getElementById('set78').checked = 1;
				document.getElementById('set79').checked = 1;
				document.getElementById('set80').checked = 1;
				document.getElementById('set81').checked = 1;
				document.getElementById('set82').checked = 1;
				document.getElementById('set83').checked = 1;
				document.getElementById('set84').checked = 1;
				document.getElementById('set85').checked = 1;
				document.getElementById('set86').checked = 1;
				document.getElementById('set87').checked = 1;
				document.getElementById('set88').checked = 1;
				document.getElementById('set89').checked = 1;
				document.getElementById('set90').checked = 1;
				document.getElementById('set91').checked = 1;
				document.getElementById('set92').checked = 1;
				document.getElementById('set93').checked = 1;
				document.getElementById('set94').checked = 1;
				document.getElementById('set95').checked = 1;
				document.getElementById('set96').checked = 1;
				document.getElementById('set97').checked = 1;
				document.getElementById('set98').checked = 1;
				document.getElementById('set99').checked = 1;
				document.getElementById('set100').checked = 1;
				document.getElementById('set101').checked = 1;
				document.getElementById('set102').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 4)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set100').checked = 1;
				document.getElementById('set101').checked = 1;
				document.getElementById('set102').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 5)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set96').checked = 1;
				document.getElementById('set97').checked = 1;
				document.getElementById('set98').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 6)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set92').checked = 1;
				document.getElementById('set93').checked = 1;
				document.getElementById('set94').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 7)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set88').checked = 1;
				document.getElementById('set89').checked = 1;
				document.getElementById('set90').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 8)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set84').checked = 1;
				document.getElementById('set85').checked = 1;
				document.getElementById('set86').checked = 1;
				document.getElementById('set87').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 9)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set79').checked = 1;
				document.getElementById('set80').checked = 1;
				document.getElementById('set81').checked = 1;
				document.getElementById('set82').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 10)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set75').checked = 1;
				document.getElementById('set76').checked = 1;
				document.getElementById('set77').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 11)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set71').checked = 1;
				document.getElementById('set72').checked = 1;
				document.getElementById('set73').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 12)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set68').checked = 1;
				document.getElementById('set69').checked = 1;
				document.getElementById('set70').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 13)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set64').checked = 1;
				document.getElementById('set65').checked = 1;
				document.getElementById('set66').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 14)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set61').checked = 1;
				document.getElementById('set62').checked = 1;
				document.getElementById('set63').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 15)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set57').checked = 1;
				document.getElementById('set58').checked = 1;
				document.getElementById('set59').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 16)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set54').checked = 1;
				document.getElementById('set55').checked = 1;
				document.getElementById('set56').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 17)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set50').checked = 1;
				document.getElementById('set51').checked = 1;
				document.getElementById('set52').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 18)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set47').checked = 1;
				document.getElementById('set48').checked = 1;
				document.getElementById('set49').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 19)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set43').checked = 1;
				document.getElementById('set44').checked = 1;
				document.getElementById('set45').checked = 1;
			}
		if (document.getElementById('setmatch').options[document.getElementById('setmatch').selectedIndex].value == 20)
			{
				document.getElementById('setany').checked = 0;
				for (i=0; i<103; i++) {document.getElementById('set'+i).checked = 0}
				document.getElementById('set40').checked = 1;
				document.getElementById('set42').checked = 1;
				document.getElementById('set78').checked = 1;
			}
	}
//====================================================<Checks Set Filters Upon Quick Select;>

//====================================================<Creates Function populateScroll() - Resets Empty Checkboxes, Generates $_GET Data, Passes To Advancesearch.php VIA AJAX, Returns Names to #resultssfieldset>
function populateScroll()
	{
		var colorCheck = 0;
		for (i=0; i<5; i++)
			{
				if (document.getElementById('color'+i).checked == 1) {var colorCheck = 1}
			}
		if (colorCheck == 0) {document.getElementById('colorany').checked = 1;}	

		var rarityCheck = 0;
		for (i=0; i<4; i++)
			{
				if (document.getElementById('rarity'+i).checked == 1) {var rarityCheck = 1}
			}
		if (rarityCheck == 0) {document.getElementById('rarityany').checked = 1;}	

		var typeCheck = 0;
		for (i=0; i<11; i++)
			{
				if (document.getElementById('type'+i).checked == 1) {var typeCheck = 1}
			}
		if (typeCheck == 0) {document.getElementById('typeany').checked = 1;}	

		var setCheck = 0;
		for (i=0; i<103; i++)
			{
				if (document.getElementById('set'+i).checked == 1) {var setCheck = 1}
			}
		if (setCheck == 0) {document.getElementById('setany').checked = 1;}	

		var abilityCheck = 0;
		for (i=0; i<138; i++)
			{
				if (document.getElementById('ability'+i).checked == 1) {var abilityCheck = 1}
			}
		if (abilityCheck == 0) {document.getElementById('abilityany').checked = 1;}	

		var subtypeCheck = 0;
		for (i=0; i<267; i++)
			{
				if (document.getElementById('subtype'+i).checked == 1) {var subtypeCheck = 1}
			}
		if (subtypeCheck == 0) {document.getElementById('subtypeany').checked = 1;}	

		ajaxRequest.onreadystatechange = function() 
			{
				if (ajaxRequest.readyState == 4) {document.getElementById('resultscontainer').innerHTML = ajaxRequest.responseText;}
			}
		
		var formData = new Array();

		if(document.getElementById('namefield').value.length != 0) {formData.push("namefield=" + document.getElementById('namefield').value);}
		formData.push("namematch=" + document.getElementById('namematch').options[document.getElementById('namematch').selectedIndex].value);

		if($('#colorany').attr('checked')) {formData.push("colorany=1");}
		for (i=0; i<5; i++) 
			{
				if($("#color"+i).attr('checked')) {formData.push("color" + i + "=1");}
			}
		formData.push("colormatch=" + document.getElementById('colormatch').selectedIndex);

		if($('#rarityany').attr('checked')) {formData.push("rarityany=1");}
		for (i=0; i<4; i++) 
			{
				if($("#rarity"+i).attr('checked')) {formData.push("rarity" + i + "=1");}
			}
			
		formData.push("cmcmin=" + document.getElementById('cmcmin').options[document.getElementById('cmcmin').selectedIndex].value);
		formData.push("cmcmax=" + document.getElementById('cmcmax').options[document.getElementById('cmcmax').selectedIndex].value);
		if(document.getElementById('cmccont').value.length != 0) {formData.push("cmccont=" + document.getElementById('cmccont').value);}
		formData.push("cmcx=" + document.getElementById('cmcx').selectedIndex);
			
		if($('#typeany').attr('checked')) {formData.push("typeany=1");}
		for (i=0; i<11; i++) 
			{
				if($("#type"+i).attr('checked')) {formData.push("type" + i + "=1");}
			}
		formData.push("typematch=" + document.getElementById('typematch').selectedIndex);
			
		formData.push("sortby=" + document.getElementById('sortby').options[document.getElementById('sortby').selectedIndex].value);
		formData.push("sortbydir=" + document.getElementById('sortbydir').options[document.getElementById('sortbydir').selectedIndex].value);
		
		if($('#setany').attr('checked')) {formData.push("setany=1");}
		for (i=0; i<103; i++) 
			{
				if($("#set"+i).attr('checked')) {formData.push("set" + i + "=1");}
			}
						
		if($('#abilityany').attr('checked')) {formData.push("abilityany=1");}
		for (i=0; i<138; i++) 
			{
				if($("#ability"+i).attr('checked')) {formData.push("ability" + i + "=1");}
			}
		formData.push("abilitymatch=" + document.getElementById('abilitymatch').selectedIndex);
		
		if($('#subtypeany').attr('checked')) {formData.push("subtypeany=1");}
		for (i=0; i<267; i++) 
			{
				if($("#subtype"+i).attr('checked')) {formData.push("subtype" + i + "=1");}
			}
		formData.push("subtypematch=" + document.getElementById('subtypematch').selectedIndex);
		
		ajaxRequest.open("GET", "scripts/php/advancesearch.php?" + formData.join("&"));
		ajaxRequest.send(null);
	};
//====================================================</Creates Function populateScroll() - Generates $_GET Data, Passes To Advancesearch.php VIA AJAX, Returns Names in #nameselect>

//====================================================<Creates Function populateWindow() - Passes selectedIndex.Value To Query DB, Return Card Info To #rightcontainerdiv>
function populateWindow()
	{
		ajaxRequest.onreadystatechange = function()
			{
				if (ajaxRequest.readyState == 4) {
					document.getElementById('cardinfocontainer').innerHTML = ajaxRequest.responseText;
				}
			}
		
		ajaxRequest.open("GET", "scripts/php/advancesearch2.php?q=" + document.getElementById('nameselect').options[document.getElementById('nameselect').selectedIndex].value);
		ajaxRequest.send(null);
	};
//====================================================</Creates Function populateWindow() - Passes selectedIndex.Value To Query DB, Return Card Info To #rightcontainerdiv>

//====================================================<Creates Function resetForm()
function resetForm()
	{
		form.reset()
		document.getElementById('resultscontainer').innerHTML = '<div id="bottom1"><div class="searchfilterdiv"><h2>Results:</h2><div class="boxcontainer"><select size="2" id="nameselect" onChange="populateWindow()"></select></div></div><div>';
		document.getElementById('cardinfocontainer').innerHTML = '<div id="bottom2"><div class="searchfilterdiv"><h2>Card Image:</h2><div class="boxcontainer"><img src="images/cardimages/back.jpg" id="cardimageback" alt="Card Image"/></div></div></div><div id="bottom3"><div class="searchfilterdiv"><h2>Oracle Text:</h2><div class="boxcontainer"><table id="cardtable"><tr><td class="ctleft">Name:</td><td class="ctright"></td></tr><tr><td class="ctleft">Cost:</td><td class="ctright"></td></tr><tr><td class="ctleft">Type:</td><td class="ctright"></td></tr><tr><td class="ctleft">Set:</td><td class="ctright"></td></tr><tr><td class="ctleft">Abilities:</td><td class="ctright"></td></tr><tr><td class="ctleft">Flavor:</td><td class="ctright"></td></tr><tr><td class="ctleft">P/T:</td><td class="ctright"></td></tr><tr><td class="ctleft">Loyalty:</td><td class="ctright"></td></tr><tr><td class="ctleft">Artist:</td><td class="ctright"></td></tr></table></div></div></div><div id="bottom4"><div class="searchfilterdiv"><h2>Card Rulings:</h2><div class="boxcontainer"><div id="rulingsscrolldiv"></div></div></div></div>'
	};
//====================================================</Creates Function resetForm()
