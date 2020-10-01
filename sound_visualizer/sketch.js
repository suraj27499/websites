
let mic, fft;
function touchStarted() {
  getAudioContext().resume();
}

function setup() {
  createCanvas(windowWidth, windowHeight);
  mic = new p5.AudioIn();
  mic.start();
  getAudioContext().resume();
  fft = new p5.FFT();
  fft.setInput(mic);
  colorMode(HSB);
  
  
  

  
  
}

function draw() {
  background(255);

  let spectrum = fft.analyze();
   noStroke();
  fill(255, 0, 255);
    stroke((5*frameCount) % 360, 40, 100);
    fill((5*frameCount) % 360, 100, 100);

  beginShape();
  for (i = 0; i < spectrum.length; i++) {
      let x = map(i, 0, spectrum.length, 0, width);
    let h = -height + map(spectrum[i], 0, 255, height, 0);
    rect(x, height, width / spectrum.length, h )
  }
  endShape();
  
}

