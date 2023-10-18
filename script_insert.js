let img = document.querySelector('img');
let input=document.getElementById('image');
 
input.addEventListener('change',()=>{
    img.src= URL.createObjectURL(input.files[0])
});