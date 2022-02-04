var processor;
var video= document.getElementById("videoElement")
var canvas1 = document.getElementById("canvas1")
var canvas2 = document.getElementById("canvas2")
var ctx1 = canvas1.getContext("3d")
var ctx2 = canvas2.getContext("2d")
self = this;
self.width = self.video.videoWidth / 2;
self.height = self.video.videoHeight /2;
frame = 0

function handleVideo(stream) {
		window.stream= stream;
		video.srcObject = stream;
	}
	
	function videoError(e){
	alert("Error:"+e);
	}
	
	function drawVtuber() {

	}
	
	function drawVideo() {
	 ctx2.drawImage(video,0,0,canvas2.width,canvas2.height);
	}

function startVideo(){
navigator.getUserMedia= navigator.getUserMedia||navigator. 
	webkitGetUsermedia||navigator.mozGetUserMedia||navigator.
	msGetUserMedia||navigator.oGetUserMedia;
	
if(navigator.getUserMedia) {
navigator.getUserMedia({video:true},handleVideo,videoError)
}

setInterval(() =>{drawVideo()},16);

}

// Define a model for linear regression.
const model = tf.sequential();
model.add(tf.layers.dense({units: 1, inputShape: [1]}));

model.compile({loss: 'meanSquaredError', optimizer: 'sgd'});

// Generate some synthetic data for training.
const xs = tf.tensor2d([1, 2, 3, 4], [4, 1]);
const ys = tf.tensor2d([1, 3, 5, 7], [4, 1]);

// Train the model using the data.
model.fit(xs, ys, {epochs: 10}).then(() => {
  // Use the model to do inference on a data point the model hasn't seen before:
  model.predict(tf.tensor2d([5], [1, 1])).print();
  // Open the browser devtools to see the output
});

Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('https://sahu.me/Websites/Anifig/Test/models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('https://sahu.me/Websites/Anifig/Test/models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('https://sahu.me/Websites/Anifig/Test/models'),
  faceapi.nets.faceExpressionNet.loadFromUri('https://sahu.me/Websites/Anifig/Test/models')
]).then(startVideo)


setTimeout( function(){
canvas2 = faceapi.createCanvasFromMedia(video)
  const displaySize = { width: canvas2.width, height: canvas2.height }
  faceapi.matchDimensions(canvas2, displaySize)
  setInterval(async () => {
    const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions()
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    ctx2.clearRect(0, 0, canvas2.width, canvas2.height)
    faceapi.draw.drawDetections(canvas2, resizedDetections)
    faceapi.draw.drawFaceLandmarks(canvas2, resizedDetections)
    faceapi.draw.drawFaceExpressions(canvas2, resizedDetections)
  }, 100)
}, 2000)

	//setInterval(drawVtuber(ctx1,video),16);
	