const video = document.getElementById('video')

Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('./models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('./models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('./models'),
  faceapi.nets.ssdMobilenetv1.loadFromUri('./models')
]).then(startVideo)

function startVideo() {
  navigator.getUserMedia(
    { video: {} },
    stream => video.srcObject = stream,
    err => console.error(err)
  )
}

video.addEventListener('play', () => {
  const canvas = faceapi.createCanvasFromMedia(video)
  document.body.append(canvas)
  const displaySize = { width: video.width, height: video.height }
  faceapi.matchDimensions(canvas, displaySize)
  setInterval(async () => {
    const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceDescriptors()
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    faceapi.matchDimensions(canvas, displaySize)
    const labeledFaceDescriptors = await checkKnown()
    const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6)
    var result = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor)).toString().slice(0, -6)
    if (result!==""||result=="unknown"){
      lastProc(result,video)
    }
    return
  }, 1000)
})

function checkKnown() {
  const labels = labelsData
  return Promise.all(
    labels.map(async label => {
      const descriptions = []
      for (let i = 1; i <= 2; i++) {
        const img = await faceapi.fetchImage(`./known/${label}/${i}.jpg`)
        const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
        descriptions.push(detections.descriptor)
      }
      return new faceapi.LabeledFaceDescriptors(label, descriptions)
    })
  )
}

function lastProc(idFc,videoPlay) {
  videoPlay.srcObject.getVideoTracks().forEach(track => {track.stop()})
  $.post("fclogproc.php",{idfc:idFc},function(response){window.location.replace('index.php?page='+response)})
}