function Reg_func(){
    let log = document.querySelector('.input_login').value;
    let pass = document.querySelector('.input_password').value;

    var params = "log="+log+"&"+"pass="+pass;

    ajaxPost('reg.php', 
    params, 
    SuccessFucn);
}

function SuccessFucn (data){

    console.log("Дата: " + data);
    console.log(typeof(data));

    let n_data = Number(data);
    console.log("Преобр. дата: " +n_data);
    console.log(typeof(n_data));

    if(n_data === 1){
        alert("Данный логин занят! Придумайте другой");
    }
    else {
        alert("Пользователь успешно зарегистрирован!");
    }
    //db_status= JSON.parse(data);
}

function ajaxPost(url, params, callback){
    var f = callback || function(data){};
    var request = new XMLHttpRequest();
    
    request.onreadystatechange = function(){
        if (request.readyState==4){
            f(request.response);
        }
    }
    
    request.open('POST', url);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);
}
