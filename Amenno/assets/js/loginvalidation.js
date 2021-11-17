const email = document.getElementById('email');
const pword = document.getElementById('password');
const button = document.getElementById('submitbtn');

button.addEventListener('click', (e)=>{
    register(e);
});

const register = (e) =>{
    const emailval = email.value.trim();
    const pwordval = pword.value.trim();
    

    
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

    
}


function blankform(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-group error';
    small.innerText = message;
    
}

function noblankform(input){
    const formControl = input.parentElement;
    // const small = formControl.querySelector('small');
    formControl.className = 'form-group success';
    
    
}



function mail(email){
    return /([a-zA-Z0-9]+)([\. {1}])?([a-zA-Z0-9]+)\@gmail([\. ])com$/.test(email) ;
}

function pass(pword){
    return /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/.test(pword) ;
    

}
