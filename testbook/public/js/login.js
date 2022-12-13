$('#BTN_Login').click(function (){
    const adress = "http://172.31.254.144:8099/";
    const url = "Home";
    let login = $('#TB_Login').val();
    let password = $('#TB_Mdp').val();



    $.ajax({
        url : adress + url,
        type : "POST",
        data : {
            'login' :  login,
            'password' : password

        },
        success : function (retour, status){
            window.location.replace(adress + url);

        },
        error : function (data, status){
            alert(data);
        }
    })
});
