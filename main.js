//Function to only read this script when the entire html file has been loaded
$(document).ready(function(){

    $("#sideBar-addTask").click(function(){
        $(".addTask-container").toggle();
        $(".login-container").hide();
        $(".signUp-container").hide();
    });

    $("#header-login").click(function(){
        $(".login-container").toggle();
        $(".addTask-container").hide();
        $(".signUp-container").hide();
    });

    $("#signUp-link").click(function(){
        $(".signUp-container").toggle();
        $(".addTask-container").hide();
        $(".login-container").hide();
    });

    });