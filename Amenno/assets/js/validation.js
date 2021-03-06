const fname = document.getElementById('fullname');
const email = document.getElementById('email');
const pword = document.getElementById('password');
const cpword = document.getElementById('cpassword');
const ctt = document.getElementById('contact');
const button = document.getElementById('submitbtn');

button.addEventListener('click', (e)=>{
    register(e);
});

const register = (e) =>{
    const fnameval = fname.value.trim();
    const emailval = email.value.trim();
    const pwordval = pword.value.trim();
    const cpwordval = cpword.value.trim();
    const cttval = ctt.value.trim();
    
    if(fnameval === ''){
        blankform(fname, 'Full name is required');
        e.preventDefault();
    }else if(!fullname(fnameval)){
        blankform(fname, 'Invalid format')
        e.preventDefault();
    }else{
        noblankform(fname);
    }

    
    if(emailval === ''){
        blankform(email, 'Email Address is required');
        e.preventDefault();
    }else if(!mail(emailval)){
        blankform(email, 'Email must be valid: eg abc@gmail.com')
        e.preventDefault();
    }else{
        noblankform(email);
    }


    if(pwordval === ''){
        blankform(pword, 'Password is required');
        e.preventDefault();
    }else if(!pass(pwordval)){
        blankform(pword, '8 or more include:0-9 | A-Z | a-z | #?!A$%^&*-')
        e.preventDefault();
    }else{
        noblankform(pword);
        
    }


    if(cpwordval === ''){
        blankform(cpword, 'Please confirm password');
        e.preventDefault();
    }else if(pwordval !== cpwordval){
        blankform(cpword, 'Passords do no match')
        e.preventDefault();
    }else{
        noblankform(cpword);
        
    }




    if(cttval === ''){
        blankform(contact, 'Contact is required');
        e.preventDefault();
    }else if(!num(cttval)){
        blankform(ctt, 'Must be valid : 10 characters')
        e.preventDefault();
    }else{
        noblankform(ctt);
        
    }   
    
}


function blankform(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-group error';
    small.innerText = message;
    
}

function noblankform(input){
    const formControl = input.parentElement;
    formControl.className = 'form-group success';
    
    
}

function fullname(fname){
    return /^[A-za-z][A-za-z\'\-]+([\ A-Za-z][A-Za-z\\-]+)*$/.test(fname) ;
}

function mail(email){
    return /([a-zA-Z0-9]+)([\. {1}])?([a-zA-Z0-9]+)\@gmail([\. ])com$/.test(email) ;
}

function pass(pword){
    return /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(pword) ;
    

}

function num(contact){
    return /^\+?([0-9]{1,3})\)?([\d ]{9,15})$/.test(contact) ;
    
}