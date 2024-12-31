var val = 24;
function setGaugeValue(value) {
    const needle = document.getElementById('bootstrap-needle');
    const angle = (value / 100) * 180 - 90; // Map value to -90° to 90°
    needle.style.transform = `rotate(${angle}deg)`;
}

setGaugeValue(val);
function breakfast(){
    document.getElementById('bt3').style.backgroundColor='#c1e1c1';
    document.getElementById('bt4').style.backgroundColor='white';
    document.getElementById('bt5').style.backgroundColor='white';
    document.getElementById('bt6').style.backgroundColor='white';
    document.getElementById('simage1').src="../meal3/images/milk.webp";
    document.getElementById('simage2').src='../meal3/images/apple.webp';
    document.getElementById('simage3').src='../meal3/images/bread.webp';  
   document.getElementById('target').textContent='Today target: 243 calories';    
   document.getElementById('target1').textContent='Your customise: 367 calories';    
}
function lunch() {
  document.getElementById('bt4').style.backgroundColor='#c1e1c1';
  document.getElementById('bt3').style.backgroundColor='white';
  document.getElementById('bt5').style.backgroundColor='white';
  document.getElementById('bt6').style.backgroundColor='white';
    document.getElementById('simage1').src='../meal3/images/dal.jpg';
  document.getElementById('simage2').src='../meal3/images/rice.jpg';
  document.getElementById('simage3').src='../meal3/images/panneer.jpg';  
 document.getElementById('target').textContent='Today target: 133 calories';    
 document.getElementById('target1').textContent='Your customise: 361 calories'; 
}
function dinner(){
    document.getElementById('bt5').style.backgroundColor='#c1e1c1';
    document.getElementById('bt3').style.backgroundColor='white';
    document.getElementById('bt4').style.backgroundColor='white';
    document.getElementById('bt6').style.backgroundColor='white';
    document.getElementById('simage1').src='../meal3/images/idli.jpg';
    document.getElementById('simage2').src='../meal3/images/sambar.jpg';
    document.getElementById('simage3').src='../meal3/images/milk2.jpg';  
   document.getElementById('target').textContent='Today target: 243 calories';    
   document.getElementById('target1').textContent='Your customise: 367 calories';   
}

function snacks(){
    document.getElementById('bt5').style.backgroundColor='white';
    document.getElementById('bt3').style.backgroundColor='white';
    document.getElementById('bt4').style.backgroundColor='white';
    document.getElementById('bt6').style.backgroundColor='#c1e1c1';
    document.getElementById('simage1').src='../meal3/images/biscut.webp';
    document.getElementById('simage2').src='../meal3/images/frenchfry.webp';
    document.getElementById('simage3').src='../meal3/images/chips.webp';  
   document.getElementById('target').textContent='Today target: 143 calories';    
   document.getElementById('target1').textContent='Your customise: 167 calories';   
}
function about(){
  document.getElementById('homebt').style.backgroundColor='#c1e1c1';
  document.getElementById('homebt').style.color='black';
  document.getElementById('menu1').style.backgroundColor='#1c5803';
  document.getElementById('menu1').style.color='white';

  window.location.href = "about.html";

}
function blogs(){

  document.getElementById('homebt').style.backgroundColor='#c1e1c1';
  document.getElementById('homebt').style.color='black';
  document.getElementById('menu1').style.backgroundColor='#c1e1c1';
  document.getElementById('menu1').style.color='black';
  document.getElementById('menu2').style.backgroundColor='#c1e1c1';
  document.getElementById('menu2').style.color='black';
  document.getElementById('menu4').style.backgroundColor='#c1e1c1';
  document.getElementById('menu4').style.color='black';
  document.getElementById('menu3').style.backgroundColor='#1c5803';
  document.getElementById('menu3').style.color='white';
  window.location.href = "blog.html";

}

function category(){

  document.getElementById('homebt').style.backgroundColor='#c1e1c1';
  document.getElementById('homebt').style.color='black';
  document.getElementById('menu1').style.backgroundColor='#c1e1c1';
  document.getElementById('menu1').style.color='black';
  document.getElementById('menu3').style.backgroundColor='#c1e1c1';
  document.getElementById('menu3').style.color='black';
  document.getElementById('menu4').style.backgroundColor='#c1e1c1';
  document.getElementById('menu4').style.color='black';
  document.getElementById('menu2').style.backgroundColor='#1c5803';
  document.getElementById('menu2').style.color='white';
  window.location.href = "category.html";

}
function returnhome(){
  window.location.href = "index.html";

}
function profile(){

  document.getElementById('homebt').style.backgroundColor='#c1e1c1';
  document.getElementById('homebt').style.color='black';
  document.getElementById('menu1').style.backgroundColor='#c1e1c1';
  document.getElementById('menu1').style.color='black';
  document.getElementById('menu2').style.backgroundColor='#c1e1c1';
  document.getElementById('menu2').style.color='black';
  document.getElementById('menu3').style.backgroundColor='#c1e1c1';
  document.getElementById('menu3').style.color='black';
  document.getElementById('menu4').style.backgroundColor='#1c5803';
  document.getElementById('menu4').style.color='white';
  window.location.href='profile.html';

}
function add(){
  document.getElementById('popupbox').style.display='block';
  document.getElementsByClassName('overlay').style.backgroundColor='black';
}

function cancel(){

  document.getElementById('popupbox').style.display='none';
  document.getElementsByTagName('body').style.opacity='0.7';

}

function saveMeal() {
  // Get input values
  const date = document.querySelector('#popupbox input[type="date"]').value;
  const mealName = document.querySelector('#popupbox input[placeholder=" Meal Name"]').value;
  const weight = document.querySelector('#popupbox input[placeholder=" Taken Weight or grams, ml & etc"]').value;
  const mealType = document.querySelector('#popupbox input[placeholder=" Meal Type"]').value;

  // Validate inputs
  if (!date || !mealName || !weight || !mealType) {
      alert('Please fill out all fields.');
      return;
  }

const newcol = document.getElementById('popupbox2');

 newcol.innerHTML = `
      
          <p style='color:blue;'><span>Mealname : </span>${mealName}: </p>
          <p style='color:blue;'><span>weight : </span>${weight}</p>
          <p style='color:blue;'><span>Type : </span>${mealType}</p>
          <p style='color:blue;'><span>Date : </span>${date}</p>
      
  `;
  document.getElementById('popupbox2').style.display='block';
  document.getElementById('popupbox3').style.display='block';
  
  cancel(); 
  // Hide the popup box
  
}
function signout(){
  alert('Logged out');
}
function clos(){
  document.getElementById('popupbox3').style.display='none';
  document.getElementById('popupbox2').style.display='none';
  val= val+10;
  setGaugeValue(val);
}
