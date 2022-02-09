
window.onload=function(){
    const regForm=document.getElementById('registrationForm');
    regForm.addEventListener("submit",function (e){
        e.preventDefault();
        const formData=new FormData(regForm);
        const searchParams=new URLSearchParams();
        for(const pair of formData){
            searchParams.append(pair[0],pair[1]);
        }
        fetch("register.php",{
            method:'post',
            body:searchParams
        }).then(function (response) {
            return response.text();
        }).then(function (text) {
            console.log(text)
        }).catch(function (e) {
            console.log(e);
        });
    })
    $('#btn').click(function(){    // this ajax will call on button click whose id is "btn"
        $.ajax({
            url: 'process.php',   // url of file
            type: 'POST',         // get or post
            data: {
                var1  :val1,     // variables list (key-value pair)
                var2  :val2
            },
            success: function(response){    // response from process.php
                // do your stuff here
            }
        });
    });
}
