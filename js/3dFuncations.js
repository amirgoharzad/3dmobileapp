//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	console.log('hit spin');
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	console.log('hit stop');
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

function cokeWireframe()
{
	var e = document.getElementById('cokeModel');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function drPepperFrame()
{
	var e = document.getElementById('drPepperModel');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function lightCokeFrame()
{
	var e = document.getElementById('lightCokeFrame');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function simpleCokeFrame()
{
	var e = document.getElementById('simpleCokeFrame');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function spriteFrame()
{
	var e = document.getElementById('spriteFrame');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function pepperFrame() {
	var e = document.getElementById('pepperFrame');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}


var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__Lights').setAttribute('Lights', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}


function spriteCameraFront()
{
	document.getElementById('model__spriteCameraFront').setAttribute('bind', 'true');
}

function spriteCameraBack()
{
	document.getElementById('model__spriteCameraBack').setAttribute('bind', 'true');
}

function spriteCameraLeft()
{
	document.getElementById('model__spriteCameraLeft').setAttribute('bind', 'true');
}

function spriteCameraRight()
{
	document.getElementById('model__spriteCameraRight').setAttribute('bind', 'true');
}

function spriteCameraTop()
{
	document.getElementById('model__spriteCameraTop').setAttribute('bind', 'true');
}

function spriteCameraBottom()
{
	document.getElementById('model__spriteCameraBottom').setAttribute('bind', 'true');
}



function lightCokeCameraFront()
{
	document.getElementById('model__LightCokeCameraFront').setAttribute('bind', 'true');
}

function lightCokeCameraTop()
{
	document.getElementById('model__LightCokeCameraTop').setAttribute('bind', 'true');
}




function simpleCokeCameraFront()
{
	console.log('hit cam 1');
	document.getElementById('model__SimpleCokeCameraFront').setAttribute('bind', 'true');
}

function simpleCokeCameraBack()
{
	document.getElementById('model__SimpleCokeCameraBack').setAttribute('bind', 'true');
}

function simpleCokeCameraLeft()
{
	document.getElementById('model__SimpleCokeCameraLeft').setAttribute('bind', 'true');
}

function simpleCokeCameraRight()
{
	document.getElementById('model__SimpleCokeCameraRight').setAttribute('bind', 'true');
}

function simpleCokeCameraTop()
{
	document.getElementById('model__SimpleCokeCameraTop').setAttribute('bind', 'true');
}

function simpleCokeCameraBottom()
{
	document.getElementById('model__SimpleCokeCameraBottom').setAttribute('bind', 'true');
}