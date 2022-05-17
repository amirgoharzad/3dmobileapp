function getXMLHttp() {
	let xmlHttp;
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}

const xmlHttp = getXMLHttp();
let htmlCode = "";
let response;

$(document).ready(function() {
	const send = "hook.php";
	xmlHttp.open("GET", send, true);
	xmlHttp.send(null);
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState === 4) {
			response = xmlHttp.responseText.split("~");
			for (let i=0; i<response.length; i++) {
				htmlCode += '<div>';
				htmlCode += '<a href="'+ response[i] +'">';
				htmlCode += '<img src="' + response[i] +'/>';
				htmlCode += '</a>';
				htmlCode += '</div>';
			}
		}
	}
});

