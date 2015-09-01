//Singleton for the WordStore admin functionality.
var wsAdmin = new function(){
    
    this.loginDialog = null;
    
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
        if(wsAdmin.loginDialog){
            wsAdmin.loginDialog.dialog('destroy').remove();
        }
        $.ajax({
            url: js_fix + "./login"
        }).complete(function(result){
            wsAdmin.loginDialog = $(result.responseText).dialog();
            var form = $(wsAdmin.loginDialog).find("form");
            $(wsAdmin.loginDialog).find("input[name='_submit']").click(function(event){
                event.preventDefault();
                $.ajax({
                    url: js_fix + './login_check',
                    type: 'post',
                    dataType: 'json',
                    data: form.serialize(),
                    success: function(data) {
                        debugger;
                    }
                });
            });
            
        }).error(function(error){
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