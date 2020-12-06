$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#spinnertop').toggleClass('spinner-top');
        $('#spinnermiddle').toggleClass('spinner-middle');
        $('#spinnerbottom').toggleClass('spinner-bottom');
    });
    $('#sidebarCollapse2').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#spinnertop1').toggleClass('spinner-top');
        $('#spinnermiddle2').toggleClass('spinner-middle');
        $('#spinnerbottom3').toggleClass('spinner-bottom');
    });

});
function loginpage(){
    window.open("login","_self")
}
function signuppage(){
    window.open("signup","_self")
}

function blogopen(){
    window.open("login","_self")
}
