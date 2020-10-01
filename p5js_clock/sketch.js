function setup() {
  createCanvas(400, 400);
  angleMode(DEGREES);
}

function draw() {
  background(0);
  translate(200,200);
  rotate(-90)
 let h=hour();
  let m=minute();
  let s=second();
  let end1=map(s,0,60,0,360);
  let end2=map(m,0,60,0,360);
  let end3=map(h%12,0,12,0,360);
  
  //seconds
  strokeWeight(8);
  stroke(254,89,194);
  noFill();
  arc(0,0,300,300,0,end1);
  push();
  strokeWeight(3);
  rotate(end1);
  line(0,0,100,0);
  pop();
  //minutes
  strokeWeight(4);
  stroke(89,254,149);
  noFill();
  arc(0,0,280,280,0,end2);
   push();
  strokeWeight(4);
  rotate(end2);
  line(0,0,80,0);
  pop();
  //hours
  strokeWeight(3);
  stroke(1,30,254);
  noFill();
  arc(0,0,260,260,0,end3);
   push();
  strokeWeight(8);
  rotate(end3);
  line(0,0,50,0);
  pop();
  
  //dot at center
  stroke(255);
  fill(255);
  ellipse(0,0,10,10);
   stroke(0);
  fill(0);
  ellipse(0,0,6,6);
  
  
  //text or numbers
  push();
  rotate(90);
  textSize(40);
  fill(255);
  noStroke();
  text('12', -30, -170);
  text('03',160,10);
  text('06', -10, 190);
  text('09', -200, 10);
  pop();
  
  
 
}