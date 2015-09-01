//Singleton for the WordStore admin functionality.
var wsAdmin = new function(){
    
    this.setup = function(){
        $(".loginLink").click(function(){
            wsAdmin.showLogin();
        });
        
        $(".logoutLink").click(function(){
            wsAdmin.showLogout();
        });
        
        $(".registerLink").click(function(){
            wsAdmin.showRegister();
        });
    };
    
    this.showLogin = function(){
        $.ajax({
            url: "login"
        }).complete(function(result){
            $(result.responseText).dialog();
            
        }).error(function(error){
            var two = 2;
        });
    };
    
    this.doLogin = function(){
        
    };
    
    this.showLogout = function(){
        
    };
    
    this.doLogout = function(){
        
    };
    
    this.showRegister = function(){
        
    };
    
    this.doRegister = function(){
        
    };
};