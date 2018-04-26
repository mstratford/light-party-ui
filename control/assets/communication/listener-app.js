
  var currentShape = 'shape-Open'
  var currentColour = '#000000'
  var currentClass = ''
  var currentStyle = ''
  var currentAnimation = ''
  var currentBlackout = ''
  
  var currentArrayLocation
  var arrayLength
  
  //Default FX values on startup
  var colnames = ['Black','Red','Green','Blue','Yellow','Pink','White','Maroon','DkGreen','Teal','Orange','Fuchsia','Silver','Custom1','Custom2','Custom3','Custom4','Custom5','Custom6','Custom7','Custom8', 'Purple', 'Grey'];
  var colenabled = ['on','off','off','off','off', 'off','off','off','off','off','off','off','off','off','off','off','off', 'off', 'off'];
  
  var shapenames = ['Open', 'Star', 'StarFilled', 'Heart', 'HeartFilled', 'Sun', 'Triangle', 'TriangleFilled'];
  var shapeenabled = ['on','off','off','off','off','off', 'off'];
  
  //ColFX arrays
  var colFXnames = ['Fade','Rainbow','Strobe', 'colPulse'];
  var colFXenabled = ['off','off','off','off'];
  var colFXparam = ['1','2','0.5','4']; 
  var colFXparam2 = ['infinite','infinite','infinite steps(1,end)', 'infinite']; 
  //ShapeFX arrays
  var shapeFXnames = ['None','RotateCW','RotateCCW','Pulse','Breath'];
  var shapeFXenabled = ['on','off','off','off','off'];
  var shapeFXparam = ['0','8','8','4','12']; 
  var shapeFXparam2 = ['','infinite linear','infinite linear','infinite','infinite']; 

  var currentSelectionColFX = "Fade";
  var currentSelectionCol = "Black";
  var currentSelectionShp = "Open";
  var currentSelectionShpFX = "None"
  var currentSelectionPage = "Col";
  
  var ColFXEnableLastDirection = "None";
  var ColFXEnableNumberOfRotations = "0";
  
  var shapeFXEnableLastDirection = "None";
  var shapeFXEnableNumberOfRotations = "0";
  
  var currentColourOutput = currentColour; //Used to detect when colour has changed in order to periodically send out updates (not 1:1)








// Use SockJS
Stomp.WebSocketClass = SockJS;

// Connection parameters
var mq_username = "controlPublisher",
    mq_password = "LightMyPhone",
    mq_vhost    = "/",
    mq_url      = 'http://' + window.location.hostname + ':15674/stomp',

    // The queue we will read. The /topic/ queues are temporary
    // queues that will be created when the client connects, and
    // removed when the client disconnects. They will receive
    // all messages published in the "amq.topic" exchange, with the
    // given routing key, in this case "test"
    mq_queue    = "/topic/test";


// This is where we print incomoing messages
var output;

// This will be called upon successful connection
function on_connect() {
  output.innerHTML += 'Connected to RabbitMQ-Web-Stomp<br />';
  console.log(client);
  client.subscribe(mq_queue, on_message);
	

	publish_Data();
	update_Screen();
	
  	//do {
  	//	neverendingloop = 0;
  	//	setTimeout(publish_Data, 10000);
  	//
	//} while (neverendingloop <1);
}


// This will be called upon a connection error
function on_connect_error() {
  output.innerHTML += 'Connection failed!<br />';
}

function sendMsg(msg) { 
  client.send('/topic/test', { "content-type": "text/plain" }, msg);
}

function onError(e) {
  console.log("STOMP ERROR", e);
}

function onDebug(m) {
  console.log("STOMP DEBUG", m);
}

// Create a client
var client = Stomp.client(mq_url);

window.onload = function () {
  // Fetch output panel
  output = document.getElementById("output-logs")

  // Connect
  client.connect(
    mq_username,
    mq_password,
    on_connect,
    on_connect_error,
    mq_vhost
  );
  
  
  
}




var i;
function updateColourLoop () {
	if (currentColour != currentColourOutput) {
    	console.log('Sending Colour update');
    	currentColourOutput = currentColour;
    	publish_Data('colourOnly');
    }
    setTimeout(updateColourLoop,2000);
}
updateColourLoop ();


// This will be called upon arrival of a message
function on_message(m) {
  var d = new Date();
  console.log(m.body);
  
  output.innerHTML += d.getHours() + ':' + d.getMinutes() + ':' +  d.getSeconds() + '> ' + m.body + '<br />';
  var textarea = document.getElementById('output-logs');
	textarea.scrollTop = textarea.scrollHeight;
  
  if (currentSelectionPage == "Col" & currentSelectionCol.substring(0, 6) == 'Custom') {
  		
  		redInt = hexToRgb(currentColour).r;
		greenInt = hexToRgb(currentColour).g;
		blueInt = hexToRgb(currentColour).b;
		
	if (m.body == ";INPUT;RE1CW") {		
		
		if (redInt < 255) {
			redInt = parseInt(redInt + 1);
		} else {
			sendMsg(';INPUT;STOP;RE1;');
		}
		
	} else if (m.body == ";INPUT;RE1CCW") {
	  
	  	if (redInt > 0) {
			redInt = parseInt(redInt - 1);
		}
	  
	} else if (m.body == ";INPUT;RE2CW") {
	  
	  	if (greenInt < 255) {
			greenInt = parseInt(greenInt + 1);
		}
	  
	} else if (m.body == ";INPUT;RE2CCW") {
	  
	  	if (greenInt > 0) {
			greenInt = parseInt(greenInt - 1);
		}
	  
	} else if (m.body == ";INPUT;RE3CW") {
	  
	  	if (blueInt < 255) {
			blueInt = parseInt(blueInt + 1);
		}
	  
	} else if (m.body == ";INPUT;RE3CCW") {
	  
	  	if (blueInt > 0) {
			blueInt = parseInt(blueInt - 1);
		}
	  
	}
	if (m.body.substring(0, 9) == ";INPUT;RE") {
		currentColour = '#' + rgbToHex(redInt) + rgbToHex(greenInt) + rgbToHex(blueInt);
		document.getElementById("btnCol" + currentSelectionCol).style.backgroundColor = currentColour;
		//publish_Data('colourOnly');
		update_Screen();
	}
	
 } else if (currentSelectionPage == "Col" & m.body.substring(0, 9) == ";INPUT;RE") {
 
 	// If trying to change colour of a stock one, jump to custom one first
 	console.log('Switching to Custom1');
 	currentSelectionCol = "Custom1";
 	
 	
 	
  
 } else if (currentSelectionPage == "ColFX") {
  	
  	currentArrayLocation = colFXnames.indexOf(currentSelectionColFX);
  	
	if (m.body == ";INPUT;RE1CCW") {	
	   
		if (ColFXEnableLastDirection == "Left") {
			ColFXEnableNumberOfRotations = ColFXEnableNumberOfRotations + 1
			
			if (ColFXEnableNumberOfRotations == 3) {
				colFXenabled[currentArrayLocation] = "off";
				publish_Data('fxOnly');
				update_Screen();
			}
			
		} else {
			ColFXEnableLastDirection = "Left";
			ColFXEnableNumberOfRotations = 1;
		}
	   
	} else if (m.body == ";INPUT;RE1CW") {	
	   
		if (ColFXEnableLastDirection == "Right") {
			ColFXEnableNumberOfRotations = ColFXEnableNumberOfRotations + 1
			
			if (ColFXEnableNumberOfRotations == 3) {
				
				colFXenabled[currentArrayLocation] = "on";
				publish_Data('fxOnly');
				update_Screen();
				
			}
			
		} else {
			ColFXEnableLastDirection = "Right";
			ColFXEnableNumberOfRotations = 1;
		} 
	
	
	} else if (m.body == ";INPUT;RE2CW") {
	 
		if (colFXparam[currentArrayLocation] < 20) {
			colFXparam[currentArrayLocation] = colFXparam[currentArrayLocation] * 2;
			publish_Data('fxOnly');
			update_Screen();
		}
	 
	} else if (m.body == ";INPUT;RE2CCW") {
	 
		if (colFXparam[currentArrayLocation] > 0.2) {
			colFXparam[currentArrayLocation] = colFXparam[currentArrayLocation] / 2;
			publish_Data('fxOnly');
			update_Screen();
		}
	 
	}
  		
  }	 else if (currentSelectionPage == "ShpFX") {
  	
  	currentArrayLocation = shapeFXnames.indexOf(currentSelectionShpFX);
  	
	if (m.body == ";INPUT;RE1CCW") {	
	   
		if (shapeFXEnableLastDirection == "Left") {
			shapeFXEnableNumberOfRotations = shapeFXEnableNumberOfRotations + 1
			
			if (shapeFXEnableNumberOfRotations == 3) {
				shapeFXenabled[currentArrayLocation] = "off";
				publish_Data('fxOnly');
				update_Screen();
			}
			
		} else {
			shapeFXEnableLastDirection = "Left";
			shapeFXEnableNumberOfRotations = 1;
		}
	   
	} else if (m.body == ";INPUT;RE1CW") {	
	   
		if (shapeFXEnableLastDirection == "Right") {
			shapeFXEnableNumberOfRotations = shapeFXEnableNumberOfRotations + 1
			
			if (shapeFXEnableNumberOfRotations == 3) {
				
				shapeFXenabled[currentArrayLocation] = "on";
				publish_Data('fxOnly');
				update_Screen();
				
			}
			
		} else {
			shapeFXEnableLastDirection = "Right";
			shapeFXEnableNumberOfRotations = 1;
		} 
	
	
	} else if (m.body == ";INPUT;RE2CW") {
	 
		if (shapeFXparam[currentArrayLocation] < 20) {
			shapeFXparam[currentArrayLocation] = shapeFXparam[currentArrayLocation] * 2;
			publish_Data('shapeOnly');
			update_Screen();
		}
	 
	} else if (m.body == ";INPUT;RE2CCW") {
	 
		if (shapeFXparam[currentArrayLocation] > 0.2) {
			shapeFXparam[currentArrayLocation] = shapeFXparam[currentArrayLocation] / 2;
			publish_Data('shapeOnly');
			update_Screen();
		}
	 
	}
  		
  }		
}









		    
	   document.onkeydown = checkKey;

	   function checkKey(e) {

		   e = e || window.event;

		   if (e.keyCode == '65') {
			  $('#myTab a[href="#colours"]').tab('show')// left arrow
			  currentSelectionPage = "Col";
		   }
		   else if (e.keyCode == '66') {
			  $('#myTab a[href="#colours"]').tab('show')// left arrow
			  currentSelectionPage = "ColFX";
		   }
		   else if (e.keyCode == '67') {
			  $('#myTab a[href="#shapes"]').tab('show')// right arrow
			  currentSelectionPage = "Shp";
		   }
		   else if (e.keyCode == '68') {
			  $('#myTab a[href="#shapes"]').tab('show')// right arrow
			  currentSelectionPage = "ShpFX";
		   }
		   else if (e.keyCode == '69') {
			   $('#myTab a[href="#preview"]').tab('show')// up arrow
			   currentSelectionPage = "Preview";
		   }
		   else if (e.keyCode == '70') {
			   $('#myTab a[href="#system"]').tab('show')// up arrow
			   currentSelectionPage = "System";
		   }
		   else if (e.keyCode == '71') {
			   if (currentBlackout == '') {
			   		currentBlackout = 'blackout';
			   }	else {
			   		currentBlackout = '';
			   	}
		   }
		   
		   else if (e.keyCode == '74') {
		   		if (currentSelectionPage == "Col") {
		   			
			   		currentArrayLocation = colnames.indexOf(currentSelectionCol);
			   		currentSelectionCol = colnames[currentArrayLocation+1];
			   		
			   		if (currentSelectionCol==undefined ||  currentArrayLocation == -1) {
		   				currentSelectionCol = colnames[0];
		   			}
			   		
						arrayLength = colnames.length;
	  					for (var i = 0; i < arrayLength; i++) {
			   				if (currentSelectionPage == "Col" & currentSelectionCol == colnames[i]) {
			   		
								// Overwrite current RGB wheel values
								currentColour = FullrgbToHex($('#btnCol' + colnames[i]).css('backgroundColor'));
								//publish_Data();
							}
						}
			   		
			   }
			   else if (currentSelectionPage == "ColFX") {
			   		currentArrayLocation = colFXnames.indexOf(currentSelectionColFX);
			   		currentSelectionColFX = colFXnames[currentArrayLocation+1];
			   		
			   		if (currentSelectionColFX==undefined ||  currentArrayLocation == -1) {
		   				currentSelectionColFX = colFXnames[0];
		   			}
			   }
			   //else if (currentSelectionPage == "Shp") {
			   //		currentArrayLocation = shapenames.indexOf(currentSelectionShp);
			   //		currentSelectionShp = shapenames[currentArrayLocation+1];
			   //		
			   //	if (currentSelectionShp==undefined ||  currentArrayLocation == -1) {
		   	   //		currentSelectionShp = shapenames[0];
		   		//	}
			   //}
			   else if (currentSelectionPage == "ShpFX") {
			   		
			   		currentArrayLocation = shapeFXnames.indexOf(currentSelectionShpFX);
			   		currentSelectionShpFX = shapeFXnames[currentArrayLocation+1];
			   		
			   		if (currentSelectionShpFX==undefined ||  currentArrayLocation == -1) {
		   				currentSelectionShpFX = shapeFXnames[0];
		   			}
			   }
		   }
		   update_Screen();

	   }
	   
	   
	function hexToRgb(hex) {
		  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
		  return result ? {
			  r: parseInt(result[1], 16),
			  g: parseInt(result[2], 16),
			  b: parseInt(result[3], 16)
		  } : null;
	}
	function rgbToHex(rgb) {
		return pad2(rgb.toString(16));
	}
	function FullrgbToHex(colorval) {
		var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		delete(parts[0]);
		for (var i = 1; i <= 3; ++i) {
			parts[i] = parseInt(parts[i]).toString(16);
			if (parts[i].length == 1) parts[i] = '0' + parts[i];
		}
    	return '#' + parts.join('');
	}
	
	function pad2(number) {
   
     return ("0" + number).slice(-2);
   
	}



function update_Screen() {

	// Colour Palette Indicators
	arrayLength = colnames.length;
	  for (var i = 0; i < arrayLength; i++) {
		
		// Show if colour is active
		if (colenabled[i] == "on") {
			$('#btnCol' + colnames[i]).addClass('IndicateOn');
		} else {
			$('#btnCol' + colnames[i]).removeClass('IndicateOn');
		}
		
		// Show if colour is selected for editing
		if (currentSelectionPage == "Col" & currentSelectionCol == colnames[i]) {
			$('#btnCol' + colnames[i]).addClass('IndicateSelected');
		} else {
			$('#btnCol' + colnames[i]).removeClass('IndicateSelected');
		}
	  }
	  if (currentSelectionPage == "Col") {
	  		$('#wheel1Label').html('Red: <b>' + hexToRgb(currentColour).r + '</b> (' + rgbToHex(hexToRgb(currentColour).r) + ')');
			$('#wheel2Label').html('Green: <b>' + hexToRgb(currentColour).g + '</b> (' + rgbToHex(hexToRgb(currentColour).g) + ')');
			$('#wheel3Label').html('Blue: <b>' + hexToRgb(currentColour).b + '</b> (' + rgbToHex(hexToRgb(currentColour).b) + ')');
	  }
	  
	  
	// Colour FX Indicators
	arrayLength = colFXnames.length;
	  for (var i = 0; i < arrayLength; i++) {
   
		if (colFXenabled[i] == "on") {
			$('#IndicatorCol' + colFXnames[i]).addClass('IndicateOn');
		} else {
			$('#IndicatorCol' + colFXnames[i]).removeClass('IndicateOn');
		}
		if (currentSelectionPage == "ColFX" & currentSelectionColFX == colFXnames[i]) {
			$('#IndicatorCol' + colFXnames[i]).addClass('IndicateSelected');
		} else {
			$('#IndicatorCol' + colFXnames[i]).removeClass('IndicateSelected');
		}
		if (colFXparam[i] !== "1") { plural='s' } else { plural='' };  
		$('#DurationCol' + colFXnames[i]).html(colFXparam[i] + ' second' + plural);
	  }
	  
	  if (currentSelectionPage == "ColFX") {
	  		var colFXarrayLocation = $.inArray(currentSelectionColFX, colFXnames);
	  		$('#wheel1Label').html('Enabled: <b>' + colFXenabled[colFXarrayLocation] + '</b>');
			$('#wheel2Label').html('Rate/Duration: <b>' + colFXparam[colFXarrayLocation] + ' second(s)</b>');
			$('#wheel3Label').html('<small>Unused</small>');
	  }
	  
	  
	  
	  var arrayLength = shapenames.length;
	  for (var i = 0; i < arrayLength; i++) {
	
		if (shapeenabled[i] == "on") {
			$('#btnShp' + shapenames[i]).addClass('IndicateOn');
		} else {
			$('#btnShp' + shapenames[i]).removeClass('IndicateOn');
		}
		//if (currentSelectionPage == "Shp" & currentSelectionShp == shapenames[i]) {
		//	$('#btnShp' + shapenames[i]).addClass('IndicateSelected');
		//} else {
		//	$('#btnShp' + shapenames[i]).removeClass('IndicateSelected');
		//}
	  }
  
  	  if (currentSelectionPage == "Shp") {
	  		$('#wheel1Label').html('<small>Unused</small>');
			$('#wheel2Label').html('<small>Unused</small>');
			$('#wheel3Label').html('<small>Unused</small>');
	  }
  
  arrayLength = shapeFXnames.length;
  var numOff = 0
  for (var i = 0; i < arrayLength; i++) {
  	
	if (shapeFXenabled[i] == "on") {
		$('#IndicatorShape' + shapeFXnames[i]).addClass('IndicateOn');
	} else {
		$('#IndicatorShape' + shapeFXnames[i]).removeClass('IndicateOn');
		numOff++
	}
	if (currentSelectionPage == "ShpFX" & currentSelectionShpFX == shapeFXnames[i]) {
		$('#IndicatorShape' + shapeFXnames[i]).addClass('IndicateSelected');
	} else {
		$('#IndicatorShape' + shapeFXnames[i]).removeClass('IndicateSelected');
	}

  }
  
  if (currentSelectionPage == "ShpFX") {
	  		var shapeFXarrayLocation = $.inArray(currentSelectionShpFX, shapeFXnames);
	  		$('#wheel1Label').html('Enabled: <b>' + shapeFXenabled[shapeFXarrayLocation] + '</b>');
			$('#wheel2Label').html('Rate/Duration: <b>' + shapeFXparam[shapeFXarrayLocation] + ' second(s)</b>');
			$('#wheel3Label').html('<small>Unused</small>');
	  }


}




function changeCol(Colvalue,buttonID) {

		var newcolourID = buttonID.substring(6); //removes #BtnCol
		console.log(Colvalue);
		console.log(buttonID);
		console.log(newcolourID);
			
		currentSelectionPage = "Col";
		currentSelectionCol = newcolourID;
		
		if (Colvalue != '') {
			currentColour = Colvalue;
		} else {
			currentColour = FullrgbToHex($('#' + buttonID ).css( "background-color" ));
		}
			//switch indicateOn class to Button ID
			arrayLength = colnames.length;
			  for (var i = 0; i < arrayLength; i++) {
		
				// Show if colour is active
				if (colnames[i] == newcolourID) {
					colenabled[i] = "on";
								

			
					// switch indicatedSelected to button ID
					currentSelectionCol = colnames[i];
				} else {
					colenabled[i] = "off";
				}
			  }
		
	update_Screen();
	//publish_Data('colourOnly');
}


function toggleColFX(ColFXnameVal) {
	var colFXarrayLocation = $.inArray(ColFXnameVal, colFXnames);
	if (colFXenabled[colFXarrayLocation] == "off") {
		colFXenabled[colFXarrayLocation] = "on";
	} else {
		colFXenabled[colFXarrayLocation] = "off";
	}
	publish_Data();
	update_Screen();
}

function selectColFX(ColFXnameVal) {
	currentSelectionPage = "ColFX";
	currentSelectionColFX = ColFXnameVal;
	update_Screen();
}





function changeShape(Shapevalue) {

	currentShape = "shape-" + Shapevalue;

	var shapearrayLocation = $.inArray(Shapevalue, shapenames);
	console.log(shapearrayLocation);
	var arrayLength = shapenames.length;
  	for (var i = 0; i < arrayLength; i++) {
		shapeenabled[i] = "off";
	}
	shapeenabled[shapearrayLocation] = "on";

	currentSelectionPage = "Shp";
	// currentSelectionShp = Shapevalue;
	publish_Data('shapeOnly');
	update_Screen();
}


function changeShapeFX(ShapeFXnameVal) {
	
	
	var shapeFXarrayLocation = $.inArray(ShapeFXnameVal, shapeFXnames);
	var arrayLength = shapeFXnames.length;
	for (var i = 0; i < arrayLength; i++) {
		shapeFXenabled[i] = "off";
	}
	shapeFXenabled[shapeFXarrayLocation] = "on";
		
	currentSelectionPage = "ShpFX";
	currentSelectionShpFX = ShapeFXnameVal;
	publish_Data();
	update_Screen();
}

//function changeShapeFX(ShapeFXvalue) {
//	currentShapeFX = ShapeFXvalue
//	publish_Data();
//}

function publish_Data(updateMode) {
  var arrayLength = colFXnames.length;
  currentAnimation = "";
  for (var i = 0; i < arrayLength; i++) {
	  if (colFXenabled[i] == "on") {
		  if (currentAnimation.length !== 0) {
			  currentAnimation += ", ";
		  }
		  currentAnimation += colFXnames[i] + ' ' + colFXparam[i] +'s ' + colFXparam2[i];
	  }
  }
  arrayLength = shapeFXnames.length;
  for (var i = 0; i < arrayLength; i++) {
	  if (shapeFXenabled[i] == "on") {
		  if (currentAnimation.length !== 0) {
			  currentAnimation += ", ";
		  }
		  currentAnimation += shapeFXnames[i] + ' ' + shapeFXparam[i] +'s ' + shapeFXparam2[i];
	  }
  }
  currentClass = currentShape + ' ' + currentBlackout;
  
  if (updateMode === undefined) {
	  
	  sendMsg(';style;' + currentStyle);
  }
  if (updateMode === undefined || updateMode == "shapeOnly") {
  		sendMsg(';class;' + currentClass);
  		sendMsg(';FX;' + currentAnimation);
  }
  if (updateMode === undefined || updateMode == "colourOnly") {
  		sendMsg(';colour;' + currentColour);
  }
  if (updateMode == "fxOnly") {
  		sendMsg(';FX;' + currentAnimation);

  }
}



